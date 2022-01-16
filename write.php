<?php
// フォームから送られてきたデータを取得し変数に代入
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$age = $_POST['age'];



//日付を取得
$time = date('Y-m-d H:i:s');

// //データを変数にまとめる
// $str =  $time . '<br>' . $name . '<br>' . $mail . '<br>' . $phone . '<br>' .  $age;
$str =  '<tr>' . 
        '<td>' . $time . '</td>' . 
        '<td>' . $name . '</td>' .
        '<td>' . $mail . '</td>' . 
        '<td>' . $phone . '</td>' .
        '<td>' . $age . '</td>' .
        '</tr>';


// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $str . "\n");
fclose($file);

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<table border="1">
    <tr>
        <th>送信日時</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>電話番号</th>
        <th>年齢</th>
    </tr>
    <?php
    $file=fopen('data/data.txt','r');
    while ($data = fgets($file)) {
        echo $data;
    };
    ?>
</table>
<ul>
    <li><a href="input.php">登録画面へ</a></li>
</ul>



</body>
</html>