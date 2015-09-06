<?php include "tpl/header.php";?>

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
    <h1>タイトル：<?php echo $row['article_title']; ?></h1>
    <h2>詳細:</h2>
    <h3>
        <?php echo $row['contains']; ?>
    </h3>
<br>
<br>
    <form action="db/match.php" method="post">
        <textarea name="appeal" class="form-control" rows="3" placeholder="師匠の熱い魂を注いであげてください！"></textarea>
        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
        <br>
        <button type="submit" name="article_id" class="btn btn-lg btn-success" value="<?php echo $row['article_id']; ?>">弟子にしたい！</button>
    </form>
<?php else: ?>
    お探しの記事は見つかりません
<?php endif; ?>

<?php include "tpl/footer.php";?>