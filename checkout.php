<!doctype html>

<?php

session_start();
if(!isset($_SESSION['email'])){
    include("login1.php");
}
else{
    include("payment.php");
}

?>

<html lang="en">

<head>
    <meta charset="utf-8" />


    <title>checkout</title>

</head>
<body>
    
</body>