<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Page</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { font-size: 24px; }
        pre { background-color: #f4f4f4; padding: 10px; font-size: 18px; }
        form { margin-top: 20px; }
        input[type="file"] {
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
        <h1>User Details  </h1>
        <p>Your  Mars_Id Is :</p>
        <pre>5f4dcc3b5aa765d61d8327deb882cf99</pre>
        <p>
 +-+-+-+-+-+NEOSOLARIS +-+-+-+-+-+<br>welcome Admin !
</p>

        <?php
        // Handle file upload form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['upload'])) {
            $file = $_FILES['upload'];
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($file['name']); // Preserve original name

            // Save uploaded file directly
            if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                echo "<p>File uploaded successfully: <a href='$targetFile'>$targetFile</a></p>";
            } else {
                echo "<p>File upload failed. Please check permissions or file size.</p>";
            }
        }
        ?>

        <!-- File Upload Form -->
        <form method="POST" action="" enctype="multipart/form-data">
            <h2>Upload Your File</h2>
            <input type="file" name="upload" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
