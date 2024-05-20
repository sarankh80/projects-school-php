<?php
   include('config.php');
   session_start();   
   $user_id = $_SESSION['user_id'];
   $sql_session = "SELECT id,email,name FROM user WHERE id = '$user_id'";
   $result_session = $conn->query($sql_session);  
   $row = $result_session->fetch_assoc();
   $id = $row['id'];
   if(empty($id)){
      header("location:".BASE_URL_ADMIN."login.php");
      die();
   }
?>