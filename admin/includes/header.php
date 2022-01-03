<?php
include "includes/functions.php"
?>
<header class="navbar navbar-dark  sticky-top bg-dark flex-md-nowrap  shadow ">
    <a href="index.php"> <img src="../images/PharmEasy.png" style="height: 40px; display: inline; padding-bottom: 5px; width:150px;"></a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <?php
            if (isset(
                $_SESSION['admin_id']
            )) {
            ?>
                <a class="nav-link px-3" href="logout.php">Sign out</a>
            <?php
            } else {
            ?>
                <a class="nav-link px-3" href="login.php">Log in</a>

            <?php
            }
            ?>

        </div>

    </div>

</header>