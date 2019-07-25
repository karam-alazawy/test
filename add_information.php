 <script type="text/javascript">
 function checkinfo(){
        // body...
            $.get( "api.php?action=adduserinfo&id="+id+"&country="+country+"&city="+city+"&address="+address+"&nationality="+country+"&idnum="+idnum+"", function( data ) {
        var obj = $.parseJSON(data);

  if (obj['access']!="0") {
        $(".alert2").css("display", "none");

      console.log(obj);
          $(".noti").css("display", "block");
setInterval(function(){window.location.href="campaign.php"; }, 1500);

  }
  else{
    $(".alert2").css("display", "block");
  }

});
    }
</script>
<?php
include 'header.php';
          if (!isset($_SESSION['id'])) {
        echo '<script type="text/javascript">window.location.href = "login.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<body>
   

              <div class="register-photo">
                    <div class="form-container">
                        <div class="image-holder"></div>
                        <form id="myform" method="post">
                            <h2 class="text-center"><strong>Start a campaign</strong></h2>
                            <div class="form-group"><input data-bs-hover-animate="pulse" id="country" class="form-control" type="text" name="country" placeholder="Country" autocomplete="on" required=""></div>
                            <div class="form-group"><input data-bs-hover-animate="pulse" id="city" class="form-control" type="text" name="city" placeholder="City" autocomplete="on" required=""></div>
                            <div class="form-group"><input  data-bs-hover-animate="pulse"  required="" id="address" class="form-control" type="text" name="address" placeholder="Address" autocomplete="on" required=""></div>
                            <div class="form-group"><label data-bs-hover-animate="pulse" for="passport-img">Passport image</label><input type="file" name="passport-img" required="" accept="image/*" style="opacity: 0.90;"></div>
                            <div class="form-group"><input data-bs-hover-animate="pulse" id="idnum" class="form-control" type="text" name="passport-num" placeholder="Passport number"></div>
                            <div class="form-group"><button  data-bs-hover-animate="pulse"onclick="addinfo()" class="btn btn-primary btn-block" onsubmit="event.preventDefault()" type="submit" style="background-color: #00a859;">Next</button></div>
                         <div class="alert2 alert-danger" role="alert">
                Check Your Information !!</div></form>
                    </div>
                </div>
        


<div class="noti" aria-live="polite" aria-atomic="true" style="position: fixed;
    height: 100px;
    right: 21px;
    padding: 40px;
    border-radius: 13px;
    width: 261px;
    background: #0195d3c2;
    bottom: 39px;
    color: white;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div style="padding-top:5px;" class="toast-header">
      <img style="    width: 34px;" src="assets/img/favicon.png" class="rounded mr-2" alt="...">
      <strong class="mr-auto">HQ Earth</strong>
      <small>1 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span style="    color: white;
    padding: 15px;" aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Information has been added .<br>
      You will be <span style="color: #ff00008a;">redirected</span> ...
    </div>
  </div>
</div>

</body> 
<style type="text/css">
   .alert2{
            margin: 15px;
    display: none;
    } 
    .noti{
    display: none;
    }
</style>
 <?php
include 'footer.php';

?>
<script type="text/javascript">

  var country;
  var city;
  var address;
  var passportimg;
  var idnum;
  var id=<?php echo $_SESSION['id']; ?>;


  $.get( "api.php?action=checkuserinfo&id="+id, function( data ) {
        var obj = $.parseJSON(data);

  if (obj['access']=="1" & obj['found']=="1") {
    window.location.href="campaign.php";

  }
});


$('#myform').submit(function () {
 return false;
});
  function addinfo() {
    // body...
        country = $('#country').val();
        city = $('#city').val();
        address = $('#address').val();
        idnum = $('#idnum').val();
        checkinfo();

  }
  function checkinfo(){
        // body...
            $.get( "api.php?action=adduserinfo&id="+id+"&country="+country+"&city="+city+"&address="+address+"&nationality="+country+"&idnum="+idnum+"", function( data ) {
        var obj = $.parseJSON(data);

  if (obj['access']!="0") {
        $(".alert2").css("display", "none");

      console.log(obj);
          $(".noti").css("display", "block");
setInterval(function(){window.location.href="campaign.php"; }, 1500);

  }
  else{
    $(".alert2").css("display", "block");
  }

});
    }
</script>
 
</html>