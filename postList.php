<?php
require_once "./db/db.php";
$sql = "SELECT * FROM article";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $row[] = $rowTmp;
}
?>

<?php foreach($row as $key => $val): ?>
    <a href="postDetail.php?id=<?php echo $val['article_id']; ?>"><?php echo $val['article_title']; ?></a>
<?php endforeach; ?>
