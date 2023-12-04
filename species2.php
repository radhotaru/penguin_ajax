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
    <h2>オウサマペンギン</h2>
    <img src="./img/penguin02.jpg" alt="">
    <p>オウサマペンギンは南極大陸より少し暖かい地域(南大西洋・インド洋)に生息するペンギンで、南極大陸には生息していません。<br>
        体長85～95㎝、体重10～16kgとコウテイペンギンに次ぐ大きさで、見た目もコウテイペンギンに似ていますが、側頭部の模様がコウテイペンギンは黄色くお中にかけて繋がっていますが、キングペンギンはオレンジ色でお腹と繋がっていないのが特徴です。
        しかし、雛鳥の見た目は大きく異なり、コウテイペンギンの雛が白と黒、灰色の三色になっているのに対し、キングペンギンの雛は全身茶色の羽毛に覆われています。
        また、ペンギンの中では最も子育ての期間が長く、1年以上かけて雛鳥を育てます。
        餌は小魚を主食とし、イカや甲殻類も食べる。天敵はコウテイペンギンと同じく、シャチやヒョウアザラシ、オオフルマカモメなどです。</p>
</body>
</html>