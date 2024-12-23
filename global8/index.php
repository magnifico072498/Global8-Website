<!DOCTYPE html>
<html lang="en">

<head>
  <title>GLOBAL8 FINANCE CORPORATION | Trusted Financial Solutions for Businesses</title>
  <!-- Meta Tags for SEO -->
  <meta name="description" content="GLOBAL8 FINANCE CORPORATION offers flexible business loans for startups and established companies. Get funding to grow your business with competitive rates and fast approval.">
  <meta name="keywords" content="GLOBAL8 FINANCE CORPORATION, business loans, sole proprietorship, partnership, corporation">
  <meta name="author" content="GLOBAL8 FINANCE CORPORATION">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" href="media/icon/global8-finance-corporation-icon.png" type="image/x-icon">
  <meta charset="UTF-8" />
  <?php include('style.html'); ?>
  <style>
    /* Change the background color of the chat window */
    .livechat-window {
      background-color: #333333 !important;
      /* Dark gray */
      color: #ffffff !important;
      /* White text */
    }

    /* Customize the chat button */
    .livechat-launcher {
      background-color: #b38b00 !important;
      /* Gold */
      border-radius: 50% !important;
      /* Circular button */
    }

    /* Style the welcome message */
    .livechat-window-title {
      font-family: 'Montserrat', sans-serif !important;
      font-weight: bold !important;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <?php include_once('navigation.html'); ?>

  <!-- Main Content -->
  <main>
    <?php include_once('home.php'); ?>
    <?php include_once('services.html'); ?>
    <?php include_once('steps.html'); ?>
    <?php include_once('requirements.html'); ?>
    <?php include_once('why.html'); ?>
    <?php include_once('recognized.html'); ?>
    <?php include_once('testimonials.html'); ?>
    <?php include_once('faqs.html'); ?>
    <?php include_once('contact-us.php'); ?>
  </main>

  <!-- Footer -->
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

  <!-- Start of LiveChat (www.livechat.com) code -->
  <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18915725;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";;
    (function(n, t, c) {
      function i(n) {
        return e._h ? e._h.apply(null, n) : e._q.push(n)
      }
      var e = {
        _q: [],
        _h: null,
        _v: "2.0",
        on: function() {
          i(["on", c.call(arguments)])
        },
        once: function() {
          i(["once", c.call(arguments)])
        },
        off: function() {
          i(["off", c.call(arguments)])
        },
        get: function() {
          if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
          return i(["get", c.call(arguments)])
        },
        call: function() {
          i(["call", c.call(arguments)])
        },
        init: function() {
          var n = t.createElement("script");
          n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
        }
      };
      !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
    window.addEventListener('load', function() {
      setTimeout(function() {
        LCC.chat.show(); // This will show the chat window after a 30-second delay
      }, 30000);
    });
  </script>
  <noscript><a href="https://www.livechat.com/chat-with/18915725/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
  <!-- End of LiveChat code -->

</body>

</html>