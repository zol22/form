<html>
<head>
	<title>Forget password</title>
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
            <h5 class="card-title text-center">Forget your password</h5>
            <form class="form-signin" action="request.php" method="post">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>
              <button name="send" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   <script src="assets/jquery/jquery.slim.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

