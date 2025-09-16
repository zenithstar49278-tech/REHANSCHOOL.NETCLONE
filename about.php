<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - About Us</title>
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

        .about h2 {
            text-align: center;
            color: #4682B4;
            margin-bottom: 30px;
        }

        .about p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
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
                <a onclick="redirectTo('about.php')">About</a>
                <a onclick="redirectTo('curriculum.php')">Curriculum</a>
                <a onclick="redirectTo('facilitators.php')">Facilitators</a>
                <a onclick="redirectTo('blog.php')">Blog</a>
                <a onclick="redirectTo('faqs.php')">FAQs</a>
                <a onclick="redirectTo('videos.php')">Videos</a>
                <a onclick="redirectTo('contact.php')">Contact</a>
                <?php if (isset($_SESSION['user'])): ?>
                    <a onclick="redirectTo('admin.php')">Admin</a>
                    <a onclick="redirectTo('logout.php')">Logout</a>
                <?php else: ?>
                    <a onclick="redirectTo('login.php')">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <section class="section about">
        <h2>About Us</h2>
        <p>Our mission is to educate and mentor the next generation of innovative leaders within 10 years, under the direct supervision of Rehan Allahwala.</p>
        <p>We aim to equip students with the skills to positively impact millions of lives and end poverty in Pakistan.</p>
        <p>Rehan School is the first AI-enabled school in Pakistan, focusing on technology, soft skills, and entrepreneurship.</p>
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
