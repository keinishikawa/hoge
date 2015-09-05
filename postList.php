<?php
require_once "./db/db.php";
$sql = "SELECT * FROM article";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $row[] = $rowTmp;
}
?>

<?php foreach($row as $key => $value): ?>

<?php endforeach; ?>
