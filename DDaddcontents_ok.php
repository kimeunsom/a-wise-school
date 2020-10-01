<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/connect.php');

  $title = $_POST['title'];
  $summary = $_POST['summary'];
  $content = $_POST['content'];

  $sql = "INSERT INTO kes_sample (title,summary,content)
          VALUES ('$title','$summary','$content');";

  if(mysqli_query($conn,$sql)){
  	header("Location: DDcontents_list.php");
  }

?>
<p>정상적으로 등록되었습니다.</p>
