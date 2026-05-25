<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Dashboard</title>
<link rel="stylesheet" href="assets/css/main.css">
<style>
.dashboard{
    width:90%;
    margin:40px auto;
}
.welcome{
    background:#004b87;
    color:white;
    padding:15px;
    border-radius:6px;
}
.cards{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-top:20px;
}
.card{
    background:#fff;
    padding:20px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.15);
    text-align:center;
}
</style>
</head>

<body>

<div class="dashboard">

<div class="welcome">
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?></h2>
<p>Authorized Employee Portal Access</p>
</div>

<div class="cards">
<div class="card">✈️ Flight Operations</div>
<div class="card">👨‍💼 HR Management</div>
<div class="card">💰 Payroll</div>
<div class="card">🔐 Security Systems</div>
<div class="card">🧾 Compliance</div>
<div class="card">⚙️ IT Support</div>
</div>

<br>
<a href="logout.php">Logout</a>

</div>

</body>
</html>
