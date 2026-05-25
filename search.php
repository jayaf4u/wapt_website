<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Flight Search</title>
<link rel="stylesheet" href="assets/css/main.css">
<style>
.search-box{
    width:70%;
    margin:40px auto;
    background:#fff;
    padding:25px;
    border-radius:8px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}
.search-box h2{
    text-align:center;
    margin-bottom:20px;
}
.search-box input{
    width:80%;
    padding:10px;
    font-size:16px;
}
.search-box button{
    padding:10px 20px;
    background:#004b87;
    color:white;
    border:none;
    cursor:pointer;
}
.results{
    margin-top:20px;
}
.result-card{
    padding:12px;
    margin-bottom:10px;
    border-left:5px solid #004b87;
    background:#f9f9f9;
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

<div class="search-box">
<h2>Flight Information Search</h2>

<form>
    <input name="term" placeholder="Enter city or flight number">
    <button>Search</button>
</form>

<div class="results">
<?php
if(isset($_GET['term'])){
    $t = $_GET['term'];

    // ❌ INTENTIONALLY VULNERABLE (SQL Injection)
    $q = "SELECT * FROM flights 
          WHERE source LIKE '%$t%' 
          OR destination LIKE '%$t%'";

    $r = mysqli_query($conn,$q);

    while($row = mysqli_fetch_assoc($r)){
        echo "<div class='result-card'>
                ✈️ <b>{$row['flight_no']}</b> | 
                {$row['source']} → {$row['destination']} |
                <b>Status:</b> {$row['status']}
              </div>";
    }
}
?>
</div>
</div>

</body>
</html>
