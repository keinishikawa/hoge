<?php include "tpl/header.php"; ?>

<?php
require_once "./db/db.php";
$user_id = $_SESSION['user'][0];
$article_id = $_GET['article_id'];

$sql = "SELECT * FROM matching WHERE desi_user_id ='$user_id' AND article_id = '$article_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $mastars[] = $rowTmp;
}

var_dump($mastars);
?>
<h1>師匠希望者一覧</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <td>師匠申請</td>
            <td>評価</td>
        </tr>
    </thead>
<?php foreach($mastars as $key => $val): ?>
    <?php var_dump($val); ?>
    <?php var_dump($val['user_id']); ?>
    <tr>
        <td><a href="./mastarAppeal.php?match_id=<?php echo $val['match_id']; ?>"><?php echo $val['user_id']; ?></a></td>
        <td></td>
    </tr>
<?php endforeach; ?>
</table>
<?php include "tpl/footer.php"; ?>
