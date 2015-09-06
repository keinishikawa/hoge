<?php
/**
 * 弟子にするとこ
 */

require_once "db.php";
session_start();
$userId     = $_SESSION['user'][0];
$desiUserId = $_POST['user_id'];
$articleId  = $_POST['article_id'];
$appeal     = $_POST['appeal'];

//弟子にする
$sql = "INSERT INTO matching (article_id, user_id, desi_user_id, appeal) VALUES('$articleId','$userId','$desiUserId','$appeal')";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);

var_dump($sql);
var_dump($result);

// MySQLへの接続を閉じる
mysql_close($link) or die("MySQL切断に失敗しました。");