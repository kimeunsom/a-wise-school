<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/connect.php');

  $no = $_POST['no'];
  $title = $_POST['title'];
  $summary = $_POST['summary'];
  $content = $_POST['content'];

  $sql = "UPDATE kes_sample
          SET title = '$title', summary = '$summary', content = '$content'
          WHERE no = $no;";

  if(mysqli_query($conn,$sql)){
  	header('Location: DDcontents_detail.php?no='.$no);
  }

?>
