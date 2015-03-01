<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>TruthToPower</title>
  <link rel="stylesheet" type="text/css" href="main.css">
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
    require ("nav.php");
?>

<div class="jumbotron">
<div class="box col-md-4"> one</div>
<div class="box col-md-4"> two </div>
<div class="box col-md-4"> three </div>
</div> 
    
  <div id="main">
  <p>Share your story</p>
  <form method="post" enctype="multipart/form-data" action="index.php">
    <input type="file" id="fileToUpload" name="fileToUpload" />
    <input type="submit" name="submit" value="Upload"/>
  </form>

  <div id="response"></div>
    <ul id="image-list"></ul>
</div>

<?php 
    if(isset($_POST['submit'])){
    $name       = $_FILES['fileToUpload']['name'];
    $size       = $_FILES['fileToUpload']['size'];
    $temp_name  = $_FILES['fileToUpload']['tmp_name'];
    if(isset($name)){
        if(!empty($name)){ 
         // Check file size
            if ($size > 5000000) {
                echo "Sorry, your file is too large.";
            } else {
            $location = 'uploads/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'Thank you for sharing.';
            }
          }  
        }
    }  else {
        echo 'Sorry, there was an error uploading your file.';
    }
}
  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="upload.js"></script>
</body>
<?php 
    require ("footer.php");
?>
</html>