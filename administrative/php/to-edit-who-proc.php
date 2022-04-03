<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];

$update = "UPDATE `who_we_are` SET `title` = '$title', `text` = '$text' WHERE `who_we_are`.`id_who` = '$id'";
$result = mysqli_query($conn, $update);

$verify = $conn->affected_rows;
if($verify == 0){
    header("Location: ../who_we_are.php");
}else{
    header("Location: ../who_we_are.php");
}
?>