<?php
if($_FILES["Photo"]["name"]!=""){

    $name = $_FILES['Photo']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["Photo"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
      // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['Photo']['tmp_name']) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
      // Insert record    
      // Upload file
      move_uploaded_file($_FILES['Photo']['tmp_name'],$target_dir.$name);
    }
   
  }
?>