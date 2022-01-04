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
    $connection = mysqli_connect("localhost", "root", "", "PharmEasy");
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
    $connection = mysqli_connect("localhost", "root", "", "PharmEasy");
    $run = mysqli_query($connection, $query);
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
        $check = check_email($email);
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
function check_email($email)
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
