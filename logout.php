<?php
  session_start();
  if(isset($_SESSION['email_or_username'])){
    unset($_SESSION['email_or_username']);
    session_destroy();
  }
  include("index.php");
?>
