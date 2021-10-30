<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$address="";
$district="";
$cardname="";
$expm="";
$expy="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['pay'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $district = mysqli_real_escape_string($db, $_POST['district']);
  $cardname = mysqli_real_escape_string($db, $_POST['cardname']);
  $cardnumber = mysqli_real_escape_string($db, $_POST['cardnumber']);
  $expm = mysqli_real_escape_string($db, $_POST['expm']);
  $expy = mysqli_real_escape_string($db, $_POST['expy']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($district)) { array_push($errors, "district is required"); }
  if (empty($cardname)) { array_push($errors, "cardname is required"); }
  if (empty($cardnumber)) { array_push($errors, "cardnumber is required"); }
  if (empty($expm)) { array_push($errors, "Exp month is required"); }
  if (empty($expy)) { array_push($errors, "Exp year is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM pay WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($cardnumber);//encrypt the password before saving in the database

  	$query = "INSERT INTO pay (name, email, address,district,cardname,cardnumber,expm,expy) 
  			  VALUES('$name', '$email', '$address'),'$district','$cardname','$cardnumber','$expm','$expy'";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: sucess.php');
  }
}
