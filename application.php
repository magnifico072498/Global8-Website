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
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" href="media/icon/global8-finance-corporation-icon.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: url('media/images/backgrounds/holding-hands-financing-trust.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 0 20px;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
        }

        .container {
            max-width: 900px;
            width: 100%;
            background: #fff;
            border-radius: 1px;
            border-left: 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .form-section {
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .form-info {
            flex: 1;
            background: linear-gradient(135deg, #222, #333);
            color: #fff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .form-info img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .form-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }


        .form-info ul {
            list-style: none;
            margin: 20px 0;

        }

        .form-info ul li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .form-info ul li a {
            color: #FFF;
            text-decoration: none;
        }

        .form-info ul li a:hover {
            color: #b38b00;
        }

        .form-info ul li i {
            font-size: 20px;
            margin-right: 10px;
            background-color: #b38b00;
            color: white;
            border-radius: 50%;
            height: 35px;
            width: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .social-icons a {
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            transition: transform 0.3s ease, color 0.3s ease;
            background-color: #b38b00;
            color: white;
            border-radius: 5px;
            height: 35px;
            width: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            background-color: #222;
            color: #b38b00;
        }


        .form-content {
            flex: 2;
            padding: 40px;
        }

        .form-content h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-content form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-floating {
            position: relative;
        }

        .form-floating input,
        .form-floating select {
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background: #FFF;
            outline: none;
        }

        .form-floating label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 14px;
            font-weight: 700;
            color: #888;
            transition: all 0.2s;
            pointer-events: none;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label,
        .form-floating select:focus+label,
        .form-floating select:not(:empty)+label {
            top: -8px;
            left: 10px;
            background: #fff;
            font-size: 12px;
            padding: 0 5px;
            color: #333;
        }

        /* Button Styles */
        .submit-btn {
            background-color: #b38b00;
            background-image: linear-gradient(135deg, #b38b00, #d9a700);
            /* Subtle gradient */
            border-radius: 50px;
            width: 100%;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Soft shadow for depth */
            cursor: pointer;
            transition: all 0.3s ease;
            /* Smooth transition */
        }

        .submit-btn:hover {
            background-image: linear-gradient(135deg, #d9a700, #b38b00);
            /* Reverse gradient on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            /* Slightly stronger shadow */
            transform: translateY(-2px);
            /* Subtle lift */
        }

        .submit-btn:active {
            transform: translateY(0);
            /* Reset on click */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .back-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .back {
            color: #4895EF;
            font-size: 18px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .back:hover {
            transform: translateY(-2px);
            color: #b38b00;
        }

        .back:focus {
            outline: none;
        }


        @media (max-width: 768px) {
            body {
                height: 150vh;
            }

            .form-section {
                flex-direction: column;
            }

            .form-info {
                padding: 20px;
            }

            .form-content {
                padding: 20px;
            }

            .form-content h2 {
                font-size: 1.4rem;
            }

            .form-info h2 {
                font-size: 1.4rem;
            }

        }
    </style>
    <?php include('style.html'); ?>
</head>

<body>
    <div class="container">
        <div class="form-section">
            <div class="form-content">
                <h2>Get Pre-Qualified Now!</h2>
                <?php include 'functions/application-form-function.php'; ?>
                <form method="POST" action="">
                    <div class="form-floating">
                        <input type="text" id="fullname" name="fullname" placeholder="" required>
                        <label for="fullname">Full Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="tel" id="contact" name="contact" placeholder="" pattern="[0-9]{11}" required>
                        <label for="contact">Contact Number</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" id="email" name="email" placeholder="" required>
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="business_type" name="business_type" required>
                            <option value="" disabled selected></option>
                            <option value="Sole Proprietor">Sole Proprietor</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Corporation">Corporation</option>
                        </select>
                        <label for="business_type">Type of Business</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="account" name="account" required>
                            <option value="" disabled selected></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="account">Do you have a checking account?</label>
                    </div>
                    <button type="submit" class="submit-btn" name="submit">Submit Now</button>
                    <div class="back-container"><a href="javascript:history.back()" class="back"><i class="ri-arrow-left-double-line"></i> Go Back</a></div>
                </form>
            </div>
            <div class="form-info">
                <img src="media/images/logos/global8-finance-corporation-white-logo.png" alt="Global8 Finance Corporation Logo">
                <h2>Contact Information</h2>
                <ul>
                    <li><i class="ri-phone-fill"></i> <a href="tel:+639177081102">+63 917 708 1102</a></li>
                    <li><i class="ri-send-plane-fill"></i> <a href="mailto:info@global8.com.ph">info@global8.com.ph</a></li>
                    <li><i class="ri-map-pin-2-fill"></i> <a href="https://maps.app.goo.gl/cz79HouwzENKuidY8">Open Google Map</a></li>
                </ul>
                <div class="social-icons">
                    <a href="https://facebook.com"><i class="ri-facebook-fill"></i></a>
                    <a href="https://instagram.com"><i class="ri-instagram-fill"></i></a>
                    <a href="https://linkedin.com"><i class="ri-linkedin-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.querySelectorAll('.form-select').forEach(select => {
        // SELECT LABEL ANIMATE
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

</html>