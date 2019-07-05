<?php
    $userName=$_POST['name'];
    $userNamePhonetic=$_POST['kana'];
    $userMailAddress=$_POST['e-mail'];
    $title=$_POST['title'];
    $content=$_POST['content'];

    echo htmlspecialchars('ふりがな：'.$userNamePhonetic,ENT_QUOTES);
    echo('<br />');
    echo htmlspecialchars('お名前:'.$userName,ENT_QUOTES);
    echo('<br />');
    echo htmlspecialchars('メールアドレス'.$userMailAddress.ENT_QUOTES);
    echo('<br />');
    echo htmlspecialchars('題名'.$title,ENT_QUOTES);
    echo('<br />');
    echo htmlspecialchars('メッセージ本文'.$content.ENT_QUOTES);
    echo('<br />');
    echo('<br />');

    echo('内容に間違いがなければ送信ボタンを押してください');
    echo('<br />');
?>
<form action="Done.php" method="POST">
    <input type="submit" value="送信します">
</form>