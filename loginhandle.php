<?php session_start(); //session start.

if (isset($_POST["submit"])) {
	
	$username_val= $_POST["username"];
	$password_val= $_POST["password"];
	
	if($username_val=="kunwar" && $password_val=="kcp")  //username and password are compared with predefined one. 
	{
	
    	$_SESSION["username"]=$username_val;	//assigning session name.
		header("location: home.php"); //redirect to home page.
	} 
	else {
		
		header("Location: index.php?response=1" );
		
	
	}
	
} 

/*else {
	echo "Post hasn't been used";
		//header("location: index.php");
}*/


?>