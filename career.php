<!DOCTYPE html>
<html lang="en">

<head>
  <title>Career | GLOBAL8 FINANCE CORPORATION</title>
  <!-- Meta Tags for SEO -->
  <meta name="description" content="Learn about GLOBAL8 FINANCE CORPORATION, a trusted provider of financial solutions for businesses in the Philippines. Empowering entrepreneurs with tailored business loans and exceptional service.">
  <meta name="keywords" content="About GLOBAL8 FINANCE CORPORATION, business financing, financial solutions, loans, Filipino businesses, startups">
  <meta name="author" content="GLOBAL8 FINANCE CORPORATION">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" href="media/icon/global8-finance-corporation-icon.png" type="image/x-icon">
  <meta charset="UTF-8" />
  <?php include_once('style.html'); ?>
  <!--=============== AOS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

  <!-- header -->
  <?php include_once('navigation.html'); ?>

  <!-- Main Content -->
  <main>
    <?php include_once('global8-join.html'); ?>
    <?php include_once('global8-careers.php'); ?>
    <?php include_once('globla8-benefits.html'); ?>
    <?php include_once('contact-us.php'); ?>
  </main>

  <!-- footer -->
  <?php include_once('footer.html'); ?>

  <!-- JavaScript for Smooth Scrolling with Easing -->
  <script>
    // Smooth scroll with animation effect
    document.querySelectorAll('.scroll-link').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetID = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetID);

        // Custom scroll animation using window.requestAnimationFrame
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: 'smooth'
        });
      });
    });

    AOS.init({
      duration: 1200, // Animation duration in ms
      once: true, // Animate only once
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</body>

</html>