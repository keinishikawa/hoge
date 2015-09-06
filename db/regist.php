<?php
/**
 * 登録する所
 */

require_once "db.php";

$userId     = $_POST['userId'];
$nickName   = $_POST['nickName'];
$password   = $_POST['password'];
$mailAdress = $_POST['mailAdress'];

var_dump($_POST);

if($userId && $nickName && $password && $mailAdress){
    //会員登録
    $sql = "INSERT INTO user VALUES('$userId', '$password', '$nickName', '$mailAdress', '','','','')";
    $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
}else{
    var_dump("入寮");
}

$sql = "SELECT * FROM user WHERE user_id = '$userId' AND password = '$password'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$row = mysql_fetch_row($result);
if($row !== false){
    session_start();
    $_SESSION['user'] = $row;
    // MySQLへの接続を閉じる
    mysql_close($link) or die("MySQL切断に失敗しました。");

    $url = '../index.php';
    header("Location: {$url}");
}else{
}

?>
