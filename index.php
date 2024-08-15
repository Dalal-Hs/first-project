<!doctype html>
<?php include("function/functions.php");
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8" />


    <title>Books Store</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
   
    

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <link href="assets/css/Styles.css" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">

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



    <!-- end navbar -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="theCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-4" id="bk1">
                                <img src="./assets/images/550609.jpg">
                                <br>
                                <div class="c-content "><b>The Silent Patient</b> <br> <b> by Alex Michaelides</b><br> bOnly She Knows What Happe  Only I Can Make Her Spe<br><br>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-4" id="bk2">
                                <img src="./assets/images/488909.jpg">
                                <br>
                                <div class="c-content "><b>Ikigai</b><br><b>by Hector Garcia</b> <br> The Japanese Secret to a Long and Happy Life<br><br> 
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-4" id="bk3">
                            <img src="assets/images/5589000.jpg">
                                <br>
                                <div class="c-content "><b>Before The Coffee Gets Cold</b> <br> <b>by Toshikazu Kawaguchi </b>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-4" id="bk4">
                                <img src="assets/images/510611.jpg">
                                <br>
                                <div class="c-content "><b>Better</b> <br> by Atul Gawande <b></b><br> A Surgeon's Notes on Performance<br><
                                </div>

                            </div>
                        </div>
                    
                    </div>
                    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
                    <a class="right carousel-control" href="#theCarousel" data-slide="next"></a>
                </div>
            </div>
        </div>
    </div>
    <!--carousel end-->



    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-2 col-md-2" id="myScrollspy">
                <ul data-offset-top="225" data-spy="affix" class="nav nav-pills  nav-stacked">
                    <li role="presentation"><a href="index.php">All books</a></li>
                    <?php getcats();?>

                </ul>
            </div>
            <div class="col-lg-10 col-md-10" id="mainarea">



                <div class="container-fluid">
                    <?php cart(); ?>
                    <!-- Adding books -->
                    <div class="row">
                        <?php getbooks();?>
                        <?php get_bycat();?>


                    </div>


                </div>

            </div>
        </div>
    </div> 
    <br>
   <!-- footer start -->
  <?php include("footer.php");?>
 
   <!-- footer end --> 

      <div class="cpy_">
         <p>© 2024 All Rights Reserved By Dalal,Shahad,Lamia,Faten,Taif</p>
      </div>

   
   
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>
<script src="assets/js/carousel.js" type="text/javascript"></script>
<script src="assets/js/myscripts.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>


</html>
