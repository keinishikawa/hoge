<?php include "tpl/header.php"; ?>

<?php
require_once "./db/db.php";
$match_id = $_GET['match_id'];

//メッセージを全取得
$sql = "SELECT * FROM message WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$message = [];
while ($rowTmp = mysql_fetch_assoc($result)) {
    $message[] = $rowTmp;
}

//メッセージ相手を取得
$sql = "SELECT user_id FROM matching WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$user_id = mysql_fetch_assoc($result)['user_id'];

//めっちゃ強引だけど師匠からのアクセスの時は、相手を弟子で上書き
if($user_id === $_SESSION['user'][0]){
    $sql = "SELECT desi_user_id FROM matching WHERE match_id ='$match_id'";
    $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
    $user_id = mysql_fetch_assoc($result)['desi_user_id'];
}





?>
<div id="message">
    <?php foreach($message as $key => $val): ?>
        <?php if($val['send_user_id'] !== $user_id): ?>
            <div class="myMessage">
                <?php echo $val['message']; ?>
            </div>
        <?php else: ?>
            <div class="receiveMessage">
                <p>ID:<?php echo $val['send_user_id'] ?></p>
                <?php echo $val['message']; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<form method="post" action="db/sendMessage.php">
    <textarea class="form-control" rows="3" name="message"></textarea>
    <input type="hidden" name="send_user_id" value="<?php echo $_SESSION['user'][0]; ?>">
    <input type="hidden" name="receive_user_id" value="<?php echo $user_id; ?>">
    <input type="hidden" name="match_id" value="<?php echo $match_id; ?>">
    <button type="submit" class="btn btn-lg btn-primary" style="width: 100%;">送信</button>
</form>
<h1>評価</h1>
<form action="review.php" method="post">
    <input type="hidden" name="user_id"  value="<?php echo $user_id; ?>">
<select class="form-control" name="star">
    <option value="1">★</option>
    <option value="2">★★</option>
    <option value="3">★★★</option>
    <option value="4">★★★★</option>
    <option value="5">★★★★★</option>
</select>
    <textarea rows="3"  class="form-control" name="review"></textarea>
    <button class="btn">終了したので評価する</button>
</form>
<?php include "tpl/footer.php"; ?>