<?php include "tpl/header.php";?>

<?php
require_once "./db/db.php";
$sql = "SELECT * FROM article ORDER BY article_id DESC";
$result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
while ($rowTmp = mysql_fetch_assoc($result)) {
    $row[] = $rowTmp;
}
?>
    <div class="top-wrapper">
        <div class="container">

            <p>
                <input type="text" name="keyword" size="40" maxlength="20" placeholder="キーワード">
                <input type="submit" value="検索する">
            </p>
            　　　　<input type="checkbox" name="dev" value="1">開発系
            <input type="checkbox" name="game" value="2">ゲーム
            <input type="checkbox" name="web" value="3">ウェブ系
            <input type="checkbox" name="apl" value="4">アプリ系
        </div>
    </div>
<br>
<br>
<br>
<br>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <td>タイトル</td>
            <td>カテゴリ</td>
            <td>投稿者名</td>
            <td>投稿日時</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $key => $val): ?>
            <tr>
                <td width="30%"><a href="postDetail.php?id=<?php echo $val['article_id']; ?>"><?php echo $val['article_title']; ?></a></td>
                <td width="20%">web系</td>
                <td width="20%"><?php echo $val['user_id']; ?></td>
                <td width="30%"><?php echo $val['date']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "tpl/footer.php";?>