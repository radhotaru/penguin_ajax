<?php
    session_start();

    // Ajaxリクエストかどうかを確認
    $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    // もしセッションにユーザー名がなく、かつAjaxリクエストでない場合は直リンクとみなしてindex.phpにリダイレクト
    if (!isset($_SESSION["username"]) && !$isAjax) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css"/>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h2>コウテイペンギン</h2>
    <img src="./img/penguin01.jpg" alt="">
    <p>コウテイペンギンは南極大陸にのみ生息するペンギンで、体長100～130㎝、体重20～45kgになる現存するペンギンの中で世界最大のペンギンです。<br>
        雛鳥はよくアニメなどのキャラクターに使用されることが多く、人気が高いので比較的に日本ではなじみ深い印象ですが、日本では愛知県の名古屋港水族館と和歌山県の南紀白浜アドベンチャーワールドの2か所でしか飼育されておらず、繁殖に成功しているのはアドベンチャーワールドのみです。
        繁殖期は冬で海から離れた内陸部で集団で繁殖します。また、泳ぎに関しては鳥類の中では最も潜水能力が高く、水深500m以上の深海にも潜ることができます。
        餌はオキアミや小魚などを主食とし、天敵はシャチやヒョウアザラシ、オオフルマカモメなどがいます。</p>
</body>
</html>