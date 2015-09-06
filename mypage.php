<?php
include "tpl/header.php";

require_once "./db/db.php";
$user_id = $_GET['user_id'];

$sql = "SELECT * FROM user WHERE user_id ='$user_id'";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
$userData = mysql_fetch_assoc($result);

//何件あったか
$sql = "SELECT *, count(*) AS 'count' FROM matching , article WHERE matching.article_id = article.article_id AND desi_user_id ='$user_id' GROUP BY matching.article_id";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $matching[] = $rowTmp;$sisho=false;
}

//師匠になる
if(!isset($matching)){
    //何件あったか
    $sql = "SELECT * FROM matching , article WHERE matching.article_id = article.article_id AND matching.user_id ='$user_id' GROUP BY matching.article_id";
    $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
    while ($rowTmp = mysql_fetch_assoc($result)) {
        $matching[] = $rowTmp;
    }
    //すでに師匠が決まってる
    $sql = "SELECT article_id FROM matching WHERE user_id ='$user_id' AND chose_flag = 1 GROUP BY article_id";
    $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
    while ($rowTmp = mysql_fetch_assoc($result)) {
        $chose[] = $rowTmp['article_id'];
    }
    $sisho = true;
}

//すでに師匠が決まってる
$sql = "SELECT article_id FROM matching WHERE desi_user_id ='$user_id' AND chose_flag = 1 GROUP BY article_id";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $chose[] = $rowTmp['article_id'];
}
?>

<h1>プロフィール</h1>
<br>
<h2>ニックネーム：<?php echo $userData['user_name']; ?></h2>
<br>
<h2>教え子：２人 平均評価：５</h2>
<br>
<h3>自己PR:</h3>
<h3>
    <?php if($userData['pr'] == ""): ?>
        まだ自己PRがありません！<br>
        注目してもらうためにも書きましょう！
    <?php else: ?>
        <?php echo $userData['pr']; ?>
    <?php endif ?>
</h3>
<?php if($userData['user_id'] == $_SESSION['user'][0]): ?>
    <br>
    <h1>師弟関係</h1>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <td>立場</td>
            <td>記事タイトル</td>
            <td>状況</td>
        </tr>
    </thead>
<?php foreach($matching as $key => $val): ?>
    <tr>
        <?php if($sisho): ?>
        <td>師匠します</td>
        <td><?php echo $val['article_title']; ?></td>
            <?php if(in_array($val['article_id'], $chose)): ?>
                <td><a href="message.php?match_id=<?php echo $val['match_id']; ?>">メッセージ</a></td>
            <?php else: ?>
                <td>まだ反応がないよ</td>
            <?php endif; ?>
        <?php else: ?>
            <td>弟子します</td>
            <td><?php echo $val['article_title']; ?></td>
            <?php if(in_array($val['article_id'], $chose)): ?>
                <td><a href="message.php?match_id=<?php echo $val['match_id']; ?>">メッセージ</a></td>
            <?php else: ?>
                <td><a href="./mastarList.php?article_id=<?php echo $val['article_id']; ?>"><?php echo $val['count']; ?>件の反応があります</a></td>
            <?php endif; ?>
        <?php endif; ?>
    </tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

<?php include "tpl/footer.php"; ?>