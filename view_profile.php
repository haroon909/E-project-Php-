<!DOCTYPE html>
<?php
// include('func.php');
include('db_connection.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];


    $userID = $_SESSION['pid'];


    $query = "UPDATE patreg SET fname = '$fname', lname = '$lname', email = '$email', contact = '$contact' WHERE pid = $userID";
    $result = mysqli_query($con, $query);

    if ($result) {

        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['contact'] = $contact;

        header('Location: patient-panel.php');
        exit();
    } else {
      
        $error_message = "Failed to update user information. Please try again.";
    }
}
?>


<html lang="en">

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

<section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration ">
                        <div class="row ">
                            
                            <div class="col-xl-12">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Information Update form</h3>

                                    
                                    <form action="view_profile.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <input type="hidden" name="ID" value="<?php echo $info['ID'] ?>">
                                            <div class="col-md-9 mb-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingInput" name="fname"
                                                        value="<?php echo @$_SESSION['fname'] ?>" placeholder="First Name">
                                                    <label for="floatingInput">First Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-9 mb-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingInput" name="lname"
                                                        value="<?php echo @$_SESSION['lname'] ?>" placeholder="Last Name">
                                                    <label for="floatingInput">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-9 mb-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingInput" name="email"
                                                        value="<?php echo @$_SESSION['email'] ?>" placeholder="Email">
                                                    <label for="floatingInput">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-9 mb-5">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingInput" name="contact"
                                                        value="<?php echo @$_SESSION['contact'] ?>" placeholder="Contact">
                                                    <label for="floatingInput">Contact</label>
                                                </div>
                                            </div>
                                        </div>
                                       


                                

                              
                                         
                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Submit
                                                form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <script>
  let today = new Date().toISOString().split('T')[0];
  let appdateinput = document.getElementById('appdate');
  appdateinput.setAttribute('min', today);
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
  </script>



</body>

</html>