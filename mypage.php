<?php
require_once "./db/db.php";
session_start();
$user_id = $_SESSION['user'][0];

$sql = "SELECT * FROM user WHERE user_id ='$user_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $userData[] = $rowTmp;
}

$sql = "SELECT *, count(*) AS 'count' FROM matching WHERE desi_user_id ='$user_id' GROUP BY article_id";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $matching[] = $rowTmp;
}
?>

<?php foreach($matching as $key => $val): ?>
    <a href="./mastarList.php?article_id=<?php echo $val['article_id']; ?>">aaaaa</a>(<?php echo $val['count']; ?>)
<?php endforeach; ?>