<?php 
    require ("nav.php");
?>


<h2>Share your story with the Truth to Power community</h2>
<div class="row">
    <div id="message"></div>
</div>
<div class="row">
<div id="lcontent">
    <h2>Upload</h2>
    <form method="post" enctype="multipart/form-data" action="upload.php">
    <input type="file" id="fileToUpload" name="fileToUpload" />
    <button class="btn btn-default btn-lg"><input type="submit" name="submit" value="Upload"/></button>
  </form>
</div>
    
<div id="rcontent">
    <h2> Voice Masking</h2>
	<button class="btn btn-default btn-lg" id=playButton onclick="truth.play()">Click me</button>
	<button  class="btn btn-default btn-lg" id='maskButton' onclick="truth.mask()">Anonymize me</button>
</div>
</div>
<div class="row" id="survey">
    <p>In order to keep our community safe, respectful and anonymous, 
        <br/>please DO NOT include the following content in your personal story:</p>
    <ul><br/>
        <li>- Names</li>
        <li>- Identifying personal information of you and of others</li>
        <li>- Specific medical information</li>
        <li>- Expletives</li>
        <li>- Secret or classified information</li>
    </ul>
    <br/>
    <p>If you feel comfortable, please share the following information about 
        yourself. These questions are optional and anonymous. </p>
    <br/>
    <form action="">
        <p>Which branch of the military did you serve?</p>
        <select name="Choose One">
            <option value="Select">Select</option>
            <option value="Army">Army</option>
            <option value="Marine">Marine</option>
            <option value="Air Force">Air Force</option>
            <option value="Navy">Navy</option>
            <option value="Coast Guard">Coast Guard</option>
        </select>
        <p>How old are you?</p>
        <select name="Age">
            <option value="Select">Select</option>
            <option value="18-25">18-25</option>
            <option value="26-40">26-40</option>
            <option value="40+">40+</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="Upload"/>
    </form>
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
                echo "Sorry, your file is too large. Keep audio length under 2 minutes please.";
            } else {
            $location = 'uploads/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo '<div id="message">Thank you for sharing your story. We will first review '
                . 'your submission to make sure that it respects the rules we '
                . 'have in place to keep our community safe, respectful and '
                . 'anonymous before we post it.  </div>';
            }
          }  
        }
    }  else {
        echo 'Sorry, there was an error uploading your file.';
    }
}
?>
<?php
    require ("footer.php");
?>

