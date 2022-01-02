<?php
session_start();
function redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
function query($query)
{
    $connection =
        mysqli_connect("localhost", "root", "", "PharmEasy");
    $run = mysqli_query($connection, $query);
    while ($row = $run->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
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

        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT  email , user_id , user_password FROM user WHERE email=$username ";
        $data = query($query);
        if ($data['password'] == $password and $data['phone_number'] == $username) {
            $_SESSION['user_id'] = $data['user_id'];
            redirect("index.php");
        } elseif ($data['password'] == $password and $data['email'] == $username) {
            $_SESSION['user_id'] = $data['user_id'];
            redirect("index.php");
        } else {
            $_SESSION['message'] = "loginErr";
            redirect("login.php");
        }
    }
}

function singUp()
{
    if (isset($_POST['singUp'])) {
        $email  = $_POST['email'];
        $fname  = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $passwd = $_POST['passwd'];
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $_SESSION['message'] = "signUpErr";
            redirect("signUp.php");
        } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $passwd)) {
            $_SESSION['message'] = "signUpErr";
            redirect("signUp.php");
        }
        $query = "SELECT email FROM user ";
        $data = query($query);
        $count = sizeof($data);
        for ($i = 0; $i < $count; $i++) {
            if ($email == $data[$i]['email']) {
                $_SESSION['message'] = "usedEmail";
                redirect("signUp.php");
            }
        }
        $query = "INSERT INTO user (email ,user_fname ,user_lname ,user_password ) VALUES('$email', '$fname' ,'$lname' ,'$passwd')";
        $queryStatus = insert($query);
        $query = "SELECT user_id FROM user WHERE email='$email' ";
        $data = query($query);
        $_SESSION['user_id'] = $data[0]['user_id'];
        if ($queryStatus == "done") {
            redirect("index.php");
        } else {
            $_SESSION['message'] = "wentWrong";
            redirect("signUp.php");
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
        $query = "SELECT item_brand, item_title ,item_id ,item_description ,item_image FROM item WHERE item_tags LIKE '%$search_text%'";
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
function product_details()
{
    if (isset($_GET['product_id'])) {
        echo "hi";
    }
}
