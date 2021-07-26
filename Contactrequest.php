<?php

$username = $email = $issue = $comment = '';
$usernameErr = $emailErr = $goback = '';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(!empty(test_input($_POST['username']))){
		$username = test_input($_POST['username']);
	}else{
		$usernameErr = 'Username is required.';
		$goback =  "Go back to Contact Us.";
	}
	
	if(!empty(test_input($_POST['email']))){
		$email = test_input($_POST['email']);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$emailErr = 'Invalid email format.';
		$goback =  "Go back to Contact Us.";
		}
	}else{
		$email = test_input(test_input($_POST['email']));
	}
	$issue = test_input($_POST['issue']);
	$comment = test_input($_POST['comment']);

}


?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./style.css" />
<style>
.error {color: #FF0000;}
</style>
<title>Contact Request</title>

<body>
<h1>Contact Form</h1>
<div>


<h3>Customer Details</h3>
<p>User: <?php echo $username?><span class="error"> <?php echo $usernameErr; ?></span></p></br>

<p>Email: <?php 
if (!$emailErr){
	echo $email;
}else{
	echo "<span class='error'>" . $emailErr  . "</span></p></br>";
}
?>

<p>Issue: <?php echo $issue ?></p></br>
<p>User message: <?php echo $comment ?></p></br>
<?php 
if(empty($goback)){
	
}else{
	echo "Go back to: <a id='goback' href='Contactform.php'>Contact Us</a>";
}
 
?>
</div>

</body>


</html>