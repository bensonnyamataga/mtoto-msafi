<?php
session_start();

// Dummy user credentials for demonstration
$valid_username = "Jarga";
$valid_password = "password";

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: list_packages.php");
    exit();
}

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: list_packages.php");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>

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
  background:linear-gradient(135deg,#f2f7f5,#e6f1ed);
  margin:0;
  height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  color:var(--text);
}

/* Login Card */
.container{
  width:100%;
  max-width:380px;
  background:#ffffff;
  border-radius:14px;
  padding:35px 30px;
  box-shadow:0 15px 40px rgba(0,0,0,.12);
}

.container img{
  max-width:120px;
  margin:0 auto 15px;
  display:block;
}

h2{
  text-align:center;
  font-size:20px;
  font-weight:700;
  margin-bottom:25px;
  color:var(--dark-green);
}

label{
  display:block;
  font-size:14px;
  font-weight:600;
  margin-bottom:6px;
  color:#163c2c;
}

input[type="text"],
input[type="password"]{
  width:100%;
  padding:13px 14px;
  margin-bottom:18px;
  border-radius:8px;
  border:1px solid var(--border);
  font-size:14px;
  background:#fbfdfc;
  transition:.2s;
}

input:focus{
  outline:none;
  border-color:var(--green);
  box-shadow:0 0 0 3px rgba(20,90,66,.15);
  background:#fff;
}

/* Button */
input[type="submit"]{
  width:100%;
  padding:14px;
  border:none;
  border-radius:10px;
  font-size:15px;
  font-weight:700;
  cursor:pointer;
  color:#fff;
  background:linear-gradient(135deg,var(--green),var(--dark-green));
  transition:.25s;
}

input[type="submit"]:hover{
  transform:translateY(-1px);
  box-shadow:0 10px 25px rgba(20,90,66,.35);
}

/* Error */
.error{
  margin-top:15px;
  font-size:13px;
  text-align:center;
  color:#b91c1c;
  background:#fdecec;
  padding:10px;
  border-radius:8px;
  border:1px solid #f5c2c2;
}

@media(max-width:480px){
  .container{
    margin:20px;
    padding:25px;
  }
}
</style>
</head>

<body>

<div class="container">
  <img src="https://www.jargatours.com/assets/img/newversion.png" alt="Logo">
  <h2>Admin Dashboard Login</h2>

  <form method="post" action="">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" name="login" value="Sign In">
  </form>

  <?php
  if (isset($error_message)) {
      echo "<div class='error'>$error_message</div>";
  }
  ?>
</div>

</body>
</html>
