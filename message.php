<?php
require_once "./db/db.php";
session_start();
$match_id = $_GET['match_id'];

//メッセージを全取得
$sql = "SELECT * FROM message WHERE match_id ='$match_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
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
    $user_id = mysql_fetch_assoc($result)['user_id'];
}

?>

<form method="post" action="db/sendMessage.php">
    <textarea name="message"></textarea>
    <input type="hidden" name="send_user_id" value="<?php echo $_SESSION['user'][0]; ?>">
    <input type="hidden" name="receive_user_id" value="<?php echo $user_id; ?>">
    <input type="hidden" name="match_id" value="<?php echo $match_id; ?>">
    <button type="submit">送信</button>
</form>
