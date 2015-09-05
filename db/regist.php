<?php
/**
 * 登録する所
 */

require_once "db.php";

$userId     = $_POST['userId'];
$nickName   = $_POST['nickName'];
$password   = $_POST['password'];
$mailAdress = $_POST['mailAdress'];

if($userId && $nickName && $password && $mailAdress){
    //会員登録
    $sql = "INSERT INTO user VALUES('$userId', '$nickName', '$password', '$mailAdress')";
    $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
}else{
    var_dump("入寮");
}

// MySQLへの接続を閉じる
mysql_close($link) or die("MySQL切断に失敗しました。");