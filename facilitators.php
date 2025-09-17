<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Facilitators</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f0f8ff;
        }

        header {
            background: linear-gradient(90deg, #87CEEB, #4682B4);
            padding: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            cursor: pointer;
        }

        nav a:hover {
            color: #f0f8ff;
        }

        .section {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .facilitators h2 {
            text-align: center;
            color: #4682B4;
            margin-bottom: 30px;
        }

        .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .facilitator-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .facilitator-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .facilitator-card h3 {
            color: #87CEEB;
            margin-bottom: 5px;
        }

        .facilitator-card a {
            color: #4682B4;
            text-decoration: none;
            margin: 0 5px;
        }

        .facilitator-card a:hover {
            text-decoration: underline;
        }

        footer {
            background: #4682B4;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 768px) {
            nav a {
                font-size: 16px;
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Rehan School</div>
            <div>
                <a onclick="redirectTo('index.php')">Home</a>
                <a onclick="redirectTo('curriculum.php')">Curriculum</a>
                <a onclick="redirectTo('facilitators.php')">Facilitators</a>
                <a onclick="redirectTo('contact.php')">Contact</a>
            </div>
        </nav>
    </header>

    <section class="section facilitators">
        <h2>Meet Our Facilitators</h2>
        <div class="facilitator-grid">
            <div class="facilitator-card">
                <img src="https://via.placeholder.com/100" alt="Facilitator">
                <h3>Dr. John Doe</h3>
                <p>AI Education Specialist</p>
                <a href="#">LinkedIn</a>
                <a href="#">Twitter</a>
            </div>
            <div class="facilitator-card">
                <img src="https://via.placeholder.com/100" alt="Facilitator">
                <h3>Jane Smith</h3>
                <p>Entrepreneurship Mentor</p>
                <a href="#">LinkedIn</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>

    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
