
<?php require 'config.php'  ?>
<?php

   if(session_destroy()) {
      header('Location: login.php');
      session_start();
      $_SESSION['logout']='<h2 style="color: #5cb85c;">LOGOUT SUCCESSFUL!! </h2>';
   }

?>