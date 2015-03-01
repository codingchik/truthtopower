<?php 
echo "la";
    if(isset($_POST['submit'])){
        echo "lala";
    $name       = $_FILES['fileToUpload']['name'];  
    $temp_name  = $_FILES['fileToUpload']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = '../uploads/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'uploaded';
            }
        }       
    }  else {
        echo 'nah';
    }
}
  ?>