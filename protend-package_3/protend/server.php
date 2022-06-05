<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b311058f2c8e1d', 'e2e8a086', 'heroku_3310e3ab75742b0');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "須先填入使用者名稱"); }
  if (empty($email)) { array_push($errors, "須先填入電子郵件"); }
  if (empty($password_1)) { array_push($errors, "須先填入密碼"); }
  if ($password_1 != $password_2) {
	array_push($errors, "二次確認密碼不正確");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM log WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "使用者名稱已被使用過了，請更換");
    }

    if ($user['email'] === $email) {
      array_push($errors, "電子郵件已被使用過，請更換");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO log (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "必須填入使用者名稱(username)");
  }
  if (empty($password)) {
  	array_push($errors, "必須填入密碼(Password)");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM log WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "您已經登入囉";
  	  header('location: user-login.php');
  	}else {
  		array_push($errors, "錯誤的使用者名稱或是密碼");
  	}
  }
}

?>