<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <header>
        <img class="logo" src="https://i.imgur.com/05a8QY5.png" alt="">
    </header>
    <main>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <h3>Hall Of Fame Login</h3>
            <input type="text" name="username" placeholder="&#61447;">
            <br>
            <input type="password" name="password" placeholder="&#xf084;">
            <br>
            <button type="submit" class="btn" name="login_user">Login</button>
        </form>
    </main>
</body>
</html>
