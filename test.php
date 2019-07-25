<!DOCTYPE html>
<html>

<head>
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

  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }

    .ss {
      background-color: red;
    }
  </style>
</head>

<body>
<div id="froala-editor">
  
</div>

<button onclick="reg()" onsubmit="event.preventDefault()" class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Sign Up</button>

<script>


    let editor = new FroalaEditor('div#froala-editor', {    direction: 'rtl'
}, function () {

  console.log(editor.html.get())
})   
    function reg() {
  console.log(editor.html.get()); 
 }
 
  </script>
</body>

</html>