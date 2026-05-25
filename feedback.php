<!DOCTYPE html>
<html>
<head>
<title>Passenger Feedback</title>
<link rel="stylesheet" href="assets/css/main.css">
<style>
.feedback-box{
    width:60%;
    margin:40px auto;
    background:#fff;
    padding:25px;
    border-radius:8px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}
.feedback-box h2{
    text-align:center;
    margin-bottom:20px;
}
.feedback-box textarea{
    width:100%;
    height:120px;
    padding:10px;
    font-size:15px;
}
.feedback-box button{
    margin-top:10px;
    padding:10px 20px;
    background:#004b87;
    color:white;
    border:none;
    cursor:pointer;
}
.output{
    margin-top:20px;
    padding:15px;
    background:#f3f3f3;
    border-left:5px solid #d9534f;
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

<div class="feedback-box">
<h2>Passenger Feedback</h2>

<form method="POST">
    <textarea name="msg" placeholder="Enter your feedback here"></textarea>
    <button name="send">Submit Feedback</button>
</form>

<?php
if(isset($_POST['send'])){
    echo "<div class='output'>
            <h4>Feedback Received:</h4>";
    // ❌ INTENTIONALLY VULNERABLE (XSS)
    echo $_POST['msg'];
    echo "</div>";
}
?>

</div>

</body>
</html>
