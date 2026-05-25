<?php
include "db.php";

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $msg  = $_POST['message'];

    $q = "INSERT INTO contacts(name,message) VALUES('$name','$msg')";
    mysqli_query($conn,$q);
    echo "Message Sent";
}
?>

<form method="POST">
Name:<br>
<input name="name"><br><br>
Message:<br>
<textarea name="message"></textarea><br><br>
<input type="submit" name="send">
</form>
