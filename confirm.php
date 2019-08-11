<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirm</title>
</head>
<body>
    <style>
        .err{
            color:red;
        }
    </style>
    <?php
    $userName=$_POST['name'];
    $userNamePhonetic=$_POST['kana'];
    $userMailAddress=$_POST['e-mail'];
    $title=$_POST['title'];
    $content=$_POST['content'];

    if(empty($userName)){
        print('<span class="err">お名前を入力してください</span>');
    }else{
        echo htmlspecialchars('ふりがな：'.$userNamePhonetic,ENT_QUOTES);
    }
    echo('<br />');
    if(empty($userNamePhonetic)){
        print('<span class="err">ふりがなを入力してください</span>');
    }else{
        echo htmlspecialchars('お名前:'.$userName,ENT_QUOTES);
    }
    echo('<br />');
    if(empty($userMailAddress)){
        print('<span class="err">メールアドレスを入力してください</span>');
    }else{
        echo htmlspecialchars('メールアドレス'.$userMailAddress.ENT_QUOTES);
    }
    echo('<br />');
    if(empty($title)){
        print('<span class="err">メッセージを入力してください</span>');
    }else{
        echo htmlspecialchars('題名'.$title,ENT_QUOTES);
    }
    echo('<br />');
    if(empty($content)){
        print('<span class="err">を入力してください</span>');
    }else{
        echo htmlspecialchars('メッセージ本文'.$content.ENT_QUOTES);
    }
    echo('<br />');
?>
<form action="Done.php" method="POST">
    <input type="submit" value="送信します">
</form>
</body>
</html>
