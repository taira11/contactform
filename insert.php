<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$sql = "INSERT INTO contactform (name, mail, age, comments) VALUES (?,?,?,?)";
$stmt = $pdo-> prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);

 $stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせホームを作る</title>
    <link rel="stylesheet" href="./style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <div class="confirm">
        <p>お問い合わせありがとうございます。<br>3日営業以内に連絡差し上げます。</p>
    </div>
    
</body>
</html>