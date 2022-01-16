<html>
<head>
	<meta charset="utf-8">
	<title>サンプルフォーム</title>
</head>

<body>
	≪情報登録≫
	<form action="write.php" method="post">
		お名前: <input type="text" name="name">
		<br>
		EMAIL: <input type="text" name="mail">
		<br>
		電話番号： <input type="text" name="phone">
		<br>
		年齢：<select name="age">
					<option value="19歳以下">19歳以下</option>
                    <option value="20-29歳">20-29歳</option>
                    <option value="30-39歳">30-39歳</option>
                    <option value="40-49歳">40-49歳</option>
                    <option value="50-59歳">50-59歳</option>
                    <option value="60歳以上">60歳以上</option>
                </select>
		<input type="submit" value="送信">
	</form>

</body>
</html>