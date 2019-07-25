<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    
        <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HQ Earth</title>
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/233a60d6f5.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
  <title>HQ Earth</title>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="#">
                    <img style="    width: 240px;
    margin-bottom: 5px;
    margin: -13px;" src="assets/img/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">What We Do <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                    </li>
                  </ul>
                  <?php
                    if (isset($_SESSION['id'])) {
                      $id=$_SESSION['id'];
                    
                        $result= mysqli_query($conn,"SELECT * FROM `campaigns` WHERE userid='$id'");

                         if (mysqli_num_rows($result)>0) {
                      # code...
                     echo '<a class="nav-link" style="font-weight: 700;color: #2a2a2a;" href="my_campaign.php">My Campaign<span class="sr-only">(current)</span></a>';
                    

                    }else
                     echo '<a class="nav-link" style="font-weight: 700;color: #2a2a2a;" href="add_information.php">Start a Campaign<span class="sr-only">(current)</span></a>';

                    }else{
                     echo '<a class="nav-link" style="font-weight: 700;color: #2a2a2a;" href="add_information.php">Start a Campaign<span class="sr-only">(current)</span></a>';}
                     
                  ?>
                  <div class="stand"></div>

                    <?php
          if (isset($_SESSION['id'])) {

            echo '    <div class="account">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown dropleft">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize;">
                                      '.$_SESSION['firstname'].'
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">My Campaign</a>
                                      <a class="dropdown-item" href="#">My Contributions</a>
                                      <a class="dropdown-item" href="#">My Profile</a>
                                      <a class="dropdown-item" href="#">Start Campaign</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="logout.php">Log Out</a>
                                    </div>
                            </li>
                        </ul>
                    </div> 
';
          }else
          echo '
          <div class="my-2 my-lg-0">
                     <a href="login.php">   <button type="button" class="btn btn-outline-dark">Login </button></a>
                        <a href="login.php?type=signup"><button class="btn btn-outline-success my-2 my-sm-0">Signup</button></a>
                  </div>';

            ?>
               
                  <!--  -->
                </div>
              </nav>



</head>
<body style="background: #fff;">

</body>

<style type="text/css">
  .aheader{
        white-space: nowrap;
    font-weight: 700;
    color: #2a2a2a  !important;
    vertical-align: middle;
  }
  .aheader:hover{
        white-space: nowrap;
    font-weight: 700;
    color: #51a8db  !important;
    vertical-align: middle;
  }
</style>
</html>

