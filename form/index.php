<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="request.php" method="post">

               <div class="form-label-group">
                <input type="name" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
                <label for="inputName">Name</label>
              </div>
              
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="pass" name="pass" id="inputPassword" class="form-control" placeholder="Password" required autocomplete="on">
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button name="login" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <p id="member">
                Not yet a member? <a href="register.html">Sign up</a>
              </p>
              <p id="forget">
                 <a href="forget.php">Forget password?</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   <script src="assets/jquery/jquery.slim.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
<?php
  if(isset($_COOKIE['pass'])) {
    $pass = $_COOKIE['pass'];

    echo "<script>
          document.getElementById('pass').value = '$pass';

    </script>";
  }
?>

