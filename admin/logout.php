<?php
   include('../config/config.php');
   session_start();
   if(session_destroy()) {
      header("Location:".BASE_URL);
   }
?>