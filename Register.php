<?php
require_once('config.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Our Lady of Fatima University Courses - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/favicon.png" rel="icon">
  <link href="assets/img/logo/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="assets/img/logo/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.html">Home</a></li>
          <li><a class="nav-link" href="about.html">About</a></li>
          <li><a class="nav-link" href="courses.html">Courses</a></li>
          <li><a class="nav-link active" href="Register.php">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Course Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Register now!</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">And be updated about OLFU CS</h2>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Course Header -->

    <div>
      <form action="Register.php" method = "post">
        <div class ="container">

          <div class = "row justify-content-center">
            <div class = "col-4">
              
              <h4>Fill up the form with correct values</h4>
              <hr class="mb-3">
              <label for="firstname"></label><b>First Name</b></label>
              <input class= "form-control" id="firstname" type="text" name = "firstname" required>

              <label for="lastname"></label><b>Last Name</b></label>
              <input class= "form-control" id="lastname" type="text" name = "lastname" required>

             
              <label for="email"></label><b>Email Address</b></label>
              <input class= "form-control" id="email" type="email" name = "email" required>

              <label for="phonenumber"></label><b>Phone Number</b></label>
              <input class= "form-control" id="phonenumber" type="text" name = "phonenumber" pattern="[0-9]{11}" required>

              <label for="password"></label><b>Password</b></label>
              <input class= "form-control" id="password" type="password" name = "password" required>
              <hr class="mb-3">
              <input class= "btn btn-primary" type="submit" id="register" name = "create" value="Sign Up"> 
            </div>
          </div>
        </div>
      </form>
    </div>


<!---jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type = "text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
        var firstname 	= $('#firstname').val();
        var lastname	= $('#lastname').val();
        var email 		= $('#email').val();
        var phonenumber = $('#phonenumber').val();
        var password 	= $('#password').val();

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Success!',
								'text': 'Successfully stored the data',
								'type': 'success'
								}).then(function() {
                window.location.href = "index.html";
                })
              }
				});

			}else{				
			}
		});		
	});

	
</script>
</body>
</html>