<?php include "tpl/header.php";?>

<form method="post" action="./db/article.php"  class="form-horizontal">
    <div class="form-group">
        <label for="category">カテゴリ</label>
        <select class="form-control" id="category" name="category_id">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" class="form-control" name="article_title" id="ttile" placeholder="師匠の気をひけるようなタイトルにしよう！！" required>
    </div>
    <div class="form-group">
        <label for="contains">やりたいこと</label>
        <textarea  class="form-control" rows="3" id="contains" name="contains"></textarea>
    </div>
    <div class="form-group">
        <label for="means">期間目安</label>
        <input type="text" class="form-control" name="means" id="means" placeholder="だいたいこのぐらいの頻度でやるか決めよう！" required>
    </div>
    <button type="submit" class="btn btn-lg btn-primary">投稿する</button>
</form>

<?php include "tpl/footer.php";?>