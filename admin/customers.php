<?php
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php"
    ?>
    <div class=" container-fluid">
        <div class="row">
            <?php
            include "includes/sidebar.php"
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>Customer details</h2>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $data = all_users();
                            ob_start();
                            delete_user();
                            $num = sizeof($data);
                            for ($i = 0; $i < $num; $i++) {
                            ?>
                                <tr>
                                    <td><?php echo $data[$i]['user_id'] ?></td>
                                    <td><?php echo $data[$i]['user_fname'] ?></td>
                                    <td><?php echo $data[$i]['user_lname'] ?></td>
                                    <td><?php echo $data[$i]['email'] ?></td>
                                    <td><?php echo $data[$i]['user_address'] ?></td>
                                    <td>
                                        <button type="button" class="btn pull-left btn-warning"><a style="text-decoration: none; color:black;" href="customers.php?edit=<?php echo $data[$i]['user_id'] ?>">Edit</a></button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn pull-left btn-danger"><a style="text-decoration: none; color:black;" href="customers.php?delete=<?php echo $data[$i]['user_id'] ?>">Delete</a></button>
                                    </td>
                                </tr>
                            <?php  }
                            ob_end_flush();
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>