 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Voice</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
       <footer>
      <div class="footer-content">
        <div class="footer-col">
          <h3>GREEN VOICE</h3>
          <p>
            Providing comprehensive information about our Green Voice members.
          </p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="footer-col">
          <h3>Quick Links</h3>
          <p><a href="index.php">Executive Committee</a></p>
          <p><a href="teacher.php">Teacher Advisors</a></p>
          <p><a href="student.php">Student Advisors</a></p>
          <p><a href="#">Green Voice Resources</a></p>
          <p><a href="#">Contact Directory</a></p>
        </div>

        <div class="footer-col">
          <h3>Contact Information</h3>
          <p>
            <i class="fas fa-map-marker-alt"></i> Green Voice, BAU
          </p>
          <p><i class="fas fa-phone"></i> XXXXXXXXXX</p>
          <p><i class="fas fa-envelope"></i> greenvoicebau@gmail.com</p>
          <p><i class="fas fa-clock"></i> Sunday-Tuesday: 5:00 PM - 8:00 PM</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p> @2025 GREEN VOICE. All rights reserved. Developed by 
        <a href="https://www.linkedin.com/in/muhammad-ishmamul-hoque-03a882284/" target="_blank">Muhammad Ishmamul Hoque</a></p>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", () => {
  // Mobile Navigation Toggle
  const navToggle = document.querySelector(".nav-toggle");
  const navMenu = document.getElementById("nav-menu");

  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("show");
  });

  const navLinks = document.querySelectorAll("nav a");
  const currentPath = window.location.pathname.split("/").pop(); // removes preceding folders if any

  navLinks.forEach((link) => {
    // Extract href path (e.g., "about.html")
    const linkPath = link.getAttribute("href");

    // Check if this link matches current page
    if (
      linkPath === currentPath ||
      (linkPath === "index.php" && currentPath === "")
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
});
      </script>
  </body>
</html>