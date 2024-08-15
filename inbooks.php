<!DOCTYPE html>

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


		<title>Inserting Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
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

    
  
	<form action="inbooks.php" method="post" enctype="multipart/form-data"> 
		
		<table class="center" width="795" border="2" bgcolor="#187eae">
			
			<tr class="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>
			<tr>
				<td class="right"><b>book id :</b></td>
				<td><input type="text" name="book_id" size="20" required/></td>
			</tr>
			<tr>
				<td class="right"><b>Author:</b></td>
				<td><input type="text" name="author" size="60" required/></td>
			</tr>
            <tr>
				<td class="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" size="50" required/></td>
			</tr>
			
			<tr>
				<td class="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
            
			<tr>
				<td class="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			<tr>
				<td class="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			<tr>
				<td class="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			
			<tr>
				<td class="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" >
					<option>Select a Category</option>
					<?php 
		$get_cats = "select * from category";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		 
		$cat_title = $row_cats['name'];
	
		echo "<option value='$cat_title'>$cat_title</option>";
	
		
	}	?>
				</select>
				
				
				</td>
			</tr>
			
		
			
			<tr align="center">
				<td ><input type="submit" name="insert_post" value="Insert Product Now"/></td> 
				<td ><input type="submit" name="Edit_post" value="Edit Product Now"/></td>
				<td ><input type="submit" name="delete_post" value="Delete Product Now"/></td>
			</tr>
			
		

		
		</table>
        
	</form>
    

</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
	    $book_id = $_POST['book_id'];
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_author = $_POST['author'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"assets/images/$product_image");
	
		 $insert_product = "INSERT INTO `Books`(`book_id`,`author`, `keywords`, `title`, `price`, `image`, `description`, `category`) VALUES ('$book_id','$product_author','$product_keywords','$product_title','$product_price','$product_image','$product_desc','$product_cat')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "Product Has been inserted!";
		 echo "<script>window.open('index.php','_self')</script>";
		 
		 }
	}
	if(isset($_POST['delete_post'])) {
		$product_title = $_POST['product_title'];
		$query = "DELETE FROM books WHERE title = '$product_title '";
		$conn->query($query);
	}
	
	if(isset($_POST['Edit_post'])) {
	    $book_id = $_POST['book_id'];
		$product_title = $_POST['product_title'];
		$product_author = $_POST['author'];
		$product_price = ($_POST['product_price']);
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
	
		
	 //getting the image from the field
    
	   $query = "UPDATE books SET ";
	   $query.="book_id = '$book_id',";
	   $query .= "title = ' $product_title', ";
	   $query .= "author = ' $product_author', ";
	   $query.= "price = '$product_price', ";
	   $query.+"description ='$product_desc',";
	   $query.+"keywords ='$product_keywords',";
	   $query.+"image ='$product_image',";

	    $uq= mysqli_query($conn,$query);
	}



?>


