<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>똑똑해집시다</title>
<meta name="author" content="Okwoo Kim">
<meta name="keywords" content="">
</head>


<body bgcolor="#FFFFFF" topmargin=0 leftmargin=0 bottommargin=0>

<!-- 본문 -->

		<h2>뉴스 등록하기</h2>

	<form name="joinForm" method="post" action="DDaddcontents_ok.php" >
	<table>

		<tbody>
			<tr>
				<th style="vertical-align:top;">기사 제목
				</th>
				<td>
					<input type="text" name="title" style="ime-mode:active;width:300px" maxlength="30" placeholder="제목"/>
				</td>
			</tr>
			<tr>
				<th style="vertical-align:top;">한 줄 요약
				</th>
				<td>
					<textarea name="summary" rows="1" cols="60" placeholder="기사 내용을 한 줄로 요약해주세요."></textarea>
				</td>
			</tr>
			<tr>
				<th style="vertical-align:top;">내용
				</th>
				<td>
          <textarea name="content" rows="6" cols="70" placeholder="기사 내용을 입력해주세요."></textarea>
				</td>
			</tr>
		</tbody>

	</table>

		<button type="submit" class="cssbtn big on"><span>등록</span></button>

	</form>

</body>
</html>
