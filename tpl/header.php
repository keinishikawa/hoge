<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Teratail Student</title>
    <link rel="stylesheet" href="https//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/common.css">
</head>
<body>

<?php session_start(); ?>
    <div id="header">
        <a href="./" style="text-decoration: none;"><h1>Tera Tail Student</h1></a>
        <div id="userData">
            <?php if(!array_key_exists("user",$_SESSION)):?>
                <form method="post" action="./db/login.php">
                     <input type="text" name="userId" placeholder="ID" style="height:30px">
                     <input type="password" name="password" placeholder="password" style="height:30px">
                     <button type="submit" style="height:30px">Login</button>

                 </form>
            <?php else: ?>
                ようこそ<a href="mypage.php?user_id=<?php echo $_SESSION['user'][0] ?>"><?php echo $_SESSION['user'][1] ?>さん</a>
            <?php endif; ?>
        </div>
    </div>
<div id="container">