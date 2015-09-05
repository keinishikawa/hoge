<?php
/**
 * 弟子にするとこ
 */

require_once "db.php";

$userId    = $_POST['userId'];
$articleId = $_POST['articleId'];
$appeal    = $_POST['appeal'];
$price     = $_POST['price'];
$date      = $_POST['date'];

//弟子にする
$sql = "INSERT INTO help VALUES("+ $userId +","+ $articleId +","+ $appeal +","+ $price +","+ $date +")";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);

// MySQLへの接続を閉じる
mysql_close($link) or die("MySQL切断に失敗しました。");