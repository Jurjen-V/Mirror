<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add project</title>
</head>
<body>
	<form method="post" action="add.php">
		<?php include('errors.php'); ?>
		<label>Title</label>
		<input type="text" name="title">
		<label>Omschrijving</label>
		<input type="text" name="desc">
		<label>Student</label>
		<input type="text" name="student">
		<label>Opleiding</label>
		<input type="text" name="education">
		<label>Start datum</label>
		<input type="date" name="date1">
		<label>Eind datum</label>
		<input type="date" name="date2">
		<label>Student foto</label>
		<input type="file" name="studentimg" accept="image/*">
		<label>Project foto</label>
		<input type="file" name="projectimg" accept="image/*">
		<button type="submit" class="btn" name="add_project">Toevoegen</button>
	</form>
</body>
</html>