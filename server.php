<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'halloffame');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: admin.php');
  }
}

// ...
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: admin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//add user
if(isset($_POST['add_project'])){
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);
  $student = mysqli_real_escape_string($db, $_POST['student']);
  $education = mysqli_real_escape_string($db, $_POST['education']);
  $date1 = mysqli_real_escape_string($db, $_POST['date1']);
  $date2 = mysqli_real_escape_string($db, $_POST['date2']);
  $studentimg = mysqli_real_escape_string($db, $_POST['studentimg']);
  $projectimg = mysqli_real_escape_string($db, $_POST['projectimg']);
  if(empty($title)){
    $array_push($errors, "Please fill in a title");
  }
  if(empty($desc)){
    $array_push($errors, "Please fill in a description");
  }
  if(empty($student)){
    $array_push($errors, "Please fill in a student");
  }
  if(empty($education)){
    $array_push($errors, "Please fill in a opleiding");
  }
  if(empty($date1)){
    $array_push($errors, "Please fill in a date1");
  }
  if(empty($date2)){
    $array_push($errors, "Please fill in a date2");
  }
  if(empty($studentimg)){
    $array_push($errors, "Please fill in a studentimg");
  }
  if(empty($projectimg)){
    $array_push($errors, "Please fill in a projectimg");
  }
  if (count($errors) == 0) {
    $query = "INSERT INTO projects (TITLE, DESCRIPTION, STUDENT, EDUCATION, STARTDATE, ENDDATE, STUDENTIMG, PROJECTIMG) VALUES ('$title', '$desc', '$student', '$education', '$date1', '$date2', '$studentimg', '$projectimg')";
    $results = mysqli_query($db, $query);
    if ($results) {
      header('location: admin.php');
    }else {
      array_push($errors, "error");
    }
  }

}

?>
