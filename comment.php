<!doctype html>
<?php 
include("includes/db.php");
include("function/functions.php");
session_start();
?>
<html>
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
<link href="assets/css/Styless.css" rel="stylesheet" />
<link href="assets/css/Styles.css" rel="stylesheet" />


		<title>Comment User</title> 
		

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
<form action="comment.php" method="post" enctype="multipart/form-data"> 
<table class="center" width="500" border="2" >
			
			<tr class="center">
				<td colspan="7"><h2>Insert New Comment Here</h2></td>
			</tr>
			<tr>
				<td class="right"><b>Name:</b></td>
				<td><input type="text" name="name" size="20" required/></td>
			</tr>
			<tr>
				<td class="right"><b>Comment</b></td>
				<td><textarea name="Comment" cols="20" rows="10"></textarea></td>
			</tr>

            <tr align="center">
				<td ><input type="submit" name="insert_Comment" value="Insert Comment Now"/></td> 
				
			</tr>
            </table>
        
	</form>
	<form method="post" action="viewcomment.php" >
		<button type="submit" name="showall">Show All Comment</button>
             </form>

    </body> 
</html>

<?php 




	if(isset($_POST['insert_Comment'])){
	
		//getting the text data from the fields
		
	    $name = $_POST['name'];
		$Comment= $_POST['Comment'];
	
	
		 $insert_Comment = "INSERT INTO `comment`(`CO_name`, `Comm`) VALUES ('$name','$Comment')";
		 
		 $insert_Comm = mysqli_query($con,$insert_Comment);
		 
		 if($insert_Comm){
		 
		 echo "Comment Has been inserted!";
		 echo "<script>window.open('index.php','_self')</script>";
		 
		 }
		 if(isset($_POST['showall'])) {
			header("Location:viewcomment.php");
			exit();
		}
	}
	
	