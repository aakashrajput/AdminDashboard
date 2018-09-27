<?php
session_start();

// initializing variables
$emp_name = "";
$emp_email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'spartanshub');



// LOGIN USER
if (isset($_POST['login_user'])) {
  $emp_name = mysqli_real_escape_string($db, $_POST['emp_name']);
  $pass = mysqli_real_escape_string($db, $_POST['emp_pass']);

  if (empty($emp_name)) {
    array_push($errors, "Username is required");
  }
  if (empty($pass)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $emp_pass = md5('emp_pass');
    $query = "SELECT * FROM employee_reg WHERE emp_name='$emp_name' AND emp_pass='$emp_pass'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['emp_name'] = $emp_name;
      $_SESSION['success'] = "You are now logged in";
      header('location: ./employee/dashboard.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
