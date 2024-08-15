<!doctype html>
<?php include("function/functions.php");
//session_start();
?> 
<html lang="en">

<head>
    <meta charset="utf-8" />


    <title>payment</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <link href="assets/css/Styles.css" rel="stylesheet" />
</head>

<body style="margin-top:10px">

    <!-- Navbar will come here  -->

    <nav class="navbar navbar-fixed-top" role="navigation" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
                <a class="navbar-brand" href="#">MyBookStore</a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php 
                    
                    
                   
                    if(!isset($_SESSION['email'])){
                        echo "<li><a href='login1.php'>Login</a></li>";
                    }
                    else 
                    {
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                     if(isset($_SESSION['email'])){
                        $sess=$_SESSION['email'];
                        echo "<li><a>Hi ".$_SESSION['email']." !</a></li>";
                        
                    }
                    else {
                        echo "<li><a>Hi, Guest</a></li>";
                    }
                    ?>
                   
                    <li><a href="cart.php">Go to Cart<span class="badge"><?php total_items(); ?></span></a></li>
                    <li> <a href="inbooks.php"> Go to insert book <span class="badge"></a></li>
                    <li> <a href="comment.php"> Go to commant user<span class="badge"></a></li>
                    
                </ul>
                <form action="results.php" method="get" class="navbar-form navbar-right">
                    <div class="form-group label-floating">
                        <label class="control-label">Search Books</label>
                        <input type="text" name="user_query" class="form-control">
                    </div>
                    <button type="submit" name="search" class="btn btn-round btn-just-icon btn-primary"><i class="material-icons">search</i><div class="ripple-container"></div></button>
                </form>


            </div>

        </div>
    </nav>
    <div class="container1pay">
      <h1>PAYMENT</h1>
         <h2>Choose Payment Method  </h2>
    <form method="post" action="checkout.php">
       <div class="payment">
        <ul>
            <li>
                <input type="checkbox" name="mada" id="checkbox-1">
                <label for="checkbox-1">
                    <img src="assets/images/Mada.jpeg" alt="mada-logo">
                </label>
            </li>
            <li>
                <input type="checkbox" name="apple" id="checkbox-2">
                <label for="checkbox-2">
                    <img src="assets/images/applepay.jpeg" alt="applepay-logo">
                </label>
            </li>
            <li>
                <input type="checkbox" name="visa" id="checkbox-3">
                <label for="checkbox-3">
                    <img src="assets/images/VISA.jpeg" alt="Visa-logo">
                </label>
            </li>
            <li>
                <input type="checkbox" name="paypal" id="checkbox-4">
                <label for="checkbox-4">
                    <img src="assets/images/paypal.jpeg" alt="paypal-logo">
                </label>
            </li>
        </ul>
        <div class="buttonpay">
            <button>
                pay
            </button>
        </div>

       </div>
            
    </div>

    
    
 
    



    <!-- end navbar -->
