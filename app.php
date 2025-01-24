<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Portal</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { text-align: center; }
        form { margin-top: 20px; }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 3px; cursor: pointer; }
        button:hover { background: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Employee Portal</h1>

        <?php
        // Handle login form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Vulnerable SQL Query
            $conn = new mysqli('localhost', 'root', '2025', 'app');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($query);

            if ($result && $result->num_rows > 0) {
                // Redirect to the hash page after login
                header("Location: loggedin.php");
                exit;
            } else {
                echo "<p>Invalid username or password.</p>";
            }

            $conn->close();
        }
        ?>

        <!-- Login Form -->
        <form method="POST" action="">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
