<?php
require_once "./db/db.php";
$userId = $_POST['user_id'];
$star = $_POST['star'];
$comment = $_POST['review'];

$sql = "INSERT INTO help VALUES('','$userId','$star','$comment')";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
?>

<?php include "./tpl/header.php"; ?>
    <h1>おつかれさまでした！</h1>
    <h2>エンジニアとして成長できましたね！</h2>
<?php include "./tpl/footer.php"; ?>
