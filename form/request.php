<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);			
ini_set( 'display_errors' , 1 );									

include (  "credentials.php"     ) ;
include ( "functions.php" );


// 	1. Create a Database Connection
$connection = mysqli_connect($hostname, $username, $password, $project);	

if (mysqli_connect_errno())	//Return an error code from the last connection error, if any.						
{																		
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();  //Return error description
	  exit();														
}	
	//echo "Successfully connected.<br><br><br>";	



// 	2. Select a Database to use
$db_select = mysqli_select_db( $connection,$project ); 	
if (!$db_select){
	echo "Database selection failed: ".mysqli_error($connection);

}

// Do Login											
if (isset($_POST['login'])){

	$name =getdata("name");
	$email =getdata("email");
	$pass = getdata("pass");


	if ( ! login ($name, $email, $pass, $result) ) 
	{ 
		redirect ("Login properly please.<br>Transferring to Login page", "index.php", 4);
		exit();
	}
	else
	{
		if (isset ($_POST[ "remember" ]))

		{
			setcookie ("name",$name,time()+ (10 * 365 * 24 * 60 * 60));
			setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));
			setcookie ("pass",$pass,time()+ (10 * 365 * 24 * 60 * 60));
		}

			session_start();
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['pass'] = $pass;
			redirect("Redirecting to website", "website.php", 1);
	
	}
}


// Do Register
if (isset($_POST['register'])){

	$name = getdata("name");
	$email =getdata("email");
	$pass = getdata("pass");

	if ( ! register ($name, $email, $pass, $result) ) 
	{ 
		redirect ("Login properly please.<br>Transferring to Login page", "index.php", 4);
		exit();
	}
	else
	{
		redirect("Redirecting to index", "index.php", 1);
	
	}
}	


// Do send
if (isset($_POST['send'])){

	$email =getdata("email");

	$pass = send ($email,$result);

	$mail = mail($email, "Message about password","Your password is ".$pass);

	if ($mail)
	{
		echo "Thank you for using our mail form";
	}
	else 
	{
		echo "Mail sending failed";
	}


}	

// Do send
if (isset($_POST['submit'])){

	$name =getdata("firstname");
	$lastname =getdata("lastname");
	$message =getdata("subject");

	$to = "example@hotmail.com";


	$mail = mail($to, "Message from ".$name." ".$lastname ,$message);

	if ($mail)
	{
		echo "Thank you for using our mail form";
	}
	else 
	{
		echo "Mail sending failed";
	}


}
	
													    											
mysqli_close($connection);													

?>