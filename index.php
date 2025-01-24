<?php
// Start a session for user tracking
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neosolaris</title>
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Arial', sans-serif;
    background: #111;
    color: #fff;
    margin: 0;
    padding: 0;
}
nav {
    background-color: #222;
    padding: 10px 0;
    text-align: center;
}
nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    margin: 0 10px;
    font-size: 1.2em;
}
nav a:hover {
    background-color: #e60000;
    border-radius: 5px;
}
.container {
    text-align: center;
    padding: 50px;
}
h1 {
    font-size: 3em;
    color: #e60000;
}
h2 {
    font-size: 1.5em;
    margin-bottom: 40px;
}
.cta {
    background: #222;
    padding: 20px;
    margin: 30px auto;
    max-width: 600px;
    border-radius: 10px;
}
.cta p {
    font-size: 1.2em;
    color: #ccc;
}
footer {
    background-color: #111;
    color: #666;
    text-align: center;
    padding: 15px;
}
.image-container {
    margin-top: 40px;
    position: relative;
    text-align: center;
}
.mars-img {
    width: 100%;
    max-width: 700px; /* Set a maximum width for the image */
    height: auto;  /* Maintain aspect ratio */
    border-radius: 8px;
}
.mars-img + p {
    font-size: 1.2em;
    color: #fff;
    font-weight: bold;
    margin-top: 10px;
}

/* Make the page responsive */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }
    h1 {
        font-size: 2.5em;
    }
    h2 {
        font-size: 1.2em;
    }
    .cta {
        padding: 15px;
    }
}

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <a href="index.php">Home</a>
        <a href="app.php">Login</a>

    </nav>

    <!-- Main content -->
    <div class="container">
        <h1>The  Red Dawn Protocol</h1>
        <h2>Uncover the secrets of Mars colonization and nuclear threats</h2>



        <!-- mars Image -->
        <div class="image-container">
            <img src="mars.jpg" alt="mars Image" class="mars-img">
            <p><strong>Cryptic</strong></p>
        </div>
        <div class="cta">
            <p>The year is 2045. As the world edges closer to its doom, a sinister plot unfolds. As an underground hacker, you must navigate the dark web of corporate secrets, nuclear threats, and AI-controlled warfare. The fate of humanity hangs in the balance.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p> Neosolaris Inc. | 2045 - The Future of Mars</p>
    </footer>

</body>
</html>
