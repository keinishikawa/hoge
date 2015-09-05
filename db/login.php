<?php
session_start();
require_once "db.php";

if($_POST['userId'] && $_POST['password']){
    $userId    = $_POST['userId'];
    $password = $_POST['password'];

    //ログイン処理
    $sql = "SELECT * FROM user WHERE user_id = '$userId' AND password = '$password'";
    $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
    $row = mysql_fetch_row($result);
    if($row != null){
        $_SESSION['user'] = $row;
    }else{
        $_SESSION['user'] = "ユーザー名またはパスワードが間違っています";
        $url = '../index.php';
        header("Location: {$url}");
    }
}else{
    $_SESSION['user'] = "ユーザー名またはパスワードが間違っています";
    $url = '../index.php';
    header("Location: {$url}");
}

