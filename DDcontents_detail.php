<!DOCTYPE html>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/connect.php');

  $no = $_GET['no'];

  $sql='select * from kes_sample where no ='.$no;

  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  $no = $row['no'];
  $title = $row['title'];
  $summary = $row['summary'];
  $content = $row['content'];
?>

<head>
<meta charset="utf-8">
<title>세부정보</title>
<meta name="author" content="Okwoo Kim">
<meta name="keywords" content="">

</head>
<body bgcolor="#FFFFFF" topmargin=0 leftmargin=0 bottommargin=0>


<div class="table_top">
  <h2 class="margin_center">세부정보</h2>
</div>



			<table class="style1 margin_center">
        <tr>
            <th>제목</th>
            <td><?=$title?></td>
        </tr>
        <tr>
            <th>요약</th>
            <td><?=$summary?></td>
        </tr>
        <tr>
            <th>내용</th>
            <td><?=$content?></td>
        </tr>

      </table>
<p class="bottom"><a href="DDmodifyContents.php?no=<?=$no?>">수정</a> <a href="DDdeleteContents.php?no=<?=$no?>">삭제</a>
  <a href="DDcontents_list.php">목록</a> </p>
</body>
</html>
