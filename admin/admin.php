<?php
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php"
    ?>


    <?php
    include "includes/sidebar.php";
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        message();
        ?>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <h2>Admin details</h2>
                    <br>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <br>
                    <form class="d-flex" method="GET" action="admin.php">
                        <input class="form-control me-2 col" type="search" name="search_admin_email" placeholder="Search for admin (email)" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit" name="search_admin" value="search">Search</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                </thead>

                <tbody>
                    <?php
                    $data = all_admins();
                    delete_user();
                    if (isset($_GET['search_user'])) {
                        $query = search_user();
                        if (isset($query)) {
                            $data = $dat;
                        } else {
                            get_redirect("customers.php");
                        }
                    }
                    $num = sizeof($data);
                    for ($i = 0; $i < $num; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $data[$i]['admin_id'] ?></td>
                            <td><?php echo $data[$i]['admin_fname'] ?></td>
                            <td><?php echo $data[$i]['admin_lname'] ?></td>
                            <td><?php echo $data[$i]['admin_email'] ?></td>
                            <td>
                                <button type="button" class="btn pull-left btn-warning"><a style="text-decoration: none; color:black;" href="admin.php?edit=<?php echo $data[$i]['admin_id'] ?>">Edit</a></button>
                            </td>
                            <td>
                                <button type="button" class="btn pull-left btn-danger"><a style="text-decoration: none; color:black;" href="admin.php?delete=<?php echo $data[$i]['admin_id'] ?>">Delete</a></button>
                            </td>
                        </tr>
                    <?php  }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
        edit_admin($_SESSION['admin_id']);

        if (isset($_GET['edit'])) {
            $_SESSION['admin_id'] = $_GET['edit'];
            $data = get_admin($_SESSION['admin_id']);
        ?>
            <br>
            <h2>Edit Customer Details</h2>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label>First name</label>
                    <input pattern="[A-Za-z_]{1,15}" type="text" class="form-control" placeholder="<?php echo $data[0]['admin_fname'] ?>" name="admin_fname">
                    <div class="form-text">please enter the first name in range(1-30) character/s , special character & numbers not allowed !</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="validationTooltip01">Last name</label>
                    <input pattern="[A-Za-z_]{1,15}" id="validationTooltip01" type="text" class="form-control" placeholder="<?php echo $data[0]['admin_lname'] ?>" name="admin_lname">
                    <div class="form-text">please enter the last name in range(1-30) character/s , special character & numbers not allowed !</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $data[0]['admin_email'] ?>" name="admin_email">
                    <div class="form-text">please enter the email in format : example@gmail.com.</div>
                </div>
                <button type="submit" class="btn btn-primary" value="update" name="admin_update">Submit</button>
                <button type=" submit" class="btn btn-danger" value="cancel" name="admin_cancel">Cancel</button>
                <br> <br>
            </form>

        <?php
        }

        ?>
    </main>
    </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>
</body>