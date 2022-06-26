<?php 
    if(isset($_POST)){
        $fileDir = 'post-featured-images/' . $_POST['imageName'];
        $fileContent = base64_decode($_POST['fileContent']);
        file_put_contents($fileDir, $fileContent);        
    }   
?>