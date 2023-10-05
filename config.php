<?php

$HOST = "localhost";
$USER = "root";
$PASS = "";
$BASE = "sislogin";

$conn = mysqli_connect($HOST, $USER, $PASS, $BASE);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>