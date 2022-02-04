<?php
$connection = mysqli_connect("localhost", "root", "", "PharmEasy");
// $connection = mysqli_connect("localhost", "id18232906_pharmeasy_1", "EsIXy?]3b4EdY8H(", "id18232906_pharmeasy");

function query($query)
{
    global $connection;
    $run = mysqli_query($connection, $query);
    if ($run) {
        while ($row = $run->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    } else {
        return 0;
    }
}
function single_query($query)
{
    global $connection;
    $run = mysqli_query($connection, $query);
    if ($run) {
        return 1;
    } else {
        return 0;
    }
}
function post_redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
function get_redirect($url)
{
    echo " <script> 
    window.location.href = '$url'; 
    </script>";
}

function login()
{
    if (isset($_POST['login'])) {

        $adminEmail = $_POST['adminEmail'];
        $password = $_POST['adminPassword'];
        $query = "SELECT  admin_email , admin_id , admin_password FROM admin WHERE admin_email= '$adminEmail' ";
        $data = query($query);
        if ($data == 0) {
            $_SESSION['message'] = "loginErr";
            post_redirect("login.php");
        } elseif ($password == $data[0]['admin_password'] and  $adminEmail == $data[0]['admin_email']) {
            $_SESSION['admin_id'] = $data[0]['admin_id'];
            post_redirect("index.php");
        } else {
            $_SESSION['message'] = "loginErr";
            post_redirect("login.php");
        }
    }
}
function message()
{
    if ($_SESSION['message'] == "loginErr") {
        echo "   <div class='alert alert-danger' role='alert'>
        The email or the password is incorrect !!!
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "emailErr") {
        echo "   <div class='alert alert-danger' role='alert'>
        The email address is already taken.  Please choose another
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "noResult") {
        echo "   <div class='alert alert-danger' role='alert'>
        There is no user with this email address .
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "itemErr") {
        echo "   <div class='alert alert-danger' role='alert'>
        There is a product with the same name .
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "noResultOrder") {
        echo "   <div class='alert alert-danger' role='alert'>
        There is no order with this ID !!!
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "noResultItem") {
        echo "   <div class='alert alert-danger' role='alert'>
        There is no product with this name !!!
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "noResultAdmin") {
        echo "   <div class='alert alert-danger' role='alert'>
        There is no admin with this email !!!
      </div>";
        unset($_SESSION['message']);
    }
}
function all_users()
{
    $query = "SELECT user_id ,user_fname ,user_lname ,email ,user_address FROM user";
    $data = query($query);
    return $data;
}
function delete_user()
{
    if (isset($_GET['delete'])) {
        $userId = $_GET['delete'];
        $query = "DELETE FROM user WHERE user_id ='$userId'";
        $run = single_query($query);
        get_redirect("customers.php");
    }
}
function edit_user($id)
{
    if (isset($_POST['update'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $check = check_email_user($email);
        if ($check == 0) {
            $query = "UPDATE user SET email='$email' ,user_fname='$fname' ,user_lname='$lname' ,user_address='$address' WHERE user_id= '$id'";
            single_query($query);
            get_redirect("customers.php");
        } else {
            $_SESSION['message'] = "emailErr";
            get_redirect("customers.php");
        }
    } elseif (isset($_POST['cancel'])) {
        get_redirect("customers.php");
    }
}
function get_user($id)
{
    $query = "SELECT user_id ,user_fname ,user_lname ,email ,user_address FROM user WHERE user_id=$id";
    $data = query($query);
    return $data;
}
function check_email_user($email)
{
    $query = "SELECT email FROM user WHERE email='$email'";
    $data = query($query);
    if ($data) {
        return 1;
    } else {
        return 0;
    }
}
function search_user()
{
    if (isset($_GET['search_user'])) {
        $email = $_GET['search_user_email'];
        if (empty($email)) {
            return;
        }
        $query = "SELECT user_id ,user_fname ,user_lname ,email ,user_address FROM user WHERE email='$email'";
        $data = query($query);
        if ($data) {
            return $data;
        } else {
            $_SESSION['message'] = "noResult";
            return;
        }
    }
}
function all_items()
{
    $query = "SELECT * FROM item";
    $data = query($query);
    return $data;
}
function delete_item()
{
    if (isset($_GET['delete'])) {
        $itemID = $_GET['delete'];
        $query = "DELETE FROM item WHERE item_id ='$itemID'";
        $run = single_query($query);
        get_redirect("products.php");
    }
}
function edit_item($id)
{
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $cat = $_POST['cat'];
        $description = $_POST['description'];
        $tags = $_POST['tags'];
        $image = $_POST['image'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $details = $_POST['details'];
        $check = check_name($name);
        if ($check == 0) {
            $query = "UPDATE item SET item_title='$name' ,item_brand='$brand' ,item_cat='$cat' ,
            item_details='$details',item_description='$description' ,item_tags='$tags' 
            ,item_image='$image' ,item_quantity='$quantity' ,item_price='$price'  WHERE item_id= '$id'";
            $run = single_query($query);
            get_redirect("products.php");
        } else {
            $_SESSION['message'] = "itemErr";
            get_redirect("products.php");
        }
    } elseif (isset($_POST['cancel'])) {
        get_redirect("products.php");
    }
}
function get_item($id)
{
    $query = "SELECT * FROM item WHERE item_id=$id";
    $data = query($query);
    return $data;
}
function check_name($name)
{
    $query = "SELECT item_title FROM item WHERE item_title='$name'";
    $data = query($query);
    if ($data) {
        return 1;
    } else {
        return 0;
    }
}
function search_item()
{
    if (isset($_GET['search_item'])) {
        $name = $_GET['search_item_name'];
        $query = "SELECT * FROM item WHERE item_title LIKE '%$name%'";
        $data = query($query);
        if ($data) {
            return $data;
        } else {
            $_SESSION['message'] = "noResultItem";
            return;
        }
    }
}
function add_item()
{
    if (isset($_POST['add_item'])) {
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $cat = $_POST['cat'];
        $description = $_POST['description'];
        $tags = $_POST['tags'];
        $image = $_POST['image'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $details = $_POST['details'];
        $check = check_name($name);
        if ($check == 0) {
            $query = "INSERT INTO item (item_title, item_brand, item_cat, item_details ,item_description ,
            item_tags ,item_image ,item_quantity ,item_price) VALUES
            ('$name' ,'$brand' ,'$cat' ,'$details' ,'$description' ,'$tags' ,'$image' ,'$quantity' ,'$price')";
            $run = single_query($query);
            get_redirect("products.php");
        } else {
            $_SESSION['message'] = "itemErr";
            get_redirect("products.php");
        }
    } elseif (isset($_POST['cancel'])) {
        get_redirect("products.php");
    }
}
function all_admins()
{
    $query = "SELECT admin_id ,admin_fname ,admin_lname ,admin_email  FROM admin";
    $data = query($query);
    return $data;
}
function get_admin($id)
{
    $query = "SELECT admin_id ,admin_fname ,admin_lname ,admin_email  FROM admin WHERE admin_id=$id";
    $data = query($query);
    return $data;
}
function edit_admin($id)
{
    if (isset($_POST['admin_update'])) {
        $fname = $_POST['admin_fname'];
        $lname = $_POST['admin_lname'];
        $email = $_POST['admin_email'];
        $check = check_email_admin($email);
        if ($check == 0) {
            $query = "UPDATE admin SET admin_email='$email' ,admin_fname='$fname' ,admin_lname='$lname'  WHERE admin_id= '$id'";
            single_query($query);
            get_redirect("admin.php");
        } else {
            $_SESSION['message'] = "emailErr";
            get_redirect("admin.php");
        }
    } elseif (isset($_POST['admin_cancel'])) {
        get_redirect("admin.php");
    }
}
function check_email_admin($email)
{
    $query = "SELECT admin_email FROM admin WHERE admin_email='$email'";
    $data = query($query);
    if ($data) {
        return $data;
    } else {
        return 0;
    }
}
function add_admin()
{
    if (isset($_POST['add_admin'])) {
        $fname = $_POST['admin_fname'];
        $lname = $_POST['admin_lname'];
        $email = $_POST['admin_email'];
        $password = $_POST['admin_password'];
        $check = check_email_admin($email);
        if ($check == 0) {
            $query = "INSERT INTO admin (admin_fname, admin_lname, admin_email, admin_password) 
            VALUES ('$fname','$lname','$email','$password')";
            single_query($query);
            get_redirect("admin.php");
        } else {
            $_SESSION['message'] = "emailErr";
            get_redirect("admin.php");
        }
    } elseif (isset($_POST['admin_cancel'])) {
        get_redirect("admin.php");
    }
}
function delete_admin()
{
    if (isset($_GET['delete'])) {
        $adminId = $_GET['delete'];
        $query = "DELETE FROM admin WHERE admin_id ='$adminId'";
        $run = single_query($query);
        get_redirect("admin.php");
    }
}
function search_admin()
{
    if (isset($_GET['search_admin'])) {
        $email = $_GET['search_admin_email'];
        if (empty($email)) {
            return;
        }
        $query = "SELECT admin_id ,admin_fname ,admin_lname ,admin_email FROM admin WHERE admin_email='$email'";
        $data = query($query);
        if ($data) {
            return $data;
        } else {
            $_SESSION['message'] = "noResultAdmin";
            return;
        }
    }
}
function all_orders()
{
    $query = "SELECT * FROM orders";
    $data = query($query);
    return $data;
}
function search_order()
{
    if (isset($_GET['search_order'])) {
        $id = $_GET['search_order_id'];
        if (empty($id)) {
            return;
        }
        $query = "SELECT * FROM orders WHERE order_id='$id'";
        $data = query($query);
        if ($data) {
            return $data;
        } else {
            $_SESSION['message'] = "noResultOrder";
            return;
        }
    }
}
function delete_order()
{
    if (isset($_GET['delete'])) {
        $order_id = $_GET['delete'];
        $query = "DELETE FROM orders WHERE order_id ='$order_id'";
        $run = single_query($query);
        get_redirect("orders.php");
    } elseif (isset($_GET['done'])) {
        $order_id = $_GET['done'];
        $query = "UPDATE orders SET order_status = 1 WHERE order_id='$order_id'";
        single_query($query);
        get_redirect("orders.php");
    } elseif (isset($_GET['undo'])) {
        $order_id = $_GET['undo'];
        $query = "UPDATE orders SET order_status = 0 WHERE order_id='$order_id'";
        single_query($query);
        get_redirect("orders.php");
    }
}
function get_item_details()
{
    if ($_GET['id']) {
        $id = $_GET['id'];
        $query = "SELECT * FROM item WHERE item_id=$id";
        $data = query($query);
        return $data;
    }
}
function get_user_details()
{
    if ($_GET['id']) {
        $id = $_GET['id'];
        $query = "SELECT * FROM user WHERE user_id=$id";
        $data = query($query);
        return $data;
    }
}
