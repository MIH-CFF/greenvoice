<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events - Green Voice</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <style>
      :root {
        --primary: #4361ee;
        --primary-dark: #3a56d4;
        --primary-light: #4895ef;
      }

      .events-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem;
      }

      .hero {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 3rem 1rem;
        text-align: center;
        margin-bottom: 2rem;
      }

      .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
      }

      .hero p {
        font-size: 1.1rem;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
      }

      /* Events Grid - Responsive */
      .events-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
      }

      /* Tablet and larger (2 cards) */
      @media (min-width: 768px) {
        .events-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 2rem;
        }
      }

      /* Desktop (2 cards - maintaining requirement) */
      @media (min-width: 1024px) {
        .events-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 2.5rem;
        }
      }

      /* Mobile adjustments */
      @media (max-width: 767px) {
        .hero {
          padding: 2rem 1rem;
        }
        
        .hero h1 {
          font-size: 2rem;
        }
        
        .hero p {
          font-size: 1rem;
          padding: 0 1rem;
        }
        
        .events-container {
          padding: 0.5rem;
        }
      }

      /* Event Card Styles */
      .event-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        height: 350px;
        position: relative;
      }

      /* Slightly smaller cards on mobile */
      @media (max-width: 767px) {
        .event-card {
          height: 250px;
          margin: 0 0.5rem;
        }
      }

      .event-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
      }

      /* Click to flip on mobile */
      @media (max-width: 767px) {
        .event-card.flipped .event-card-inner {
          transform: rotateY(180deg);
        }
      }

      .event-card-inner {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      }

      .event-card:hover .event-card-inner {
        transform: rotateY(180deg);
      }

      .event-card-front,
      .event-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 15px;
        overflow: hidden;
      }

      .event-card-front {
        background: linear-gradient(45deg, var(--primary-dark), var(--primary));
      }

      .event-card-back {
        background: white;
        transform: rotateY(180deg);
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      @media (max-width: 767px) {
        .event-card-back {
          padding: 1.2rem;
        }
      }

      .event-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
      }

      .event-card:hover .event-image {
        transform: scale(1.05);
      }

      .event-name {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.85));
        color: white;
        padding: 1.5rem 1rem 1rem;
        font-size: 1.3rem;
        font-weight: 600;
      }

      @media (max-width: 767px) {
        .event-name {
          padding: 1.2rem 0.8rem 0.8rem;
          font-size: 1.1rem;
        }
      }

      .event-date {
        color: var(--primary);
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 0.8rem;
        display: flex;
        align-items: center;
        gap: 6px;
      }

      .event-date i {
        font-size: 1rem;
      }

      .event-description {
        color: #666;
        line-height: 1.5;
        font-size: 0.9rem;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex-grow: 1;
      }

      @media (max-width: 767px) {
        .event-description {
          font-size: 0.85rem;
          -webkit-line-clamp: 4;
        }
      }

      /* View More Button for mobile */
      .event-more-info {
        display: none;
      }

      @media (max-width: 767px) {
        .event-more-info {
          display: block;
          color: var(--primary);
          font-size: 0.85rem;
          font-weight: 600;
          margin-top: 0.5rem;
          text-align: right;
        }
      }

      .no-events {
        text-align: center;
        padding: 4rem 2rem;
        color: #666;
        font-size: 1.2rem;
        grid-column: 1 / -1;
      }

      .no-events i {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: var(--primary-light);
      }

      @media (max-width: 767px) {
        .no-events {
          padding: 3rem 1rem;
          font-size: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <?php include 'head.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-content">
        <h1>Events</h1>
        <p>
          Discover our upcoming and past events. Join us in making a difference for our environment and community.
        </p>
      </div>
    </section>

    <!-- Events Content -->
    <main class="events-container">
      <div class="events-grid">
        <?php
        include 'config.php';
        
        // Get events with their first image
        $sql = "SELECT e.*, 
                       (SELECT image_url FROM event_images WHERE event_id = e.event_id ORDER BY display_order LIMIT 1) as primary_image
                FROM events e 
                ORDER BY e.event_date DESC";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $event_date = date('F j, Y', strtotime($row['event_date']));
                $image_url = !empty($row['primary_image']) ? $row['primary_image'] : $row['image'];
                $short_desc = strip_tags($row['short_description']);
                $short_desc = strlen($short_desc) > 150 ? substr($short_desc, 0, 150) . '...' : $short_desc;
                
                echo '
                <div class="event-card" data-event-id="' . $row['event_id'] . '" onclick="handleEventClick(' . $row['event_id'] . ', event)">
                  <div class="event-card-inner">
                    <div class="event-card-front">
                      <img src="' . $image_url . '" alt="' . htmlspecialchars($row['title']) . '" class="event-image">
                      <div class="event-name">' . htmlspecialchars($row['title']) . '</div>
                    </div>
                    <div class="event-card-back">
                      <div>
                        <div class="event-date">
                          <i class="far fa-calendar-alt"></i>
                          ' . $event_date . '
                        </div>
                        <div class="event-description">' . htmlspecialchars($short_desc) . '</div>
                      </div>
                      <div class="event-more-info">Tap to view details →</div>
                    </div>
                  </div>
                </div>';
            }
        } else {
            echo '
            <div class="no-events">
              <i class="fas fa-calendar-times"></i>
              <p>No events scheduled at the moment. Check back later!</p>
            </div>';
        }
        ?>
      </div>
    </main>

    <?php include 'foot.php'; ?>

    <script>
        const navLinks = document.querySelectorAll("nav a");
  const currentPath = window.location.pathname.split("/").pop(); // removes preceding folders if any

  navLinks.forEach((link) => {
    // Extract href path (e.g., "about.html")
    const linkPath = link.getAttribute("href");

    // Check if this link matches current page
    if (
      linkPath === currentPath ||
      (linkPath === "index.html" && currentPath === "")
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }

    // Optional: Close mobile menu when a link is clicked
    link.addEventListener("click", () => {
      if (navMenu.classList.contains("show")) {
        navMenu.classList.remove("show");
      }
    });
  });
      // Handle click events for both mobile and desktop
      function handleEventClick(eventId, clickEvent) {
        const eventCard = clickEvent.currentTarget;
        const isMobile = window.innerWidth <= 767;
        
        if (isMobile) {
          // On mobile, we have two options:
          // 1. Toggle flip on first tap (current implementation)
          // 2. Go directly to details page on tap
          
          // For flip on tap (uncomment if you want this behavior):
          // eventCard.classList.toggle('flipped');
          
          // For direct navigation (recommended for better UX):
          // Prevent immediate navigation to allow user to read flipped content
          // We'll use a small delay to check if it's a double tap
          if (eventCard.classList.contains('flipped')) {
            // If already flipped, navigate to details
            window.location.href = 'event_details.php?id=' + eventId;
          } else {
            // First tap - flip the card
            eventCard.classList.add('flipped');
            clickEvent.stopPropagation();
            
            // Reset flip after 5 seconds or when clicking outside
            setTimeout(() => {
              if (eventCard.classList.contains('flipped')) {
                eventCard.classList.remove('flipped');
              }
            }, 5000);
          }
        } else {
          // On desktop, just navigate (hover handles the flip)
          window.location.href = 'event_details.php?id=' + eventId;
        }
      }
      
      // Close flipped cards when clicking outside on mobile
      document.addEventListener('click', function(event) {
        if (window.innerWidth <= 767) {
          const flippedCards = document.querySelectorAll('.event-card.flipped');
          flippedCards.forEach(card => {
            if (!card.contains(event.target)) {
              card.classList.remove('flipped');
            }
          });
        }
      });
      
      // Handle window resize
      window.addEventListener('resize', function() {
        // Remove flipped state when switching from mobile to desktop
        if (window.innerWidth > 767) {
          const flippedCards = document.querySelectorAll('.event-card.flipped');
          flippedCards.forEach(card => {
            card.classList.remove('flipped');
          });
        }
      });
    </script>
  </body>
</html>