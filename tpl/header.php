<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Teratail Student</title>
    <link rel="stylesheet" href="./css/common.css">
</head>
<body>

<?php session_start(); ?>
    <div id="header">
        <h1>Tera Tail Student</h1>
        <div id="userData">
            <?php if(!array_key_exists("user",$_SESSION)):?>
                <form method="post" action="./db/login.php">
                     <input type="text" name="userId">
                     <input type="password" name="password">
                     <button type="submit">Login</button>
                 </form>
            <?php else: ?>
                <?php echo $_SESSION['user'][1] ?>さん
            <?php endif; ?>
        </div>
    </div>
<div id="container">