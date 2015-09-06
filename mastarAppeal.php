<?php include "tpl/header.php"; ?>

<?php
require_once "./db/db.php";
$match_id = $_GET['match_id'];

$sql = "SELECT * FROM matching WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$row = mysql_fetch_assoc($result);

?>

<h1>師匠アピール</h1>
<h2><?php echo $row['appeal']; ?></h2>

<form action="mastarChose.php" method="post">
    <button type="submit" name="match_id" class="btn btn-lg btn-primary" value="<?php echo $row['match_id']; ?>">師匠になってもらう</button>
</form>

<?php include "tpl/footer.php"; ?>