<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daejang Co.</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            background: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
            z-index: 1;
           
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            transition: color 0.3s;
            
        }

        nav ul li a:hover {
            color: #ff9800;
        }

        /* Mobile Menu */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            background: white;
            height: 3px;
            width: 25px;
            margin: 4px 0;
        }

        @media (max-width: 768px) {
            nav ul {
                position: absolute;
                top: 60px;
                left: -100%;
                background: #333;
                width: 100%;
                flex-direction: column;
                text-align: center;
                transition: left 0.3s ease;
            }

            nav ul li {
                margin: 15px 0;
            }

            nav ul.show {
                left: 0;
            }

            .menu-toggle {
                display: flex;
            }
        }
    </style>
    <script>
        // Toggle mobile menu
        function toggleMenu() {
            document.querySelector('nav ul').classList.toggle('show');
        }
    </script>
</head>
<body>

<header>
    <div class="logo">DAEJANG CO.</div>
    <div class="menu-toggle" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="./clients/login.php">Clients</a></li>
            <li><a href="contact.php">Vendors</a></li>
            <li><a href="contact.php">Support</a></li>
        </ul>
    </nav>
</header>
