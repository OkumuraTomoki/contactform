<?php
mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!document HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type=text/css href="style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <div class="confirm">
        <p>
            お問合せ有難うございました。<br>3営業日以内に担当者より五連らぅ差し上げます。
        </p>
    </div>
</body>
</html>