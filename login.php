<?php
include "db.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Login</title>
<link rel="stylesheet" href="assets/css/main.css">
<style>
.login-box{
    width:350px;
    margin:80px auto;
    padding:25px;
    background:#fff;
    border-radius:8px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}
.login-box h2{
    text-align:center;
    margin-bottom:20px;
}
.login-box input{
    width:100%;
    padding:10px;
    margin:8px 0;
}
.login-box button{
    width:100%;
    padding:10px;
    background:#004b87;
    color:white;
    border:none;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="login-box">
<h2>Employee Login</h2>

<form method="POST">
    <input name="user" placeholder="Username">
    <input name="pass" placeholder="Password">
    <button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
    $u = $_POST['user'];
    $p = $_POST['pass'];

    // ❌ INTENTIONALLY VULNERABLE
    $q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $r = mysqli_query($conn,$q);

    if($r && mysqli_num_rows($r) > 0){
        $_SESSION['user'] = $u;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<p style='color:red;text-align:center;'>Invalid Credentials</p>";
    }
}
?>

</div>
</body>
</html>
