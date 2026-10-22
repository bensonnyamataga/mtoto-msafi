<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Package</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Edit Package</h2>
    <?php
    if(isset($_GET['title'])) {
        $title = $_GET['title'];
        $filename = "packages/" . $title . ".html";
        if(file_exists($filename)) {
            $content = file_get_contents($filename);
            echo "<form method='post' action='update_package.php'>";
            echo "<input type='hidden' name='title' value='$title'>";
            echo "<textarea name='content' rows='10'>$content</textarea><br>";
            echo "<input type='submit' name='update_package' value='Update Package'>";
            echo "</form>";
        } else {
            echo "<p>Package not found.</p>";
        }
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>
</div>
</body>
</html>
