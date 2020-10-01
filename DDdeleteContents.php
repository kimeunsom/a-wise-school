<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/connect.php');

  $no = $_GET['no'];

  $sql = "DELETE from kes_sample
          WHERE no = $no;";

  if(mysqli_query($conn,$sql)){
  	header('Location: DDcontents_list.php');
  }

?>
