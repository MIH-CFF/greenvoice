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
    <style>
      .cf{
  display: flex;
  grid-template-columns: repeat(
    auto-fill,
    minmax(360px, 1fr)
  ); /* Larger min width */
  gap: 3.5rem; /* More gap */
  margin-bottom: 7rem; /* More space below grid */
  justify-self:center;
  align-self:center;
}
    </style>
  </head>
  <body>
   <?php
    include 'head.php';
    ?>
    <section class="hero">
      <div class="hero-content">
        <h1>Teacher Advisors</h1>
        <p>
          Meet our esteemed teacher advisors, whose invaluable guidance and unwavering commitment inspire our journey toward a more sustainable and nature-conscious future
        </p>
      </div>
    </section>


    <main class="container">
      <section id="c_ad">
        <div class="section-title">
          <h2>Cheif Advisor</h2>
        </div>

        <div class="gv-grid cf">
        </div>
      </section>

      <!-- Teacher Advisors Section -->
      <section id="t_ad">
        <div class="section-title">
          <h2>Student Advisors</h2>
        </div>

        <div class="gv-grid">
        </div>
      </section>

    </main>
    <?php
    include 'foot.php';
    ?>
    </footer>
        <script src="tea_script.js"></script>
  </body>
</html>
