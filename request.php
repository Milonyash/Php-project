<?php
  session_start();
$_SESSION["course"]=$_POST["course"];
$_SESSION["group"]=$_POST["group"];
$_SESSION["group_part"]=$_POST["group_part"];
$_SESSION["subj"]= $_POST["subj"];
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
?>