<?php
$mysqli = new mysqli("mysql", "root", "qwerty", "DB", 3306);
$id = $_GET['id'];
$sql = "DELETE FROM `orders` WHERE `orders`.`id` = '$id'";
if ($mysqli->query($sql) === TRUE) {

} else {

}
header('Location: admin.php');