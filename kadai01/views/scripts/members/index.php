<head>
	<title>kadai01</title>
	<link rel="stylesheet" type="text/css" href="../../../css/common.css">
</head>
<body>
	<div id="viewName">
		<h2>社員管理</h2>
	</div>
	<form action="indexController.php" method="post">
		<table id="memberInfo">
			<tr>
				<th><label for="memberId">社員番号</label></th>
				<td><input id="memberId" type="text" name="memberId" size="5" maxlength="6" value="" /></td>
			</tr>
		</table>
		<input type="submit" value="検索" />
	</form>

	<a href="registMember.php">新規登録</a>
</body>