<head>
	<title>kadai01</title>
	<link rel="stylesheet" type="text/css" href="../../../css/common.css">
</head>
<body>
	<div id="viewName">
		<h2>検索結果</h2>
	</div>
	<form action="detailMemberController.php" method="post">
		<table id="memberInfo">
			<tr>
				<th><label for="memberId">社員番号</label></th>
				<td>※indexControllerから受け取った社員番号</td>
				<input type="hidden" name="memberId" value="" />
			</tr>
			<tr>
				<th><label for="name">氏　　　名</label></th>
				<td>※indexControllerから受け取った氏名</td>
				<input type="hidden" name="name" value="" />
			</tr>
			<tr>
				<th><label for="age">年　　　齢</label></th>
				<td>※indexControllerから受け取った年齢</td>
				<input type="hidden" name="age" value="" />
			</tr>
			<tr>
				<th>性　　　別</th>
				<td>※indexControllerから受け取った性別</td>
				<input type="hidden" name="sex" value="" />
			</tr>
			<tr>
				<th><label for="phoneNum">電話番号</label></th>
				<td>※indexControllerから受け取った電話番号</td>
				<input type="hidden" name="phoneNum" value="" />
			</tr>
		</table>
		<input type="submit" value="編集" />
	</form>

	<a href="index.php">戻る</a>
</body>