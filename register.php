
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
    if (isset($_SESSION['username']) && $_SESSION['login_user'] == 1553085554) {
    ?>
        <form method="post" action="register.php">
          <?php include('errors.php'); ?>
          <div class="input-group">
            <label>Gebruikersnaam</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="input-group">
            <label>Wachtwoord</label>
            <input type="password" name="password_1">
          </div>
          <div class="input-group">
            <label>Bevestig Wachtwoord</label>
            <input type="password" name="password_2">
          </div>
          <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Registreer</button>
          </div>
        </form>
    <?php
    } else {
        echo "Je hebt geen toegang tot deze pagina";
    }
  ?>

</body>
</html>
