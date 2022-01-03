<?php
session_start();
include "includes/functions.php";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
        <a href="index.php"> <img src="images/PharmEasy.png" id="image"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="color: white; " aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php" style="color: white; font-size:bold;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white; font-size:bold;">Cart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle " style="color: white; font-size:bold;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: white; font-size:bold;">
                        <li><a class="dropdown-item " href="#">HealthCare</a></li>
                        <li><a class="dropdown-item" href="#">Lab Test</a></li>
                        <li><a class="dropdown-item" href="#"> Products</a></li>
                    </ul>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['user_id'])) {
                echo "<a class='nav-link' href='login.php' style='color: white; font-size:bold;'> Sign In</a>'";
            }
            $data = search();
            ?>


            <form class="d-flex" action="search.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" name="search_text">
                <button class="btn btn-outline-light" type="submit" value="go" name="search"><i class="fas fa-search"></i></button>
            </form>

        </div>
    </div>
</nav>