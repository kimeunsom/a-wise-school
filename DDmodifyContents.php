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
<title>수정</title>
<meta name="author" content="Okwoo Kim">
<meta name="keywords" content="">
</head>


<body bgcolor="#FFFFFF" topmargin=0 leftmargin=0 bottommargin=0>

<!-- 본문 -->

		<h2>똑똑 수정</h2>

	<form name="joinForm" method="post" action="DDmodifyContents_ok.php" >
		<input type="hidden" name="no" value="<?=$no?>"/>
	<table >

    <tbody>
			<tr>
				<th style="vertical-align:top;">기사 제목
				</th>
				<td>
					<input type="text" name="title" style="ime-mode:active;width:300px" maxlength="30" value="<?=$title?>"/>
				</td>
			</tr>
			<tr>
				<th style="vertical-align:top;">한 줄 요약
				</th>
				<td>
					<textarea name="summary" rows="1" cols="60" ><?=$summary?></textarea>
				</td>
			</tr>
			<tr>
				<th style="vertical-align:top;">내용
				</th>
				<td>
          <textarea name="content" rows="6" cols="70"><?=$content?></textarea>
				</td>
			</tr>
		</tbody>

	</table>
	<div>
		<p style="color:#333;margin-top:10px;">※ 아래 확인버튼을 누르시면 정보가 저장됩니다.</p>
	</div>

		<button type="submit" class="cssbtn big on"><span>확인</span></button>

	</form>



</body>
</html>
