<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];

$delete_carousel = "DELETE FROM `carousel` WHERE `carousel`.`id_carousel`='$id'";
$reseult_delete = mysqli_query($conn,$delete_carousel);

if($reseult_delete){
    echo "deletado";
}else{
    echo "erro";
}
?>