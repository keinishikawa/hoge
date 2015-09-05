<?php
require_once "./db/db.php";
$match_id = $_GET['match_id'];

$sql = "SELECT * FROM matching WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$row = mysql_fetch_assoc($result);

var_dump($row);