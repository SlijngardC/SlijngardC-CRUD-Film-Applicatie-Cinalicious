<?php
  session_start();
  session_destroy();
  header("Location: ../home_signup/index.php");

?>
