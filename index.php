<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Home</title>
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

        .hero {
            background: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1') no-repeat center;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            max-width: 600px;
        }

        .section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features, .stats, .testimonials, .articles {
            margin-bottom: 40px;
        }

        .features h2, .stats h2, .testimonials h2, .articles h2 {
            text-align: center;
            color: #4682B4;
            margin-bottom: 30px;
        }

        .feature-grid, .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .feature-card, .stats-card, .testimonial-card, .article-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature-card h3 {
            color: #87CEEB;
            margin-bottom: 10px;
        }

        .stats-card h3 {
            font-size: 36px;
            color: #4682B4;
        }

        .testimonial-card p {
            font-style: italic;
            color: #333;
        }

        .article-card a {
            color: #87CEEB;
            text-decoration: none;
        }

        .article-card a:hover {
            text-decoration: underline;
        }

        footer {
            background: #4682B4;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 18px;
            }

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

    <section class="hero">
        <div>
            <h1>Empowering Future Innovators</h1>
            <p>Rehan School: Where AI-enabled education meets entrepreneurial excellence.</p>
        </div>
    </section>

    <section class="section features">
        <h2>Our Unique Features</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <h3>AI-Enabled Education</h3>
                <p>Leveraging AI to personalize learning and enhance educational outcomes.</p>
            </div>
            <div class="feature-card">
                <h3>Holistic Development</h3>
                <p>Fostering intellectual, emotional, and social growth in every student.</p>
            </div>
            <div class="feature-card">
                <h3>Entrepreneurial Focus</h3>
                <p>Equipping students with skills to innovate and lead in a dynamic world.</p>
            </div>
        </div>
    </section>

    <section class="section stats">
        <h2>Our Impact</h2>
        <div class="stats-grid">
            <div class="stats-card">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stats-card">
                <h3>1000+</h3>
                <p>Students</p>
            </div>
            <div class="stats-card">
                <h3>5</h3>
                <p>Campuses</p>
            </div>
        </div>
    </section>

    <section class="section testimonials">
        <h2>What People Say</h2>
        <div class="feature-grid">
            <div class="testimonial-card">
                <p>"Rehan School transformed my child's learning experience!"</p>
                <p><strong>- Parent</strong></p>
            </div>
            <div class="testimonial-card">
                <p>"The entrepreneurial focus is truly unique and inspiring."</p>
                <p><strong>- Student</strong></p>
            </div>
        </div>
    </section>

    <section class="section articles">
        <h2>Latest Articles</h2>
        <div class="feature-grid">
            <div class="article-card">
                <h3>New AI Curriculum Launched</h3>
                <p>Discover how our AI-driven curriculum is shaping the future.</p>
                <a href="#">Read More</a>
            </div>
            <div class="article-card">
                <h3>Student Startup Success</h3>
                <p>Our students launched a startup that won national awards!</p>
                <a href="#">Read More</a>
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
