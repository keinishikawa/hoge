<?php
/**
 * 記事投稿するとこ
 */

require_once "db.php";
session_start();
$user_id              = $_SESSION['user'][0];
$article_title        = $_POST['article_title'];
$category_id          = $_POST['category_id'];
$contains             = $_POST['contains'];
$means                = $_POST['means'];

//記事を投稿する
$sql = "INSERT INTO article
          (user_id, article_title, category_id, contains, means)
          VALUES('$user_id', '$article_title', '$category_id', '$contains', '$means')";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);

// MySQLへの接続を閉じる
mysql_close($link) or die("MySQL切断に失敗しました。");