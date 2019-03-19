<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
</head>
<body>

    <img class="logo" src="https://seeklogovector.net/wp-content/uploads/2018/10/roc-friese-poort-logo-vector.png" alt="">
    <form method="post" action="login.php">
      	<?php include('errors.php'); ?>
        <label>Username</label>
        <input type="text" name="username" >
        <label>Password</label>
        <input type="password" name="password">
      	<button type="submit" class="btn" name="login_user">Login</button>
    </form>

</body>
</html>
