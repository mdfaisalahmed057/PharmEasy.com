<?php
function redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
function login()
{
    if (isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $connection =
            mysqli_connect("localhost", "root", "", "PharmEasy");
        $query = "SELECT phone_number , email , user_id , password FROM user WHERE email=$username OR phone_number=$username";
        $run = mysqli_query($connection, $query);
        while ($row = $run->fetch_assoc()) {
            $data = $row;
        }
        print_r($data);
        if ($data['password'] == $password and $data['phone_number'] == $username) {
            $_SESSION['user_id'] = $data['user_id'];
            redirect("index.php");
        } elseif ($data['password'] == $password and $data['email'] == $username) {
            $_SESSION['user_id'] = $data['user_id'];
            redirect("index.php");
        } else {
            echo "   <div class='alert alert-danger' role='alert'>
            A simple danger alert—check it out!
          </div>";
        }
    }
}
