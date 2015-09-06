<?php
require_once "./db/db.php";
$match_id = $_POST['match_id'];
$sql = "UPDATE matching SET chose_flag = 1 WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);

?>
<?php include "tpl/header.php"; ?>
    <h1>マッチングおめでとう！！</h1>
    <h2><a href="message.php?match_id=<?php echo $match_id; ?>">ここ</a>から師匠とつながろう！！</h2>
<?php include "tpl/footer.php"; ?>

