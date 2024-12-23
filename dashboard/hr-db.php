<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Global8</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        /* Sidebar Styles */
        #sidebar {
            width: 250px;
            background-color: #222;
            color: #ffffff;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            transition: width 0.3s ease;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
        }

        /* Adjust collapsed styles for sticky sidebar */
        #sidebar.collapsed {
            width: 60px;
        }

        #sidebar .logo {
            transition: opacity 0.3s, width 0.3s, height 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            position: relative;
            width: 100%;
            height: auto;
            overflow: hidden;
            padding: 5px;
        }

        #sidebar .logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        #sidebar .logo .collapsed-logo {
            display: none;
        }

        #sidebar.collapsed .logo .expanded-logo {
            display: none;
        }

        #sidebar.collapsed .logo .collapsed-logo {
            display: block;
        }

        #sidebar .menu {
            list-style: none;
            padding: 10px;
        }

        #sidebar .menu li {
            margin-bottom: 15px;
        }

        #sidebar .menu li a {
            text-decoration: none;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #sidebar .menu li a:hover {
            background-color: #334155;
        }

        #sidebar.collapsed .menu li a span {
            display: none;
        }

        #sidebar.collapsed .menu li a {
            justify-content: center;
        }

        /* Header Styles */
        #header {
            width: 100%;
            background-color: #ffffff;
            margin-bottom: 50px;
            padding: 20px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        #header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
        }

        #header .menu-toggle {
            font-size: 24px;
            cursor: pointer;
            color: #1e293b;
            display: block;
            transition: transform 0.3s ease;
        }

        #header .menu-toggle.collapsed {
            transform: rotate(90deg);
        }

        #header .icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        #header .icons i {
            font-size: 20px;
            cursor: pointer;
            color: #1e293b;
        }

        /* Main Content */
        #main-content {
            flex: 1;
            padding: 20px;
        }

        /* For smaller screens (e.g., mobile), adjust sidebar behavior */
        @media (max-width: 1200px) {
            #main-content {
                padding: 10px;
            }

            #header {
                padding: 10px;
            }

            #header h1 {
                font-size: 1.4rem;
            }

            #header .icons i {
                font-size: 1.4rem;
            }
        }

        /* For smaller screens (e.g., mobile), adjust sidebar behavior */
        @media (max-width: 768px) {
            #sidebar {
                width: 50px;
            }

            #sidebar .menu li a span {
                display: none;
            }

            #sidebar .logo .collapsed-logo {
                display: block;
            }

            #sidebar .logo .expanded-logo {
                display: none;
            }

            #sidebar .menu li {
                margin-bottom: 10px;
            }

            #sidebar .menu li a {
                padding: 7px;
            }

            #main-content {
                padding: 10px;
            }

            #header {
                padding: 15px 10px;
                margin-bottom: 20px;
            }

            #header h1 {
                font-size: 1rem;
            }

            #header .icons {
                gap: 15px;
            }

            #header .icons i {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            #sidebar {
                width: 50px;
                display: none;
            }

            #sidebar.show {
                display: flex;
            }

            #sidebar .logo .collapsed-logo {
                display: block;
            }

            #sidebar .logo .expanded-logo {
                display: none;
            }

            #sidebar .menu li {
                margin-bottom: 5px;
            }

            #sidebar .menu li a {
                padding: 7px;
            }

            #main-content {
                padding: 5px;
            }

            #header {
                padding: 15px 7px;
                margin-bottom: 20px;
            }

            #header h1 {
                font-size: .85rem;
            }

            #header .icons {
                gap: 10px;
            }

            #header .icons i {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="logo">
            <img class="expanded-logo" src="../media/images/logos/global8-finance-corporation-white-logo.webp" alt="Global8 Logo">
            <img class="collapsed-logo" src="../media/images/logos/global8-finance-corpoation-icon.webp" alt="Global8 Logo">
        </div>
        <ul class="menu">
            <li><a href="#dashboard"><i class="ri-dashboard-line"></i> <span>Dashboard</span></a></li>
            <li><a href="jobPortal.php"><i class="ri-briefcase-line"></i> <span>Jobs</span></a></li>
            <li><a href="#candidates"><i class="ri-team-line"></i> <span>Candidates</span></a></li>
            <li><a href="#career-site"><i class="ri-global-line"></i> <span>Career Site</span></a></li>
            <li><a href="#"><i class="ri-settings-2-line"></i> <span>Settings</span></a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Header -->
        <div id="header">
            <i class="ri-menu-line menu-toggle" onclick="toggleSidebar()"></i>
            <h1>Dashboard</h1>
            <div class="icons">
                <i class="ri-notification-3-line"></i>
                <i class="ri-user-line"></i>
            </div>
        </div>
        <?php include_once('stats.php'); ?>
        <?php include_once('interview-schedule.php'); ?>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const menuToggle = document.querySelector(".menu-toggle");

            if (window.innerWidth <= 480) {
                sidebar.classList.toggle("show");
                menuToggle.classList.toggle("collapsed");
            } else {
                if (window.innerWidth > 768) {
                    sidebar.classList.toggle("collapsed");
                    menuToggle.classList.toggle("collapsed");
                }
            }
        }
    </script>
</body>

</html>