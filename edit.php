<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/add.css">
	<title>Edit project</title>
</head>
<body>
	<form method="post" action="edit.php?>">
		<?php include('errors.php'); ?>
		<label>Title</label>
		<div class="title">
			<input placeholder="Title" type="text" name="title" value="<?= $_GET['TITLE'] ?>">
		</div>
		<label>Omschrijving</label>
		<div class="desc">
			<input placeholder="Omschrijving" type="text" name="desc" value="<?= $_GET['DESCRIPTION'] ?>">
		</div>
		<label>Student</label>
		<div class="student">
			<input placeholder="Student naam" type="text" name="student" value="<?= $_GET['STUDENT'] ?>">
		</div>
		<label>Opleiding</label>
		<div class="education">
			<input placeholder="Opleiding" type="text" name="education" value="<?= $_GET['EDUCATION'] ?>">
		</div>
		<label>Start datum</label>
		<div class="date1">
			<input type="date" name="date1" value="<?= $_GET['STARTDATE'] ?>">
		</div>
		<label>Eind datum</label>
		<div class="date2">
			<input type="date" name="date2" value="<?= $_GET['ENDDATE'] ?>">
		</div>
		<div class="img">
			<label id="img">Voeg student foto toe</label>
			<input type="file" name="studentimg" accept="image/*" value="<?=$_GET['STUDENTIMG'];?>">
		</div>
		<div class="img">
			<label id="img">Voeg Project foto toe</label>
			<input type="file" name="projectimg" accept="image/*" value="<?= $_GET['PROJECTIMG'] ?>">
		</div><div class="submit">
			<input type="submit" value="submit" class="btn" name="edit_project"></input>
			<a href="http://localhost/php/mirror/admin.php">cancel</a>
		</div>
	</form>
</body>
</html>