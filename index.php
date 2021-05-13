<!DOCTYPE html>
<html lang="en">
<head>
	<title> phone pay</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <?php  include 'css.php' ?>
 
</head>
<body>
	<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KumawatTechnical</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div  id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/im11.jpeg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/im12.jpeg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/im15.jpeg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>

<!-- about us-->

<section>
	<div class="container-fluid">
     <h1 class=" text-center pt-5">About Us</h1>
     <hr class="w-25 mx-auto pt-5">



	<div  class="row mb-5">
	  <div  class="col-lg-6 col-md-6 col-12"><img class="img-fluid" src="images/im7.jpg "></div>
	  <div class="col-lg-6 col-md-6 col-12" >
	  	<h1>Who am I?</h1>
	  	<hr>
	  	<p class="content">
	  	kumawat technical is created by rahul kumawat in 2021.The moto of this is to helping poor student and give them better education . our co-partner mr.jitendra kumawat and mr.vinod kumawat are helping me to create such type of website ,wr are commited to helping students to  make their future bright we work hard so we will provide best content to students.
	    </p>
	    <button class="btn bg-primary text-white">Wana Know Me</button>
	 </div>

	</div>
	</div>
</section>

<!--about us end-->

<!--service part-->
<section>
  <div class="container">
	 <h1 class=" text-center pt-5">Services</h1>
	 <hr class="w-25 mx-auto pt-5">
	<div class="row text-center mb-4">
		<div class="col-lg-4 col-md-4 col-12">
	<div class="card">
	  <img class="card-img-top" src="images/im19.jpg" alt="Card image">
	  <div class="card-body">
	    <h4 class="card-title">Rahul kumawat</h4>
	    <p class="card-text">ceo kumawat technical</p>
	    <a href="#" class="btn btn-primary">See Profile</a>
	  </div>
	</div>
	</div>
	<div class="col-lg-4 col-md-12 col-12">
		<div class="card">
	  <img class="card-img-top" src="images/im20.jpg" alt="Card image">
	  <div class="card-body">
	    <h4 class="card-title">vinod kumawat</h4>
	    <p class="card-text">manager kumawat techinal</p>
	    <a href="#" class="btn btn-primary">See Profile</a>
	  </div>
	</div>
	</div>

	<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
	  <img class="jitu" src="images/im21.jpg" alt="Card image">
	  <div class="card-body">
	    <h4 class="card-title">jitendra kumawat</h4>
	    <p class="card-text">accociative partener kumawat technical</p>
	    <a href="#" class="btn btn-primary">See Profile</a>
	  </div>
	</div>
	</div>

	</div>
  </div>
</section>

<!--service end-->

<!--contact demo-->

<section class="bg-primary">
	<article class="py-5 text-center text-white">
		<div>
			<h3 class="display-4 ">+91 7463882265</h3>
			<p>if you want best service Call us now.</p>
			<button class="btn btn-warning">Contant Now</button>
		</div>
	</article>
</section>

<!--contact demo end-->

<!--gallery-->
<div class="container">
	  <h1 class=" text-center pt-5">Gallery</h1>
	  <hr class="w-25 mx-auto pt-5">
	  <div class="row">
	  	<div class="col-lg-4 col-md-2 col-12 mb-4">
	  		<img src="images/im15.jpeg" class="img-fluid">
	  	</div>
	  	<div class="col-lg-4 col-md-2 col-12 mb-4">
	  		<img src="images/im15.jpeg" class="img-fluid">
	  	</div>
	  	<div class="col-lg-4 col-md-2 col-12 mb-4">
	  		<img src="images/im15.jpeg" class="img-fluid">
	  	</div>
	  	<div class="col-lg-4 col-md-2 col-12 mb-4">
	  		<img src="images/im15.jpeg" class="img-fluid">
	  	</div>
	  	<div class="col-lg-4 col-md-2 col-12 mb-4">
	  		<img src="images/im15.jpeg" class="img-fluid">
	  	</div>
	  	<div class="col-lg-4 col-md-2 col-12 mb-4">
	  		<img src="images/im15.jpeg" class="img-fluid">
	  	</div>
	  </div>
	</div>

	  <!--gallery end-->

	  <!--register form-->

	  <section class="bg-primary">
	<article class="py-5">
		<div class="text-center text-white">
			<h3 class="display-4">Want To Join</h3>
			<p>Be a part of Kumawat Technical Family</p>
			<button class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Join Now</button>
		</div>

		 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Signup</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd" required>
		  </div>
		  <div class="form-group form-check">
		    <label class="form-check-label">
		      <input class="form-check-input" type="checkbox"> Remember me
		    </label>
		  </div>
		  <button type="submit" name="joinus" class="btn btn-primary">Submit</button>
		</form>
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
	</article>
</section>
<!--register end-->


<!--contant us-->

<section>
	<div class="container mb-5">
	  <h1 class=" text-center pt-5">Contact Us</h1>
	  <hr class="w-25 mx-auto pt-5">

	  <div class="w-50 mx-auto">
	  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="name" value="name" name="name" class="form-control" placeholder="Enter name" id="name" required>
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" value="email" name="email" class="form-control" placeholder="Enter email" id="email" required>
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" value="password" name="password" class="form-control" placeholder="Enter password" id="pwd" required>
	  </div>
	  <div class="form-group">
	    <label for="mob">Mob number:</label>
	    <input type="mob" value="mob" name="mob" class="form-control" placeholder="mob number" id="mob" required>
	  </div>

	  <div class="form-group">
	  	<label>Textarea</label>
	  	<textarea  class="form-control" name="text" required></textarea>

	  	
	  </div>
	  <div class="form-group form-check">
	    <label class="form-check-label">
	      <input class="form-check-input" type="checkbox"> Remember me
	    </label>
	  </div>
	  <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</section>

<!--contactus end-->


<!--footer-->

<footer>
	<p class="text-center bg-dark text-white">@copyright kumawattechnical.com2021</p>
</footer>
<!--footer end-->


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


<?php


if(isset($_POST['submit'])){

		include 'dbcon.php';



	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mob=$_POST['mob'];
	$text=$_POST['text'];

	$insertQuery= "insert into kumawattech(name,email,password,mob,text) values ('$name','$email','$password','$mob','$text')";


	$res = mysqli_query($con,$insertQuery);

		if($res){
			?>
			<script>
				alert("data inserted properly");
			</script>

			<?php

		}
		else
		{
			?>
			<script>
				alert("data unsuccess");
			</script>

			<?php

		}

}

?>


<?php

	
if(isset($_POST['joinus'])){

	include 'dbcon.php';



	$email=$_POST['email'];
	$password=$_POST['password'];

	$insertQuery= "insert into joinus(email,password) values ('$email','$password')";


	$res = mysqli_query($con,$insertQuery);

		if($res){
			?>
			<script>
				alert("data inserted properly");
			</script>

			<?php

		}
		else
		{
			?>
			<script>
				alert("data unsuccess");
			</script>

			<?php

		}

}

?>