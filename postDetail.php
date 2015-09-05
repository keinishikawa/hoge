<?php
require_once "./db/db.php";
if(!array_key_exists("id",$_GET)){
    $_GET['id'] = 0;
    $row=null;
}
$article_id = $_GET['id'];
$sql = "SELECT * FROM article WHERE article_id = '$article_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$row = mysql_fetch_assoc($result);
?>

<?php if($row != null): ?>
    <form action="db/match.php" method="post">
        <textarea name="appeal"></textarea>
        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
        <button type="submit" name="article_id" value="<?php echo $row['article_id']; ?>"></button>
    </form>
<?php else: ?>
    お探しの記事は見つかりません
<?php endif; ?>
