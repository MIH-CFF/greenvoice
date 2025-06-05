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
   <?php
    include 'head.php';
    ?>
    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-content">
        <h1>Student Advisors</h1>
        <p>
          Meet our awesome student advisors — always ready with thoughtful advice and fresh perspectives that help guide us on our journey toward a more sustainable and nature-aware future
        </p>
      </div>
    </section>

    <!-- Main Content -->
    <main class="container">
      <!-- Executive Committee Section -->
      <section id="s_ad">
        <div class="section-title">
          <h2>Student Advisors</h2>
        </div>

        <div class="gv-grid">
          <!-- gv cards will be loaded by JavaScript -->
        </div>
      </section>

      
      </section>
    </main>
    <?php
    include 'foot.php';
    ?>
    <script src="stu_script.js"></script>
  </body>
</html>
