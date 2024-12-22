<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
<title> Doctor's Appointment</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div id="wrapper">
	<h1>Book an Appointment</h1>

	<form action="formhandler.php" method="POST">
	
		<input type="text" name="name" placeholder="Name" required><br><br>

		<input type="tel" name="contact" placeholder="Contact" required><br><br>

		<select type="text" name="city" required>
			<option value="NONE">Select City</option>
			<option value="Matunga">Matunga</option>
			<option value="Thane">Thane</option>
			<option value="Kalyan">Kalyan</option>
		</select><br><br>
		<button type="submit" class="btn">Submit</button>
	</form>
</div>

</body>
</html>