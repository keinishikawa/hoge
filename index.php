<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teratail Student</title>
    <link rel="stylesheet" href="https//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="hoge.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="hoge.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="header" style="height: 100%;">
    <div id="head">
        <h1 id="about">
            <!-- <div id="test" class="animated rubberBand infinite test-animation">Teratail Student</div> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="title">Teratail Student</div>
                    </div>

                    <div class="col-md-3">
                        <?php if(!array_key_exists("user",$_SESSION)):?>
                            <form method="post" action="./db/login.php">
                                ID:<input type="text" name="userId">
                                PW:<input type="password" name="password">
                                <button type="submit">Login</button>
                            </form>
                        <?php else: ?>
                            <br>
                            ようこそ<a href="mypage.php?user_id=<?php echo $_SESSION['user'][0] ?>"><?php echo $_SESSION['user'][1] ?>さん</a>
                        <?php endif; ?>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="tagline">Teratail Studentはプログラミング初心者の「こういうものを作りたい！」という気持ちを形にするためのサイトです。教えてくれる師匠を探してみましょう！</p>
                </div>
            </div>
        </h1>

        <div class="row">
            <div class="text-center">
                <a href="./post.php" class="btn btn-success">Help Me!!</a>
                <a href="./postList.php" class="btn btn-success">弟子を探す</a>
            </div>
        </div>
    </div>
</header>
</body>
</html>
