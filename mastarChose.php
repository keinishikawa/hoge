<?php
require_once "./db/db.php";
$match_id = $_POST['match_id'];
$sql = "UPDATE matching SET chose_flag = 1 WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
var_dump($result);