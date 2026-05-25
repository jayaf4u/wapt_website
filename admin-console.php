<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Console – System Control</title>
<link rel="stylesheet" href="assets/css/main.css">

<style>
.admin-box{
    width:45%;
    margin:60px auto;
    background:#ffffff;
    padding:30px;
    border-radius:8px;
    box-shadow:0 0 20px rgba(0,0,0,0.25);
}
.admin-box h2{
    text-align:center;
    color:#004b87;
    margin-bottom:5px;
}
.admin-box p{
    text-align:center;
    color:#666;
    font-size:14px;
}
.admin-box input{
    width:100%;
    padding:12px;
    margin-top:12px;
    font-size:15px;
}
.admin-box button{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#d9534f;
    color:white;
    border:none;
    font-size:16px;
    cursor:pointer;
}
.notice{
    margin-top:20px;
    padding:12px;
    background:#fff3cd;
    border-left:5px solid #ffc107;
    font-size:14px;
}
.success{
    margin-top:20px;
    padding:12px;
    background:#e8f5e9;
    border-left:5px solid #28a745;
}
</style>
</head>

<body>

<div class="header">
    <img src="assets/images/logo.png">
    <h2>Airport Enterprise Operations Portal</h2>
</div>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="login.php">Employee Login</a>
    <a href="search.php">Flight Search</a>
    <a href="feedback.php">Feedback</a>
</div>

<div class="admin-box">
<h2>System Control Console</h2>
<p>Internal Operations Management Interface</p>

<div class="notice">
⚠️ This interface controls backend operational state.<br>
Unauthorized access may impact airport operations.
</div>

<form method="GET">
    <input name="runway_status" placeholder="Runway Status (Operational / Closed)">
    <input name="terminal_load" placeholder="Terminal Load (Normal / High / Critical)">
    <input name="system_mode" placeholder="System Mode (NORMAL / MAINTENANCE)">
    <button>Apply System Changes</button>
</form>

<?php
if(isset($_GET['system_mode'])){

    $runway   = $_GET['runway_status'];
    $terminal = $_GET['terminal_load'];
    $mode     = $_GET['system_mode'];

    // ❌ INTENTIONALLY VULNERABLE – DATA MANIPULATION DEMO
    $q = "UPDATE system_status 
          SET runway_status='$runway',
              terminal_load='$terminal',
              system_mode='$mode'
          WHERE id=1";

    mysqli_query($conn,$q);

    echo "<div class='success'>
            ✔ Backend operational data updated successfully
          </div>";
}
?>

</div>

</body>
</html>
