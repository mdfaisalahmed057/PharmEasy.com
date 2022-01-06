<?php
// $data = 
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// $data[2] = 1;
// $data[5] = 33;
// unset($data[2]);
// $data=array_values($data);
// echo '<pre>';
// print_r($data);
// echo '</pre>';
$_SESSION['data'] = [0, 10, 2, 3, 4];
echo '<pre>';
print_r($_SESSION['data']);
echo '</pre>';
$_SESSION['data'][2] = 1;
$_SESSION['data'][5] = 33;
unset($_SESSION['data'][2]);
echo '<pre>';
print_r($_SESSION['data']);
echo '</pre>';
$_SESSION['data'] = array_values($_SESSION['data']);
echo '<pre>';
print_r($_SESSION['data']);
echo '</pre>';
