<?php
require_once "./db/db.php";
session_start();
$user_id = $_SESSION['user'][0];
$article_id = $_GET['article_id'];

$sql = "SELECT * FROM matching WHERE desi_user_id ='$user_id' AND article_id = '$article_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $mastars[] = $rowTmp;
}
?>
<?php foreach($mastars as $key => $val): ?>
    <a href="./mastarAppeal.php?match_id=<?php echo $val['match_id'] ?>">aaa</a>
<?php endforeach; ?>