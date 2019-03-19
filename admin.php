<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin pagina</title>
</head>
<body>
	<p>Hoi</p>
</body>
</html>
<?php
// THis code is for Automatic demo account disabling after 2 weeks.
$servername = "localhost";
$usernameDB = "mirror";
$passwordDB = "";
$dbname = "Demo-users-Retailtrust";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernameDB, $passwordDB);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "error: " . $e->getMessage();
}
$stmt = $conn->prepare("SELECT ID, Username, Password, maintenancemode,TimeMaintenanceStart, TimeMaintenanceEnd FROM Admin");
$stmt->execute();
foreach ($stmt as $row) {
}
?>