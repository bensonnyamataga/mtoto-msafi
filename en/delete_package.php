<?php
if(isset($_GET['title'])) {
    $title = $_GET['title'];
    $filename = "packages/" . $title . ".html";
    if(file_exists($filename)) {
        // Delete package file
        unlink($filename);
    }
}

// Redirect to index.php
header("Location: index.php");
exit();
?>
