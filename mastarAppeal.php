<?php
require_once "./db/db.php";
$match_id = $_GET['match_id'];

$sql = "SELECT * FROM matching WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$row = mysql_fetch_assoc($result);

var_dump($row);
?>


<form action="mastarChose.php" method="post">
    <button type="submit" name="match_id" value="<?php echo $row['match_id']; ?>">師匠になってもらう</button>
</form>
