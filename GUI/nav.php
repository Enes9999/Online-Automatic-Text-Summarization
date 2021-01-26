<?php
require_once "../UserData/UserDetails/Account.php";
?>


<div class="topnav" id="myTopnav">

    <!--composition pattern - design paterni-->

    <?php if (Auth::isLoggedIn()) : ?>
        <a href="logout.php" class="active"> Log Out </a>
        <a href="profile.php" class="active"> Profile </a>
    <?php else : ?>
        <a href="login.php" class="active"> Log In </a>
    <?php endif; ?>
    <!--composition pattern - design paterni-->


    <a href="index.php"> <img src="images/pencil.png" width="60" height="60" style="border-radius: 50%; margin: 9px; margin-left: 20px;"></a>
</div>