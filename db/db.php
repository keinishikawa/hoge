<?php
$url = "localhost:8888";
$user = "root";
$pass = "";
$db = "hoge";
// MySQLへ接続する
$link = mysql_connect($url,$user,$pass) or die("MySQLへの接続に失敗しました。");
//文字コード
mysql_query("SET NAMES utf8",$link);
// データベースを選択する
$sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");

