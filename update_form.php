<!-- update_form.php -->
<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

if (isset($_GET['demail'])) {
    $demail = $_GET['demail'];

    // Retrieve the doctor information based on the provided email
    $query = "SELECT * FROM doctb WHERE email = '$demail'";
    $result = mysqli_query($con, $query);
    $doctor = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="index.php"><i class="fa fa-user-plus" aria-hidden="true"></i> CARE GROUP </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <style>
      .bg-primary {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
      }

      .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #342ac1;
        border-color: #007bff;
      }

      .text-primary {
        color: #342ac1 !important;
      }

      .btn-primary {
        background-color: #3c50c1;
        border-color: #3c50c1;
      }
    </style>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <form action="logoutfunc.php" method="post">
          <li class="nav-item">

            <button type="submit" name="plogout"> <i class="fa fa-sign-out" aria-hidden="true">Logout</i></button></a>
          </li>
        </form>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </nav>
</head>
<style type="text/css">
  button:hover {
    cursor: pointer;
  }
  @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
  #inputbtn:hover {
    cursor: pointer;
  }
</style>

<body style="padding-top:50px;">

    <?php if (isset($doctor)) : ?>
        <h2>Update Doctor Information</h2>
        <form method="post" action="update_process.php">
            <input type="hidden" name="demail" value="<?php echo $doctor['email']; ?>">

            <label>Doctor ID:</label>
            <input type="text" value="<?php echo $doctor['ID']; ?>" readonly><br><br>

            <label>Current Username:</label>
            <input type="text" value="<?php echo $doctor['username']; ?>" readonly><br><br>

            <label>New Username:</label>
            <input type="text" name="newUsername" value="<?php echo $doctor['username']; ?>"><br><br>

            <label>New Password:</label>
            <input type="password" name="newPassword" value=""><br><br>

            <label>Current Specialization:</label>
            <input type="text" value="<?php echo $doctor['spec']; ?>" readonly><br><br>

            <label>New Specialization:</label>
            <input type="text" name="newSpecial" value="<?php echo $doctor['spec']; ?>"><br><br>

            <label>Current Doctor Fees:</label>
            <input type="text" value="<?php echo $doctor['docFees']; ?>" readonly><br><br>

            <label>New Doctor Fees:</label>
            <input type="number" name="newDocFees" value="<?php echo $doctor['docFees']; ?>"><br><br>

            <input type="submit" name="updateDoctor" value="Update Doctor Info">
        </form>
    <?php else : ?>
        <p>No doctor found with the provided email.</p>
    <?php endif; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
  </script>
</body>
</html>
