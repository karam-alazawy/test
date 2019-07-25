<?php
include 'header.php';
          if (!isset($_SESSION['id'])) {
        echo '<script type="text/javascript">window.location.href = "login.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="froala/css/froala_editor.css">
  <link rel="stylesheet" href="froala/css/froala_style.css">
  <link rel="stylesheet" href="froala/css/plugins/code_view.css">
  <link rel="stylesheet" href="froala/css/plugins/draggable.css">
  <link rel="stylesheet" href="froala/css/plugins/colors.css">
  <link rel="stylesheet" href="froala/css/plugins/emoticons.css">
  <link rel="stylesheet" href="froala/css/plugins/image_manager.css">
  <link rel="stylesheet" href="froala/css/plugins/image.css">
  <link rel="stylesheet" href="froala/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="froala/css/plugins/table.css">
  <link rel="stylesheet" href="froala/css/plugins/char_counter.css">
  <link rel="stylesheet" href="froala/css/plugins/video.css">
  <link rel="stylesheet" href="froala/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="froala/css/plugins/file.css">
  <link rel="stylesheet" href="froala/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="froala/css/plugins/help.css">
  <link rel="stylesheet" href="froala/css/third_party/spell_checker.css">
  <link rel="stylesheet" href="froala/css/plugins/special_characters.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

<body>
      <div class="all">
              <br />
              <br />
              <br />
              <br />

<h3 style="text-align: center;">Step <span>1</span></h3>
<nav style="    box-shadow: none;" aria-label="breadcrumb">
  <ol style="opacity: 0.8;background-color: white;" class="breadcrumb">
    <li class="breadcrumb-item"><a style="    text-decoration: none;
    color: #00a859;" href="campaign.php">Campaign</a></li>
    <li class="breadcrumb-item active" aria-current="page">Insert Information</li>
  </ol>
</nav>
  <hr>

              <section class="second-form">



                 <div class="container-form mb-6">
                     <div style="margin-bottom: 40px;" class="basics">
                         <h3 class="basics-head">Basics</h3>
                         <p class="basics-desc">
                                Make a good first impression: introduce your campaign objectives and entice people to learn more. This basic information will represent your campaign on your campaign page, on your campaign card, and in searches.
                         </p>
                     </div>
                     <form  enctype="multipart/form-data" action="" id="myform" class="mb-5">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                      <label style="margin: 0; font-weight: 700;" for="title">Title <span style="color: red">*</span></label>
                                      <span class="d-block">What is the title of your campaign?</span>
                                      <input id="title"  data-bs-hover-animate="pulse"  required=""  type="text" class="form-control" id="title">
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label style="margin: 0; font-weight: 700;" for="desc">Description <span style="color: red">*</span></label>
                                          <span class="d-block">Provide a short description that best describes your campaign to your audience.                                            </span>
                                          <textarea  id="description" data-bs-hover-animate="pulse"  required=""  type="text" class="form-control" id="desc"></textarea>
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label style="margin: 0; font-weight: 700;" for="story">Story <span style="color: red">*</span></label>
                                          <span class="d-block">Tell potential contributors more about your campaign. Provide details that will motivate people to contribute.                                          </span>
                                          <div id="froala-editor">
                                         <div><h3>Short Summary</h3><p>Contributors fund ideas they can be passionate about and to people they trust. Here are some things to do in this section:</p><ul><li>Introduce yourself and your background.</li><li>Briefly describe your campaign and why it's important to you.</li><li>Express the magnitude of what contributors will help you achieve.</li></ul><p>Remember, keep it concise, yet personal. Ask yourself: if someone stopped reading here would they be ready to make a contribution?</p></div><div><h3>What We Need &amp; What You Get</h3><p>Break it down for folks in more detail:</p><ul><li>Explain how much funding you need and where it's going. Be transparent and specific-people need to trust you to want to fund you.</li><li>Tell people about your unique perks. Get them excited!</li><li>Describe where the funds go if you don't reach your entire goal.</li></ul></div><div><h3>The Impact</h3><p>Feel free to explain more about your campaign and let people know the difference their contribution will make:</p><ul><li>Explain why your project is valuable to the contributor and to the world.</li><li>Point out your successful track record with projects like this (if you have one).</li><li>Make it real for people and build trust.</li></ul></div><div><h3>Risks &amp; Challenges</h3><p>People value your transparency. Be open and stand out by providing insight into the risks and obstacles you may face on the way to achieving your goal.</p><ul><li>Share what qualifies you to overcome these hurdles.</li><li>Describe your plan for solving these challenges.</li></ul></div><div><h3>Other Ways You Can Help</h3><p>Some people just can't contribute, but that doesn't mean they can't help:</p><ul><li>Ask folks to get the word out and make some noise about your campaign.</li><li>Remind them to use the HQ Earth share tools!</li></ul></div><p>And that's all there is to it.</p>
                                            </div>
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label style="margin: 0; font-weight: 700;" for="images">Images <span style="color: red">*</span></label>
                                          <span class="d-block">Upload a square image that represents your campaign. 
                                                640 x 640 recommended resolution, 220 x 220 minimum resolution.</span>
                                                <div class="custom-file mb-1">
                                                        <input type="file" id="file" name="file" data-bs-hover-animate="pulse"  required=""  class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="img1">Choose an image</label>
                                                </div>
                                                <div class="custom-file mb-1">
                                                        <input type="file" id="file2" name="file2" data-bs-hover-animate="pulse"  required=""  class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="img2">Choose an image</label>
                                                </div>  
                                                <div class="custom-file mb-1">
                                                        <input type="file" id="file3" name="file3"  data-bs-hover-animate="pulse"  required=""   class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="img3">Choose an image</label>
                                                </div>  
                                                <div class="custom-file">
                                                        <input type="file" id="file4" name="file4"  data-bs-hover-animate="pulse"  required=""  class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="img4">Choose an image</label>
                                                </div>                                          
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label style="margin: 0; font-weight: 700;" for="viderUrl">Video URL <span style="color: red">*</span></label>
                                          <span class="d-block">Enter a YouTube URL to appear at the top of your campaign page.</span>
                                          <input  id="yurl"   data-bs-hover-animate="pulse"  required="" type="url" class="form-control" id="viderUrl" placeholder="http://">
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label style="margin: 0; font-weight: 700;" for="viderUrl">Amount needed for the campagin <span style="color: red">*</span></label>
                                          <span class="d-block">Enter the amount of money you need </span>
                                          <div class="input-group">
                                                <input  id="amount" data-bs-hover-animate="pulse"  required=""  type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                                <div class="input-group-append">
                                                  <span class="input-group-text">$</span>
                                                  <span class="input-group-text">0.00</span>
                                                </div>
                                              </div>
                                    </div>
                            </div>
                            <button onsubmit="event.preventDefault()" onclick="addcamp()" type="submit" class="btn btn-primary">Next</button>
                       <div class="alert2 alert-danger" role="alert">
                Check Your Information !!</div></form>
                 </div>
              </section>
        



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
      Campaign has been added .<br>
      You will be <span style="color: #ff00008a;">redirected</span> ...
    </div>
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


  
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

  <script src="froala/js/languages/ar.js"></script>

  <script type="text/javascript" src="froala/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/help.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/print.min.js"></script>
  <script type="text/javascript" src="froala/js/third_party/spell_checker.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/special_characters.min.js"></script>
  <script type="text/javascript" src="froala/js/plugins/word_paste.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <?php
include 'footer.php';

?>
  <script type="text/javascript">

  var country;
  var title;
  var description;
  var story;
  var yurl;
  var amount;
  var id=<?php echo $_SESSION['id']; ?>;


var id=<?php echo $_SESSION['id']; ?>;


  $.get( "api.php?action=checkusercampaign&id="+id, function( data ) {
        var obj = $.parseJSON(data);

  if (obj['access']=="1" & obj['found']=="1") {
     $(".all").html('<br /><br /><br /><br /><div  style="margin-top:100px; padding: 20px; width: 90%; margin: auto;" class="noti2 alert alert-danger" role="alert">You Already Have campaign !! <br>You will be <span style="color: #ff00008a;">redirected</span> ...</div>');

      setInterval(function(){window.location.href="index.php"; }, 4000);

                          

  }
});


   let editor = new FroalaEditor('div#froala-editor', {    direction: 'rtl'
}, function () {

  console.log(editor.html.get())
}) 

$('#myform').submit(function () {
 return false;
});
  function addcamp() {
    // body...
        title = $('#title').val();
        description = $('#description').val();
        story = editor.html.get()+" ";
        console.log("story="+story);
        yurl = $('#yurl').val();
        amount = $('#amount').val();
        checkinfo();

  }
  function checkinfo(){
     var fd = new FormData();

                var files = $('#file')[0].files[0];
                var files2 = $('#file2')[0].files[0];
                var files3 = $('#file3')[0].files[0];
                var files4 = $('#file4')[0].files[0];
 
                fd.append('file',files);
                fd.append('file2',files2);
                fd.append('file3',files3);
                fd.append('file4',files4);
                fd.append('story',story);
        // body...

        $.ajax({
                    url:"api.php?action=addcampaign&id="+id+"&description="+description+"&title="+title+"&img1=1&img2=2&img3=3&img4=4&youtube_url="+yurl+"&amount="+amount+"",
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        var obj = $.parseJSON(response);

                          if (obj['access']!="0") {
                                $(".alert2").css("display", "none");

                                  $(".noti").css("display", "block");
                        setInterval(function(){window.location.href="index.php"; }, 1500);

                          }
                          else{
                            $(".alert2").css("display", "block");
                          }
                                                        console.log(obj);


                    }
                });
            
    }


</script>


</html>