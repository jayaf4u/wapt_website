<?php
include "db.php";

/* Fetch live operational status */
$q = mysqli_query($conn,"SELECT * FROM system_status WHERE id=1");
$row = mysqli_fetch_assoc($q);

$runway_status = $row['runway_status'];
$terminal_load = $row['terminal_load'];
$system_mode   = $row['system_mode'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Airport Enterprise Operations Portal</title>
<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

<!-- HEADER -->
<div class="header">
    <img src="assets/images/logo.png">
    <h2>Airport Enterprise Operations Portal</h2>
</div>

<!-- NAVBAR -->
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="login.php">Employee Login</a>
    <a href="search.php">Flight Search</a>
    <a href="feedback.php">Feedback</a>
    <span id="utcClock" style="float:right;color:white;font-weight:bold;"></span>
</div>

<!-- TICKER -->
<div class="ticker">
<marquee>
✈️ AI101 Delhi–Mumbai On Time |
⚠️ AI202 Delayed |
🛫 Runway Advisory |
🔐 Security Level: Standard
</marquee>
</div>

<!-- HERO -->
<div class="hero">
<h1>Operational Excellence in Aviation</h1>
<p>Passenger • Cargo • Airside • Employee Systems</p>
</div>

<!-- MAIN CONTENT -->
<div class="container">

<!-- LIVE OPERATIONS STATUS -->
<div class="card">
<h3>Live Operations Status</h3>

<p>
Runways:
<span class="badge badge-green">
<?php echo htmlspecialchars($runway_status); ?>
</span>
</p>

<p>
Terminal Load:
<span class="badge badge-blue">
<?php echo htmlspecialchars($terminal_load); ?>
</span>
</p>

<p>
System Mode:
<span class="badge badge-orange">
<?php echo htmlspecialchars($system_mode); ?>
</span>
</p>

</div>

<!-- EMPLOYEE SELF SERVICE -->
<div class="card">
<h3>Employee Self Service</h3>
<div class="grid">
    <div class="tile">
        <img src="assets/images/hr.png">
        <h4>HR</h4>
    </div>
    <div class="tile">
        <img src="assets/images/payroll.png">
        <h4>Payroll</h4>
    </div>
    <div class="tile">
        <img src="assets/images/travel.png">
        <h4>Travel</h4>
    </div>
    <div class="tile">
        <img src="assets/images/training.png">
        <h4>Training</h4>
    </div>
</div>
</div>

</div>

<!-- UTC CLOCK -->
<script>
function updateUTC() {
    const now = new Date();
    document.getElementById("utcClock").innerHTML =
        "UTC: " + now.toUTCString().slice(17,25);
}
setInterval(updateUTC, 1000);
updateUTC();
</script>

</body>
</html>
