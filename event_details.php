<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Details - Green Voice</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <style>
      .event-details-container {
        max-width: 1000px;
        margin: 2rem auto;
        padding: 0 2rem;
      }

      .event-header {
        text-align: center;
        margin-bottom: 3rem;
      }

      .event-title {
        font-size: 3rem;
        color: var(--primary-dark);
        margin-bottom: 1rem;
      }

      .event-date {
        font-size: 1.3rem;
        color: var(--primary);
        font-weight: 600;
      }

      /* Slideshow Styles */
      .slideshow-container {
        position: relative;
        width: 100%;
        height: 500px;
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      }

      .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.7s ease-in-out;
      }

      .slide.active {
        opacity: 1;
      }

      .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .slideshow-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.5);
        color: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        transition: background 0.5s ease;
        z-index: 10;
      }

      .slideshow-nav:hover {
        background: rgba(0,0,0,0.8);
      }

      .prev-slide {
        left: 20px;
      }

      .next-slide {
        right: 20px;
      }

      .slide-indicators {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
        z-index: 10;
      }

      .slide-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
        transition: background 0.5s ease;
      }

      .slide-indicator.active {
        background: white;
        transform: scale(1.2);
      }

      .event-content {
        background: white;
        padding: 3rem;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        line-height: 1.8;
        font-size: 1.1rem;
      }

      .back-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--primary);
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        margin-bottom: 2rem;
        transition: all 0.3s ease;
      }

      .back-button:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
      }

      @media (max-width: 768px) {
        .event-title {
          font-size: 2.2rem;
        }
        
        .slideshow-container {
          height: 300px;
        }
        
        .slideshow-nav {
          width: 40px;
          height: 40px;
          font-size: 1.2rem;
        }
        
        .event-content {
          padding: 2rem;
        }
      }
    </style>
  </head>
  <body>
    <?php include 'head.php'; ?>

    <main class="event-details-container">
      
      <?php
      include 'config.php';
      
      if(isset($_GET['id'])) {
          $event_id = mysqli_real_escape_string($conn, $_GET['id']);
          
          // Get event details
          $event_sql = "SELECT * FROM events WHERE event_id = '$event_id'";
          $event_result = mysqli_query($conn, $event_sql);
          
          // Get event images
          $images_sql = "SELECT * FROM event_images WHERE event_id = '$event_id' ORDER BY display_order";
          $images_result = mysqli_query($conn, $images_sql);
          
          if(mysqli_num_rows($event_result) > 0) {
              $event = mysqli_fetch_assoc($event_result);
              $event_date = date('F j, Y', strtotime($event['event_date']));
              
              // Check if we have images in event_images table
              if(mysqli_num_rows($images_result) > 0) {
                  $images_html = '';
                  $indicators_html = '';
                  $image_count = 0;
                  
                  while($image = mysqli_fetch_assoc($images_result)) {
                      $active_class = $image_count == 0 ? 'active' : '';
                      $images_html .= '
                      <div class="slide ' . $active_class . '" data-index="' . $image_count . '">
                        <img src="' . $image['image_url'] . '" alt="Event Image ' . ($image_count + 1) . '">
                      </div>';
                      
                      $indicators_html .= '
                      <div class="slide-indicator ' . $active_class . '" data-index="' . $image_count . '"></div>';
                      
                      $image_count++;
                  }
                  
                  $slideshow_html = '
                  <div class="slideshow-container" id="eventSlideshow">
                    ' . $images_html . '
                    <button class="slideshow-nav prev-slide">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slideshow-nav next-slide">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="slide-indicators">
                      ' . $indicators_html . '
                    </div>
                  </div>';
              } else {
                  // Fallback to single image from events table
                  $slideshow_html = '
                  <div class="slideshow-container">
                    <div class="slide active">
                      <img src="' . $event['image'] . '" alt="' . $event['title'] . '">
                    </div>
                  </div>';
              }
              
              echo '
              <div class="event-header">
                <h1 class="event-title">' . $event['title'] . '</h1>
                <div class="event-date">' . $event_date . '</div>
              </div>
              
              ' . $slideshow_html . '
              
              <div class="event-content">
                ' . nl2br($event['full_description']) . '
              </div>';
          } else {
              echo '
              <div style="text-align: center; padding: 4rem;">
                <h2>Event Not Found</h2>
                <p>The event you are looking for does not exist.</p>
                <a href="events.php" class="back-button">Back to Events</a>
              </div>';
          }
      } else {
          echo '
          <div style="text-align: center; padding: 4rem;">
            <h2>No Event Selected</h2>
            <p>Please select an event from the events page.</p>
            <a href="events.php" class="back-button">Back to Events</a>
          </div>';
      }
      ?>
      <br>
      <div style="padding-left:40%"><a href="events.php" class="back-button">
        <i class="fas fa-arrow-left"></i>
        Back to Events
      </a></div>

    </main>

    <?php include 'foot.php'; ?>

    <script>
      // Slideshow functionality
      document.addEventListener('DOMContentLoaded', function() {
        const slideshow = document.getElementById('eventSlideshow');
        if (!slideshow) return;
        
        const slides = slideshow.querySelectorAll('.slide');
        const indicators = slideshow.querySelectorAll('.slide-indicator');
        const prevBtn = slideshow.querySelector('.prev-slide');
        const nextBtn = slideshow.querySelector('.next-slide');
        
        let currentSlide = 0;
        const totalSlides = slides.length;
        
        function showSlide(index) {
          // Remove active class from all slides and indicators
          slides.forEach(slide => slide.classList.remove('active'));
          indicators.forEach(indicator => indicator.classList.remove('active'));
          
          // Calculate the correct index (wrap around)
          currentSlide = (index + totalSlides) % totalSlides;
          
          // Add active class to current slide and indicator
          slides[currentSlide].classList.add('active');
          indicators[currentSlide].classList.add('active');
        }
        
        // Next slide
        nextBtn.addEventListener('click', () => {
          showSlide(currentSlide + 1);
        });
        
        // Previous slide
        prevBtn.addEventListener('click', () => {
          showSlide(currentSlide - 1);
        });
        
        // Indicator click
        indicators.forEach((indicator, index) => {
          indicator.addEventListener('click', () => {
            showSlide(index);
          });
        });
        
        // Auto slide (optional)
        let slideInterval = setInterval(() => {
          showSlide(currentSlide + 1);
        }, 3000);
        
        // Pause on hover
        slideshow.addEventListener('mouseenter', () => {
          clearInterval(slideInterval);
        });
        
        slideshow.addEventListener('mouseleave', () => {
          slideInterval = setInterval(() => {
            showSlide(currentSlide + 1);
          }, 3000);
        });
        
        // Touch swipe support for mobile
        let startX = 0;
        let endX = 0;
        
        slideshow.addEventListener('touchstart', (e) => {
          startX = e.touches[0].clientX;
        });
        
        slideshow.addEventListener('touchend', (e) => {
          endX = e.changedTouches[0].clientX;
          handleSwipe();
        });
        
        function handleSwipe() {
          const swipeThreshold = 50;
          const diff = startX - endX;
          
          if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
              // Swipe left - next slide
              showSlide(currentSlide + 1);
            } else {
              // Swipe right - previous slide
              showSlide(currentSlide - 1);
            }
          }
        }
      });
    </script>
    
  </body>
</html>