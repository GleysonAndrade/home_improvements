<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];

$delete_who = "DELETE FROM `who_we_are` WHERE `who_we_are`.`id_who`='$id'";
$reseult_who = mysqli_query($conn,$delete_who);

if($reseult_who){
    echo "deletado";
}else{
    echo "erro";
}
?>