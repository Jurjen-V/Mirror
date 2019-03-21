<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/add.css">
	<title>Add project</title>
</head>
<body>
	<form method="post" action="add.php">
		<?php include('errors.php'); ?>
		<label>Title</label>
		<div class="title">
			<input placeholder="Title" type="text" name="title">
		</div>
		<label>Omschrijving</label>
		<div class="desc">
			<input placeholder="Omschrijving" type="text" name="desc">
		</div>
		<label>Student</label>
		<div class="student">
			<input placeholder="Student naam" type="text" name="student">
		</div>
		<label>Opleiding</label>
		<div class="education">
			<input placeholder="Opleiding" type="text" name="education">
		</div>
		<label>Start datum</label>
		<div class="date1">
			<input type="date" name="date1">
		</div>
		<label>Eind datum</label>
		<div class="date2">
			<input type="date" name="date2">
		</div>
		<div class="img">
			<label id="img">Voeg student foto toe
			<input type="file" name="studentimg" accept="image/*"></label>
		</div>
		<div class="img">
			<label id="img">Voeg Project foto toe
			<input type="file" name="projectimg" accept="image/*"></label>
		</div><div class="submit">
			<input type="submit" value="submit" te class="btn" name="add_project"></input>
			<a href="http://localhost/php/mirror/admin.php">cancel</a>
		</div>
	</form>
</body>
</html>