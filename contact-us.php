<style>
  .contact-section {
    position: relative;
    background-image: url('./media/images/backgrounds/contact-us-financing-support.webp');
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 100px 0;
    color: #333;
  }

  .contact-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1;
  }

  .contact-container {
    position: relative;
    z-index: 2;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    background-color: #FFF;
    padding: 40px 70px;
    border-radius: 10px;
    width: 100%;
    max-width: 1300px;
    justify-content: center;
    text-align: left;
  }

  .contact-title {
    font-size: 2rem;
    color: #333;
    margin-bottom: 10px;
    font-weight: bold;
  }

  .contact-column {
    flex: 1;
    min-width: 300px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .btn-submit {
    background-color: #b38b00;
    background-image: linear-gradient(135deg, #b38b00, #d9a700);
    border-radius: 30px;
    width: 40%;
    color: #ffffff;
    font-size: 1rem;
    font-weight: 600;
    padding: 0.75rem 1.5rem;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-submit:hover {
    background-image: linear-gradient(135deg, #d9a700, #b38b00);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    transform: translateY(-2px);
  }

  .btn-submit:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .contact-address {
    font-style: normal;
    line-height: 1.8;
    color: #444;
    font-size: 1rem;
  }

  .contact-capsule {
    margin-bottom: 12px;
  }

  .contact-address p {
    color: #333;
    font-weight: 400;
  }

  .contact-address p strong {
    color: #b38b00;
    font-weight: bold;
    /* Highlight key info */
  }

  .contact-address a {
    color: #3498db;
    font-weight: 400;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
  }

  .contact-address a:hover {
    color: #b38b00;
  }

  .contact-address a:focus {
    outline: none;
    text-decoration: underline;
  }

  .contact-map iframe {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    margin-top: 15px;
  }

  .line-break {
    display: none;
  }

  .divider {
    display: block;
  }

  @media (max-width: 1200px) {
    .contact-container {
      padding: 20px 20px;
    }

    .contact-section {
      padding: 70px 50px;
    }

    .contact-title {
      font-size: 2rem;
    }

    .line-break {
      display: block;
    }
  }

  @media (max-width: 768px) {
    .contact-container {
      padding: 10px 15px;
    }

    .contact-section {
      padding: 70px 40px;
    }

    .contact-title {
      font-size: 1.4rem;
    }

    .btn-submit {
      width: 100%;
    }

    .line-break {
      display: block;
    }
  }

  @media (max-width: 480px) {
    .contact-container {
      padding: 25px;
    }

    .contact-section {
      padding: 30px 20px;
    }

    .contact-title {
      font-size: 1.2rem;
    }

    .contact-column {
      min-width: 100%;
    }

    .btn-submit {
      width: 100%;
    }

    .line-break {
      display: block;
    }

    .divider {
      display: block;
    }
  }
</style>

<section id="contact-us" class="contact-section" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="ease-in-out">
  <div class="contact-container" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out">

    <div class="contact-column">
      <h2 class="contact-title">We'd Love to Hear From You</h2>
      <div id="formResponse"></div>
      <form id="contact-form" action="functions/contact-form-function.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn-submit">Submit</button>
      </form>
    </div>

    <div class="contact-column">
      <h2 class="contact-title">Explore Other Ways to Reach Us</h2>
      <p>We are located at:</p>
      <address class="contact-address">
        <p><strong>GLOBAL8 FINANCE CORPORATION</strong></p>
        <p class="contact-capsule">
          Unit 3601, 3610 & 3611, #6794 Alveo
          Financial Tower, Ayala Avenue, Legazpi 
          Village Makati City 1129
        </p>
        <p class="contact-capsule">
          <i class="ri-mail-line"></i> Email:<br class="line-break" />
          <i class="ri-arrow-right-wide-line"></i><a href="mailto:info@global8.com.ph">info@global8.com.ph</a> <br class="line-break" /> 
          <i class="ri-arrow-right-wide-line"></i><a href="mailto:loans@global8.com.ph">loans@global8.com.ph</a>
        </p>
        <p class="contact-capsule">
          <i class="ri-phone-fill"></i> Phone:<br class="line-break" />
          <i class="ri-arrow-right-wide-line"></i><a href="tel:+639177081102">+63 917 708 1102</a> <br class="line-break" /> 
          <i class="ri-arrow-right-wide-line"></i><a href="tel:+639088118861">+63 908 811 8861</a> <br class="line-break" /> 
          <i class="ri-arrow-right-wide-line"></i><a href="tel:+639175431288">+63 917 543 1288</a>
        </p>
      </address>
      <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6957175517864!2d121.01417177596801!3d14.559385185922118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9059b0e133b%3A0x428e471713464530!2sAlveo%20Financial%20Tower%20by%20Alveo%20Land!5e0!3m2!1sen!2sph!4v1729370216279!5m2!1sen!2sph"
          width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#contact-form').on('submit', function(e) {
      e.preventDefault();

      var formData = $(this).serialize();

      $.ajax({
        url: 'functions/contact-form-function.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          $('#formResponse').html(response);
          $('#contact-form')[0].reset();
        },
        error: function() {
          $('#formResponse').html('');
        }
      });
    });
  });
</script>