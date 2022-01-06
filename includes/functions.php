<?php
session_start();
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
function query($query)
{
    $connection =
        mysqli_connect("localhost", "root", "", "PharmEasy");
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
function insert($query)
{
    $connection =
        mysqli_connect("localhost", "root", "", "PharmEasy");
    if (mysqli_query($connection, $query)) {
        return "done";
    } else {
        return "nah";
    }
}
function login()
{
    if (isset($_POST['login'])) {

        $userEmail = $_POST['userEmail'];
        $password = $_POST['password'];
        $query = "SELECT  email , user_id , user_password FROM user WHERE email= '$userEmail' ";
        $data = query($query);
        if ($data == 0) {
            $_SESSION['message'] = "loginErr";
            post_redirect("login.php");
        } elseif ($password == $data[0]['user_password'] and  $userEmail == $data[0]['email']) {
            $_SESSION['user_id'] = $data[0]['user_id'];
            post_redirect("index.php");
        } else {
            $_SESSION['message'] = "loginErr";
            post_redirect("login.php");
        }
    }
}

function singUp()
{
    if (isset($_POST['singUp'])) {
        $email  = $_POST['email'];
        $fname  = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $address = $_POST['address'];
        $passwd = $_POST['passwd'];
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $_SESSION['message'] = "signUpErr";
            post_redirect("signUp.php");
        } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,30}$/', $passwd)) {
            $_SESSION['message'] = "signUpErr";
            post_redirect("signUp.php");
        }
        $query = "SELECT email FROM user ";
        $data = query($query);
        $count = sizeof($data);
        for ($i = 0; $i < $count; $i++) {
            if ($email == $data[$i]['email']) {
                $_SESSION['message'] = "usedEmail";
                post_redirect("signUp.php");
            }
        }
        $query = "INSERT INTO user (email ,user_fname ,user_lname , user_address,user_password ) VALUES('$email', '$fname' ,'$lname','$address' ,'$passwd')";
        $queryStatus = insert($query);
        $query = "SELECT user_id FROM user WHERE email='$email' ";
        $data = query($query);
        $_SESSION['user_id'] = $data[0]['user_id'];
        if ($queryStatus == "done") {
            post_redirect("index.php");
        } else {
            $_SESSION['message'] = "wentWrong";
            post_redirect("signUp.php");
        }
    }
}
function message()
{
    if ($_SESSION['message'] == "signUpErr") {
        echo "   <div class='alert alert-danger' role='alert'>
        please enter the email and the password in correct form !!!
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "loginErr") {
        echo "   <div class='alert alert-danger' role='alert'>
        The email or the password is incorrect !!!
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "usedEmail") {
        echo "   <div class='alert alert-danger' role='alert'>
        This email is already used !!!
      </div>";
        unset($_SESSION['message']);
    } elseif ($_SESSION['message'] == "wentWrong") {
        echo "   <div class='alert alert-danger' role='alert'>
        Something went wrong !!!
      </div>";
        unset($_SESSION['message']);
    }
}
function search()
{
    if (isset($_GET['search'])) {
        $search_text = $_GET['search_text'];
        if ($search_text == "") {
            return;
        }
        $query = "SELECT item_brand, item_title ,item_id ,item_description ,item_image FROM item WHERE item_tags LIKE '%$search_text%'";
        $data = query($query);
        return $data;
    } elseif (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $query = "SELECT item_brand, item_title ,item_id ,item_description ,item_image FROM item WHERE item_cat='$cat' ORDER BY RAND()";
        $data = query($query);
        return $data;
    }
}
function all_products()
{
    $query = "SELECT * FROM item ORDER BY RAND()";
    $data = query($query);
    return $data;
}
function total_price($data)
{
    $sum = 0;
    $num = sizeof($data);
    for ($i = 0; $i < $num; $i++) {
        $sum += $data[$i][0]['item_price'];
    }
    return $sum;
}
function get_item()
{
    if (isset($_GET['product_id'])) {
        $_SESSION['item_id'] = $_GET['product_id'];
        $id = $_GET['product_id'];
        $query = "SELECT * FROM item WHERE item_id='$id'";
        $data = query($query);
        return $data;
    }
}
function get_user($id)
{
    $query = "SELECT user_id ,user_fname ,user_lname ,email ,user_address FROM user WHERE user_id=$id";
    $data = query($query);
    return $data;
}
function add_cart($item_id)
{
    if (isset($_GET['cart'])) {
        $user_id = $_SESSION['user_id'];
        $quantity = $_GET['quantity'];
        if (empty($user_id)) {
            get_redirect("login.php");
        } else {
            if (isset($_SESSION['cart'])) {
                $num = sizeof($_SESSION['cart']);
                $_SESSION['cart'][$num]['user_id'] = $user_id;
                $_SESSION['cart'][$num]['item_id'] = $item_id;
                $_SESSION['cart'][$num]['quantity'] = $quantity;
                get_redirect("product.php?product_id=" . $item_id);
            } else {
                $_SESSION['cart'][0]['user_id'] = $user_id;
                $_SESSION['cart'][0]['item_id'] = $item_id;
                $_SESSION['cart'][0]['quantity'] = $quantity;
                get_redirect("product.php?product_id=" . $item_id);
            }
        }
    } elseif (isset($_GET['buy'])) {
        $user_id = $_SESSION['user_id'];
        $quantity = $_GET['quantity'];
        if (!isset($user_id)) {
            get_redirect("login.php");
        } else {
            if (isset($_SESSION['cart'])) {
                $num = sizeof($_SESSION['cart']);
                $_SESSION['cart'][$num]['user_id'] = $user_id;
                $_SESSION['cart'][$num]['item_id'] = $item_id;
                $_SESSION['cart'][$num]['quantity'] = $quantity;
                get_redirect("cart.php");
            } else {
                $_SESSION['cart'][0]['user_id'] = $user_id;
                $_SESSION['cart'][0]['item_id'] = $item_id;
                $_SESSION['cart'][0]['quantity'] = $quantity;
                get_redirect("cart.php");
            }
        }
    }
}
function get_cart()
{
    $num = sizeof($_SESSION['cart']);
    if (isset($num)) {
        for ($i = 0; $i < $num; $i++) {
            $item_id = $_SESSION['cart'][$i]['item_id'];
            $query = "SELECT item_id, item_image ,item_title ,item_description ,item_quantity ,item_price ,item_brand FROM item WHERE item_id='$item_id'";
            $data[$i] = query($query);
        }
        return $data;
    } else {
        echo 0;
    }
}
function delete_from_cart()
{
    if (isset($_GET['delete'])) {
        $item_id = $_GET['delete'];
        $num = sizeof($_SESSION['cart']);
        for ($i = 0; $i < $num; $i++) {
            if ($_SESSION['cart'][$i]['item_id'] == $item_id) {
                unset($_SESSION['cart'][$i]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
        get_redirect("cart.php");
    }
}
function add_order()
{
    if (isset($_GET['order'])) {
        $num = sizeof($_SESSION['cart']);
        $date = date("Y-m-d");
        for ($i = 0; $i < $num; $i++) {
            $item_id = $_SESSION['cart'][$i]['item_id'];
            $user_id = $_SESSION['cart'][$i]['user_id'];
            $quantity = $_SESSION['cart'][$i]['quantity'];
            $query = "INSERT INTO orders (user_id,item_id,order_quantity,order_date) 
            VALUES('$user_id','$item_id','$quantity','$date')";
            $data =   insert($query);
        }
        unset($_SESSION['cart']);
        get_redirect("final.php");
    }
}