<?php
require_once "db.php";
$match_id        = $_POST['match_id'];
$send_user_id    = $_POST['send_user_id'];
$receive_user_id = $_POST['receive_user_id'];
$message         = $_POST['message'];

$sql = "INSERT INTO message VALUES('','$match_id','$send_user_id','$receive_user_id', '$message')";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);