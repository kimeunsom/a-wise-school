<!DOCTYPE html>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/connect.php');

  $sql='select * from kes_sample';

  $result=mysqli_query($conn,$sql);
?>

<head>
<meta charset="utf-8">
<title>똑똑 목록</title>
<meta name="author" content="Okwoo Kim">
<meta name="keywords" content="">

</head>
<body bgcolor="#FFFFFF" topmargin=0 leftmargin=0 bottommargin=0>


<div class="table_top">
  <h2 class="margin_center">목록</h2>
</div>

<p style="text-align:left;"><a href="DDaddcontents.php">등록</a>
</p>


			<table class="style1 margin_center">
        <tr>
            <th>no</th>
            <th>제목</th>

        </tr>

<?php
if ($result) {
$i = 1;

  while($row = mysqli_fetch_array($result)) {


      $html='<tr><td>'.$row['no'].'</td>';
      $html .= '<td><a href="DDcontents_detail.php?no='.$row['no'].'">'.$row['title'].'</a></td></tr>';
      echo $html;
      $i++;
  }


} else {
  $html = '<tr><td colspan=3>데이터가 없습니다.</td></tr>';
  echo $html;
}


?>

			</tbody>
            </table>
<p class="bottom">　</p>
</body>
</html>
