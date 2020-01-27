<?php

function login( $name, $email, $pass, &$result)
{
	global $connection;
	$statement   =  "select * from  Users where email = '$email' and pass = '$pass' and name  = '$name' " ;
	$pass = sha1 ($pass);
	($result = mysqli_query( $connection,  $statement ) ) or die( mysqli_error($connection) );
	
	$num = mysqli_num_rows($result);
		
	if( $num == 0)
	{ 
		return False; 
	}
	else 
	{ 
		return True; 
	}
		
}

function register($name, $email, $pass, &$result)
{
	global $connection;
	$statement   =  "select * from  Users where email = '$email' " ;
	($result = mysqli_query( $connection,  $statement ) ) or die( mysqli_error($connection) );
	
	$num = mysqli_num_rows($result);
		
	if( $num == 0) // account doesnt exist, create one
	{ 
		$statement = "insert into Users (name, email, pass) values ('$name','$email','$pass')";
		($result = mysqli_query( $connection,  $statement ) ) or die( mysqli_error($connection) );
		return 1;
	}
	else 
	{ 
		echo "Account already exist.".PHP_EOL;
		return 0;
	}
		
}


function send( $email,&$result) 
{

	global $connection;
	$statement   =  "select * from  Users where email = '$email' " ;
	($result = mysqli_query( $connection,  $statement ) ) or die( mysqli_error($connection) );
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_array ( $result, MYSQLI_ASSOC);

	if ($num > 0) {

		$pass = $row["pass"];

		return $pass;

	}
}


function getdata( $name )
{
	global $connection;
	$temp = $_POST [ $name ] ;
	$temp = trim ( $temp ) ; // Trim to remove leading and trailing spaces from the data.
	$temp = mysqli_real_escape_string($connection, $temp); //Escapes special characters in a string for use in an SQL statement.
				//Prevents SQL injection attacks which is by using the ' char to append malicious code to an SQL query.
	return $temp; 
	
	
}

function redirect( $message, $url , $delay)
{
	echo "$message"; // visible because of delay

	header ("refresh:$delay; url = $url"); // sends 'refresh' HTTP header to browser
												// argument is a single STRING "..."
												//see header in developer tools network tab
												
	exit();								


}




?>