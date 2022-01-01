<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
        <img src="images/PharmEasy.png" id="image">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="color: white; " aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color: white; font-size:bold;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white; font-size:bold;">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: white; font-size:bold;">
                        <li><a class="dropdown-item " href="#">HealthCare</a></li>
                        <li><a class="dropdown-item" href="#">Lab Test</a></li>
                        <li><a class="dropdown-item" href="#"> Products</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color: white;">Disabled</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['user_id'])) {
                echo "<a class='nav-link' href='login.php' style='color: white; font-size:bold;'> Sign In</a>'";
            }

            ?>


            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
            </form>

        </div>
    </div>
</nav>