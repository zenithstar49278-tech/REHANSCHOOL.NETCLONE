<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - FAQs</title>
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

        .faqs h2 {
            text-align: center;
            color: #4682B4;
            margin-bottom: 30px;
        }

        .faq-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .faq-item h3 {
            color: #87CEEB;
            margin-bottom: 10px;
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

    <section class="section faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3>What makes Rehan School unique?</h3>
            <p>Rehan School is the first AI-enabled school in Pakistan. It emphasizes teaching students soft skills and technological skills to prepare them for the future.</p>
        </div>
        <div class="faq-item">
            <h3>How can I enroll?</h3>
            <p>Please contact us via the contact page or join the waiting list.</p>
        </div>
        <!-- Add more FAQs as needed -->
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
