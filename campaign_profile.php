<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

<body>
<div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>
<?php
include 'footer.php';
?>
<script type="text/javascript">
     var fd = new FormData();
       var id=<?php echo $_GET['id']; ?>;

                
        // body...

        $.ajax({
                    url:"api.php?action=get_campaign&id="+id+"",
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        var obj = $.parseJSON(response);
                          if (obj['access']!="0") 
                          {
                             console.log(obj);
                         
                          }
                    }
                });
            
    
</script>
</html>
