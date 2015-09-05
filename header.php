<?php session_start(); ?>
<div id="header">
    <form method="post" action="./db/login.php">
        <input type="text" name="userId">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
    <?php
    var_dump($_SESSION);
    ?>
</div>