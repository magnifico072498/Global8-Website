  <style>
    .cover-section {
      position: relative;
      background: url('media/images/backgrounds/building-loans-financing-options.webp') no-repeat center center/cover;
      height: 700px;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 1;
      overflow: hidden;
      padding: 60px 20px;
      text-align: center;
    }

    .cover-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.2);
      z-index: -1;
    }


    .hero-content h1 {
      font-size: 3.5rem;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      margin-bottom: 20px;
    }

    .hero-content p {
      font-size: 1.2rem;
      font-weight: 500;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      margin-bottom: 30px;
    }

    .form-container {
      position: relative;
      margin-top: -360px;
      z-index: 1;
      display: flex;
      justify-content: center;
      padding: 0 15px;
    }

    .application-form {
      max-width: 800px;
      width: 100%;
      margin: 30vh auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .application-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .form-floating {
      position: relative;
      margin-bottom: 20px;
    }

    .form-floating .form-input {
      width: 100%;
      padding: 12px;
      font-size: 1rem;
      border: 1px solid #ccc;
      background-color: #fff;
      box-sizing: border-box;
      margin-bottom: 10px;
      border-radius: 7px;
      border-top-left-radius: 0;
    }

    .form-floating .form-select {
      width: 100%;
      padding: 12px;
      padding-right: 30px;
      font-size: 1rem;
      border: 1px solid #ccc;
      background-color: #fff;
      box-sizing: border-box;
      margin-bottom: 10px;
      border-radius: 7px;
      border-top-left-radius: 0;
    }

    .form-label {
      position: absolute;
      top: 43%;
      left: 12px;
      transform: translateY(-50%);
      font-size: 0.9rem;
      transition:
        top 0.2s ease,
        font-size 0.2s ease,
        color 0.2s ease,
        background-color 0.2s ease,
        padding 0.2s ease;
      pointer-events: none;
    }

    .form-input:focus,
    .form-select:focus {
      outline: none;
      border-color: #333;
    }

    .form-input:focus+.form-label,
    .form-input:not(:placeholder-shown)+.form-label,
    .form-select:not(.empty)+.form-label,
    .form-select:focus+.form-label {
      top: -10px;
      left: 0;
      font-size: 0.8rem;
      color: #fff;
      background-color: #333;
      padding: 2px 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    .col-xs-12,
    .col-sm-12,
    .col-md-6 {
      width: 100%;
      padding: 0 15px;
    }

    @media (max-width: 575px) {
      .application-form {
        margin: 10vh auto;
      }
    }

    @media (min-width: 576px) {
      .col-sm-12 {
        width: 50%;
      }

      .application-form {
        margin: 20vh auto;
      }
    }

    @media (min-width: 992px) {
      .col-md-6 {
        width: 50%;
      }
    }

    .form-container button {
      background-color: #b38b00;
      background-image: linear-gradient(135deg, #b38b00, #d9a700);
      border-radius: 30px;
      color: #ffffff;
      font-size: 1rem;
      font-weight: 600;
      width: 100%;
      padding: 0.75rem 1.5rem;
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .form-container button:hover {
      background-image: linear-gradient(135deg, #d9a700, #b38b00);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
      transform: translateY(-2px);
      /* Slight lift effect on hover */
    }

    .form-container button:active {
      transform: translateY(0);
      /* Reset position when clicked */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      /* Lighter shadow on click */
    }


    @media (max-width: 1200px) {
      .application-title {
        font-size: 1.8rem;
        margin-bottom: 20px;
      }

      .hero-content h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
      }

      .hero-content p {
        font-size: 1rem;
        margin-bottom: 0;
      }

      .form-container {
        margin-top: -340px;
      }
    }

    @media (max-width: 768px) {
      .application-title {
        font-size: 1.4rem;
        margin-bottom: 15px;
      }

      .hero-content h1 {
        font-size: 2.5rem;
        margin-bottom: 0;
      }

      .hero-content p {
        font-size: .95rem;
        margin-bottom: 20px;
      }

      .form-container {
        margin-top: -320px;
      }
    }

    @media (max-width: 480px) {
      .application-title {
        font-size: 1.2rem;
        margin-bottom: 25px;
      }

      .hero-content h1 {
        font-size: 2rem;
        margin-bottom: 0;
        top: 0;
      }

      .hero-content p {
        font-size: .90rem;
        margin-bottom: 10px;
        top: 0;
      }

      .form-container {
        margin-top: -300px;
      }
    }
  </style>
  <section class="cover-section" id="home">
    <div class="hero-content">
      <h1 data-aos="fade-down" data-aos-duration="1500" data-aos-easing="ease-in-out">Smart Financing for the Filipinos on&nbsp;the&nbsp;Rise</h1>
      <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">• QUICK • RELIABLE • NON-COLLATERAL BUSINESS LOANS UP TO ₱100,000,000 •</p>
    </div>
  </section>

  <div class="form-container" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
    <div class="application-form">
      <h2 class="application-title">GET PRE-QUALIFIED NOW!</h2>
      <?php include 'functions/application-form-function.php'; ?>
      <form method="POST" action="">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-floating mb-3 mt-3">
              <input type="text" class="form-control form-input" id="fullname" placeholder="" name="fullname" required>
              <label class="form-label" for="fullname">Full name</label>
            </div>

            <div class="form-floating mt-3 mb-3">
              <input type="tel" class="form-control form-input" id="contact" placeholder="" pattern="[0-9]{11}" name="contact" required>
              <label class="form-label" for="contact">Contact no.</label>
            </div>

            <div class="form-floating mt-3 mb-3">
              <input type="email" class="form-control form-input" id="email" placeholder="" name="email" required>
              <label class="form-label" for="email">Email Address</label>
            </div>
          </div>

          <div class="col-sm-12 col-sm-12 col-md-6">

            <div class="form-floating mt-3 mb-3">
              <select class="form-select mt-3" id="business_type" name="business_type" required>
                <option class="form-option" value="" disabled selected></option>
                <option class="form-option" value="Sole Proprietorship">Sole Proprietorhip</option>
                <option class="form-option" value="Partnership">Partnership</option>
                <option class="form-option" value="Corporation">Corporation</option>
              </select>
              <label class="form-label" for="business_type">Type of business:</label>
            </div>

            <div class="form-floating mt-3 mb-3">
              <select class="form-select mt-3" id="account" name="account" required>
                <option class="form-option" value="" disabled selected></option>
                <option class="form-option" value="Yes">Yes</option>
                <option class="form-option" value="No">No</option>
              </select>
              <label class="form-label" for="account">Do you have a checking account?</label>
            </div>

            <button type="submit" class="submit-btn" name="submit">SUBMIT NOW</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.querySelectorAll('.form-select').forEach(select => {
      if (select.value === "") {
        select.classList.add('empty');
      } else {
        select.classList.remove('empty');
      }
      select.addEventListener('change', function() {
        if (this.value === "") {
          this.classList.add('empty');
        } else {
          this.classList.remove('empty');
        }
      });
    });
  </script>