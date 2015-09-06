<?php include "tpl/header.php"; ?>

    <form method="post" action="./db/regist.php">
        <div class="form-group">
            <label for="id">userID</label>
            <input type="text" class="form-control" name="userId" id="id" placeholder="ID" required>
        </div>
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" name="nickName" id="name" placeholder="名前" required>
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="text" class="form-control" name="password" id="password" placeholder="パスワード" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">メールアドレス</label>
            <input type="email" class="form-control" name="mailAdress" id="exampleInputEmail1" placeholder="メールアドレス" required>
        </div>
        <button type="submit" class="btn btn-lg btn-primary">登録</button>
    </form>

<?php include "tpl/footer.php"; ?>