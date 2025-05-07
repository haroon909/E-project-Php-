<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "myhmsdb");
// print_r($_POST);

if (isset($_POST['drlogin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM doctb WHERE email='$email' AND password='$password';";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['dname'] = $row['username'];
    header("Location: doctor-panel.php");
    exit();
  }
} else {
  header("Location: index.php");
}
if (isset($_POST['adlogin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admintb WHERE username='$email' AND password='$password';";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $email;
    header("Location: admin-panel.php");
    exit();
  }
}else {
  header("Location: index.php");
}
if (isset($_POST['palogin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM patreg WHERE email='$email' AND password='$password';";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['pid'] = $row['pid'];
    $_SESSION['pusername'] = $row['fname'] . " " . $row['lname'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['contact'] = $row['contact'];
    $_SESSION['email'] = $row['email'];
    header("Location: patient-panel.php");
    exit();
  }
}else {
  echo'<script>prompt("Invalid id or password") </script>';
  header("Location: index.php");
}
