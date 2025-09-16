<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'upbek8wm1lktc') {
    header("Location: login.php");
    exit();
}

require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    
    $sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";
    
    if (mysqli_query($conn, $sql)) {
        $success = "Article added successfully!";
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Admin</title>
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
            max-width: 600px;
            margin: 0 auto;
        }

        .admin h2 {
            text-align: center;
            color: #4682B4;
            margin-bottom: 30px;
        }

        .admin-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .admin-form input, .admin-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #87CEEB;
            border-radius: 5px;
        }

        .admin-form button {
            background: #4682B4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .admin-form button:hover {
            background: #87CEEB;
        }

        .success, .error {
            text-align: center;
            margin: 10px 0;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
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
                <a onclick="redirectTo('admin.php')">Admin</a>
                <a onclick="redirectTo('logout.php')">Logout</a>
            </div>
        </nav>
    </header>

    <section class="section admin">
        <h2>Admin Panel - Add Article</h2>
        <div class="admin-form">
            <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <form method="POST" action="admin.php">
                <input type="text" name="title" placeholder="Article Title" required>
                <textarea name="content" rows="10" placeholder="Article Content" required></textarea>
                <button type="submit">Add Article</button>
            </form>
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
