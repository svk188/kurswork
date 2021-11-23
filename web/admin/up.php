<?php
$name = $_POST['name'];


$mysqli = new mysqli("mysql", "root", "qwerty", "DB", 3306);
$id = $_POST['id'];
$prize = $_POST['prize'];
$sql = "UPDATE `orders` SET `name` = '$name', `prize` = $prize WHERE `orders`.`id` = '$id'";
if ($mysqli->query($sql) === TRUE) {

} else {

}
header('Location: admin.php');