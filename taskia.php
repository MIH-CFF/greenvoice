<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      /* Profile Container */
              :root {
            --primary-dark: #0a4d3c;
            --primary: #1a936f;
            --primary-light: #88d498;
            --primary-extra-light: #d1f0db;
            --accent: #f3e9d2;
            --light: #f9f9f9;
            --dark: #333;
            --white: #ffffff;
            --nav-bg: rgba(255, 255, 255, 0.95);
            --nav-shadow: 0 4px 20px rgba(10, 77, 60, 0.1);
            --transition: all 0.3s ease;
            --border-radius: 8px;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
      .profile-container {
        max-width: 1200px;
        margin: 3rem auto;
        padding: 0 2rem;
      }

      .profile-header {
        display: flex;
        flex-wrap: wrap;
        gap: 3rem;
        margin-bottom: 3rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid var(--primary-extra-light);
      }

      .profile-image-container {
            flex: 0 0 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .profile-image {
            width: 30vw;
            height: 35vw;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            position: relative;
            background: linear-gradient(45deg, var(--primary-extra-light), var(--primary-light));
            margin-bottom: 1.5rem;
        }
        
        .profile-image img {
            width: 30vw;
            height: 35vw;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .profile-image:hover img {
            transform: scale(1.05);
        }
        


      .profile-info {
        flex: 1;
        min-width: 300px;
      }

      .profile-info h1 {
        font-size: 2.5rem;
        color: var(--primary-dark);
        margin-bottom: 0.5rem;
      }

      .profile-info .position {
        font-size: 1.4rem;
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 0.5rem;
      }

      .profile-info .department {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .profile-info .department::before {
        content: "";
        width: 20px;
        height: 2px;
        background: var(--primary);
      }

      .contact-info {
        background-color: var(--primary-extra-light);
        padding: 1.5rem;
        border-radius: var(--border-radius);
        margin-bottom: 1.5rem;
      }

      .contact-info div {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 1rem;
        color: #555;
        transition: var(--transition);
      }

      .contact-info div:hover {
        color: var(--primary-dark);
      }

      .contact-info i {
        width: 25px;
        text-align: center;
        color: var(--primary);
        font-size: 1.1rem;
      }

      .social-links-main {
        display: flex;
        gap: 1rem;
      }

      .social-links-main a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 5vw;
        height: 5vw;
        background-color: var(--primary-extra-light);
        color: var(--primary-dark);
        border-radius: 50%;
        text-decoration:none;
        transition: var(--transition);
      }

      .social-links-main a:hover {
        background: var(--primary);
        color: var(--white);
        transform: translateY(-3px);
      }

      @media (max-width: 992px) {
        .profile-content {
          grid-template-columns: 1fr;
        }

        .profile-sidebar {
          max-width: 500px;
        }
      }

      @media (max-width: 768px) {
        header {
          padding: 0.8rem 1.5rem;
        }

        .nav-toggle {
          display: block;
        }

        nav ul {
          display: none;
          position: absolute;
          top: 100%;
          left: 0;
          width: 100%;
          background: var(--nav-bg);
          flex-direction: column;
          padding: 1rem 0;
          gap: 0;
          box-shadow: var(--nav-shadow);
        }

        nav ul.show {
          display: flex;
        }

        nav ul li {
          width: 100%;
        }

        nav ul li a {
          display: block;
          padding: 1.2rem 2rem;
          border-radius: 0;
        }

        nav ul li a:hover {
          background: var(--primary-extra-light);
        }

        nav a.active::after {
          display: none;
        }

        .profile-header {
          flex-direction: column;
          gap: 1.5rem;
        }

        .profile-image {
          flex: 0 0 auto;
          max-width: 300px;
          margin: 0 auto;
        }
      }

      @media (max-width: 576px) {
        .header-container {
          padding: 0;
        }

        .logo-text {
          font-size: 1.6rem;
        }

        .logo-icon {
          width: 42px;
          height: 42px;
        }

        .profile-container {
          padding: 0 1.5rem;
        }

        .profile-info h1 {
          font-size: 2.2rem;
        }

        .profile-info .position {
          font-size: 1.2rem;
        }
      }
    </style>
  </head>
  <body>
    <?php 
    include 'head.php'
    ?>
    <!-- Profile Content -->
    <main class="profile-container">
      <div class="profile-header">
        <div class="profile-image">
          <img src="images/taskia.jpg" alt="Taskia Khatun">
        </div>

        <div class="profile-info">
          <h1>Taskia Khatun</h1>
          <p class="position">General Secretary</p>
          <p class="department">Faculty of Agriculture</p>

          <div class="contact-info">
            <div>
              <i class="fas fa-envelope"></i>
              <span>tahiyataskia@gmail.com</span>
            </div>
            <div>
              <i class="fas fa-phone"></i>
              <span>01767334187</span>
            </div>
            <div>
              <i class="fas fa-building"></i>
              <span>Sultana Rajiya Hall</span>
            </div>
            <div>
             <i class="fa-solid fa-droplet" style="color: #f61335;"></i>
              <span>A(+ve)</span>
            </div>
          </div>

          <div class="social-links-main">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-researchgate"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </main>

    <?php 
    include 'foot.php'
    ?>
  </body>
</html>
