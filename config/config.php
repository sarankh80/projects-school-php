<?php
   ob_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'web_school_db');
   $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
   } 
   define("BASE_URL", "/yearIII/project");
   define("BASE_URL_ADMIN", "/yearIII/project/admin/");
   define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
   function uploadFile($control_name){
      $source = $_FILES["$control_name"]["tmp_name"];
      $destination = ROOT_PATH.BASE_URL."/images/".$_FILES["$control_name"]["name"];
      move_uploaded_file($source, $destination);
   }
   function deleteFile($file_name){
      if(file_exists($file_name))
      {
         unlink($file_name);  
      }
   }

?>