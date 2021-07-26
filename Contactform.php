<!DOCTYPE html>

<html>
<link rel="stylesheet" href="./style.css" />
<style>
.error {color: #FF0000;}
</style>

<title>
Contact Form
</title>

<body>
<h1> Contact Form</h1>

<div>
<form method="POST" action="Contactrequest.php">
	<label for="username">Username</label> </br>
	<input type="text" name="username"></br>
	<label for="email">Email</br>
	<input type="text" name="email"></label></br>
	Message type <select name="issue">
		<option value=""></option>
		<option value="Query">Query</option>
		<option value="Feedback">Feedback</option>
		<option value="Complaint">Complaint</option>
		<option value="Others">Others</option>
	</select></br>
	<label for="issue">Issue</label></br>
	<textarea rows="4" cols="50" name="comment"></textarea></br>
	
	<input type="submit" value="Submit" name="submit"></input>
</form>
</div>

</body>


</html>