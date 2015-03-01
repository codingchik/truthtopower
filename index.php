<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>TruthToPower</title>
</head>
<body>
<?php 
    require ("nav.php");
?>

<div class="row">
    <div class="col-xs-6 col-md-3 col-md-offset-1">
        <img name="track1" src="assets/playbutton.png" id="track1" alt="playbutton">
        <div id="playaudio">
        </div>
   </div>
    </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-md-3 col-md-offset-1">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
</div>
    <div class="row">
    <div class="col-xs-6 col-md-3 col-md-offset-1">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="assets/playbutton.png" alt="playbutton">
    </a>
    </div>
</div>

<button type="button" class="btn btn-default btn-lg"><a href="upload.php">Share Your Story</a></button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="upload.js"></script>
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript">
$(document).ready( function() {
$('#track1').click(function(){
   $('#playaudio').append('<embed id="embed_player" src="hackathon/audiotest.mp3" autostart="true" hidden="true"></embed>');
});
});
</script>
</body>
<?php 
    require ("footer.php");
?>
</html>