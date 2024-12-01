<?php
// Start the session if needed for this page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuest - More Information</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> <!-- Link to jQuery -->
    <style>
        /* Reuse the styling from the main page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header .logo img {
            width: 150px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .main-content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left-panel, .right-panel {
            width: 20%;
            background-color: #ddd;
            padding: 10px;
        }

        .middle-panel {
            width: 55%;
            background-color: #fff;
            padding: 20px;
        }

        .content-box {
            background-color: #e9ecef;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }

        .content-box button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .content-box p {
            font-size: 18px;
            margin: 10px 0;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
            text-align: center;
        }

        footer .footer-logo {
            font-size: 24px;
            font-weight: bold;
        }

        footer address {
            margin-top: 10px;
        }

        footer .footer-columns {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        footer .footer-columns div {
            width: 30%;
        }

        footer .footer-columns ul {
            list-style: none;
            padding: 0;
        }

        footer .footer-columns ul li {
            margin-bottom: 5px;
        }

        footer .footer-columns ul li a {
            color: white;
            text-decoration: none;
        }

        footer .footer-columns ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="eco logo.png" alt="EcoQuest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="Project jQuery.php">Home</a></li> <!-- Updated to point to Project jQuery.php -->
                <li><a href="newpage.php">More Information</a></li>
                <li><a href="#">Link three</a></li>
                <li><a href="#">Link four</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <div class="left-panel">
            <ul>
                <li>About EcoQuest</li>
                <li>Our Mission</li>
                <li>How It Works</li>
                <li>FAQs</li>
                <li>Contact Us</li>
            </ul>
        </div>

        <div class="middle-panel">
            <h2>More Information About EcoQuest</h2>
            <div class="content-box">
                <p>
                    EcoQuest is a platform that encourages sustainable living through fun and engaging challenges.
                    Participants can track their progress, earn rewards, and learn valuable tips for an eco-friendly lifestyle.
                </p>
            </div>

            <div class="content-box">
                <h3>Why Choose EcoQuest?</h3>
                <ul>
                    <li>Interactive challenges tailored to your lifestyle</li>
                    <li>Engaging rewards system to motivate participation</li>
                    <li>Access to a community of like-minded individuals</li>
                    <li>Comprehensive knowledge base on sustainability</li>
                </ul>
            </div>

            <div class="content-box">
                <h3>Learn More</h3>
                <button id="show-more">Show More Details</button>
                <div id="details" style="display:none; margin-top: 15px;">
                    <p>
                        EcoQuest is designed to make sustainability achievable and enjoyable for everyone. 
                        We provide daily and weekly tasks that are easy to complete and impactful for the environment.
                    </p>
                </div>
            </div>
        </div>

        <div class="right-panel">
            <ul>
                <li>Right Panel Option 1</li>
                <li>Right Panel Option 2</li>
                <li>Right Panel Option 3</li>
                <li>Right Panel Option 4</li>
            </ul>
        </div>
    </div>

    <footer>
        <div class="footer-logo">EcoQuest</div>
        <address>
            Address: 123 Main Street, City<br>
            State Province, Country
        </address>
        <div class="footer-columns">
            <div>
                <ul>
                    <li><a href="#">Link one</a></li>
                    <li><a href="#">Link two</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Link five</a></li>
                    <li><a href="#">Link six</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Link nine</a></li>
                    <li><a href="#">Link ten</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Show more details when button is clicked
            $('#show-more').click(function() {
                $('#details').slideToggle();
            });
        });
    </script>
</body>
</html>
