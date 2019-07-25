<?php
include 'header.php';


?>
<!DOCTYPE html>

<html>
<head>

</head>

<body class="text-center text-secondary" style="">
    <div class="loginform text-center text-dark login-clean" style="">
        <form id="myform" method="post" style="width: 380px;max-width: 350px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="bounce animated illustration"><i class="icon ion-ios-navigate" data-bs-hover-animate="pulse"></i></div>
            <div class="form-group text-center" style=""><input id='email' class="form-control d-xl-flex align-items-xl-start" type="email" name="email" placeholder="Text" data-bs-hover-animate="pulse" style="filter: blur(0px);"></div>
            <div class="form-group d-xl-flex align-items-xl-center"><input class="form-control" type="password" name="password" placeholder="Password" id='password' data-bs-hover-animate="pulse" style=""></div>
            <div class="form-group"><button onclick="login()" class="btn btn-primary btn-block" onsubmit="event.preventDefault()" type="submit" data-bs-hover-animate="pulse">Log In</button></div><a href="#" data-bs-hover-animate="pulse" class="forgot">Forgot your email or password?</a>
            <label style="cursor: pointer;" onclick="signup()">SignUp</label>
<div class="alert alert-danger" role="alert">
	Check Your Information !!</div>
        </form>

    </div>




    <div class="signupform register-photo" style="background: none;">
        <div class="form-container">
            <div data-bs-hover-animate="pulse" class="image-holder"></div>
            <form  id="myform2" method="post" class="bounce animated">
                <h2 style="    color: #02a95a;" class="text-center bounce animated"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input id="firstname"  class="form-control" type="text" name="firstname" placeholder="Your First Name" data-bs-hover-animate="pulse"></div>
                <div class="form-group"><input id="lastname"  class="form-control" type="text" name="lastname" placeholder="Your Last Name" data-bs-hover-animate="pulse"></div>
                <div class="form-group"><input id="semail"  class="form-control" type="email" name="email" placeholder="Email" data-bs-hover-animate="pulse"></div>
                <div class="form-group"><input id="spassword" class="form-control" type="password" name="password" placeholder="Password" data-bs-hover-animate="pulse"></div>
                <div class="form-group"><input id="repassword"  class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" data-bs-hover-animate="pulse"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" data-bs-hover-animate="pulse">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button onclick="reg()" onsubmit="event.preventDefault()" class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Sign Up</button></div><label onclick="loginsh()"   data-bs-hover-animate="pulse" class="already">You already have an account? <span style="cursor: pointer;"> Login here . </span></label>
            <div class="alert2 alert-danger" role="alert">
                Check Your Information !!</div>
                </form>
        </div>
    </div>
  <?php include 'footer.php'; ?>
</body>
<style type="text/css">
    .alert{
            margin: 15px;
    display: none;
    }
        .alert2{
            margin: 15px;
    display: none;
    }

    .loginform{
        display: block;
    }

    .signupform{
        display: none;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    function signup() {
        // body...
       $(".loginform").hide(500);
       $(".signupform").show(600);
    }

    function loginsh() {
        // body...
       $(".signupform").hide(500);
       $(".loginform").show(600);
    }

    var firstname;
    var lastname;
    var username;
    var password;
    var repassword;
$('#myform').submit(function () {
 return false;
});
$('#myform2').submit(function () {
 return false;
});

    function login() {
        // body...
        email = $('#email').val();
        password = $('#password').val();
        console.log(email);
        check(email,password);

    }
    function check(user,pass) {
        // body...
            $.get( "api.php?action=login&email="+email+"&password="+password, function( data ) {
        var obj = $.parseJSON(data);

  if (obj['access']!="0") {
        $(".alert").css("display", "none");

      console.log(obj);
      window.location.href="index.php";
  }
  else{
    $(".alert").css("display", "block");
  }

});
    }

        function reg() {
        // body...
        firstname = $('#firstname').val();
        lastname = $('#lastname').val();

        email = $('#semail').val();
        password = $('#spassword').val();
        repassword = $('#repassword').val();
                console.log(email);
        if (password!=repassword) {
                $(".alert2").css("display", "block");
        }else
        regcheck(email,password);

    }
    function regcheck(user,pass) {
        // body...
            $.get( "api.php?action=signup&email="+email+"&password="+password+"&firstname="+firstname+"&lastname="+lastname, function( data ) {
        var obj = $.parseJSON(data);

  if (obj['access']!="0") {
        $(".alert2").css("display", "none");

      console.log(obj);
      window.location.href="index.php";
  }
  else{
    $(".alert2").css("display", "block");
  }

});
    }
</script>
</html>

<?php
if (isset($_GET['type'])) {
    # code...
    if ($_GET['type']=="signup") {
        # code...
        echo '
        <style type="text/css">
    

    .loginform{
        display: none;
    }

    .signupform{
        display: block;
    }
</style>
';
    }
}
?>