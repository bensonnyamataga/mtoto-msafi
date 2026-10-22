<?php
session_start();

// Check if the user is logged in, otherwise redirect to index.php
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard | Packages</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
:root{
  --dark-green:#0f3d2e;
  --green:#145a42;
  --green-soft:#e9f4f0;
  --border:#d7e3df;
  --text:#1f2933;
  --muted:#6b7280;
}

body{
  font-family:'Inter', sans-serif;
  background:#f3f6f5;
  margin:0;
  color:var(--text);
}

/* Top Bar */
.top-bar{
  background:linear-gradient(135deg,var(--green),var(--dark-green));
  padding:18px 30px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  color:#fff;
}

.top-bar .user{
  font-weight:600;
  font-size:14px;
}

.top-bar a.logout{
  background:#ffffff;
  color:var(--dark-green);
  padding:8px 14px;
  border-radius:8px;
  font-weight:700;
  text-decoration:none;
  transition:.2s;
}

.top-bar a.logout:hover{
  background:#e5f2ed;
}

/* Container */
.container{
  max-width:1100px;
  margin:30px auto;
  padding:30px;
  background:#ffffff;
  border-radius:14px;
  box-shadow:0 15px 40px rgba(0,0,0,.08);
}

/* Header */
h1{
  font-size:22px;
  margin-bottom:25px;
  color:var(--dark-green);
}

/* Action Buttons */
.actions{
  display:flex;
  flex-wrap:wrap;
  gap:12px;
  margin-bottom:30px;
}

.actions a{
  background:var(--green);
  color:#fff;
  padding:10px 16px;
  border-radius:8px;
  text-decoration:none;
  font-weight:600;
  font-size:14px;
  transition:.2s;
}

.actions a:hover{
  background:var(--dark-green);
}

/* Package Card */
.package{
  border:1px solid var(--border);
  padding:20px;
  margin-bottom:18px;
  border-radius:12px;
  background:#fbfdfc;
  transition:.2s;
}

.package:hover{
  box-shadow:0 8px 22px rgba(0,0,0,.08);
  transform:translateY(-1px);
}

.package h3{
  margin:0 0 10px;
  font-size:17px;
  color:#163c2c;
}

.package a{
  color:var(--green);
  font-weight:600;
  text-decoration:none;
  margin-right:14px;
  font-size:14px;
}

.package a:hover{
  text-decoration:underline;
}

/* Responsive */
@media(max-width:700px){
  .container{margin:15px;}
  .actions a{width:100%; text-align:center;}
}
</style>
</head>

<body>

<div class="top-bar">
  <div class="user">Admin: <?php echo $_SESSION['username']; ?></div>
  <a class="logout" href="logout.php">Logout</a>
</div>

<div class="container">
  <h1>Packages Management</h1>

  <div class="actions">
    <a href="add_package.php">+ Add Trekking Package</a>
    <a href="add_package_safari.php">+ Add Safari Package</a>
    <!--<a href="add_package_article.php">+ Add Article Page</a>-->
    <a href="list_packages.php">📋 List Packages</a>
  </div>

  <?php
  displayPackages(true); // Show edit/delete links
  ?>
</div>

</body>
</html>
