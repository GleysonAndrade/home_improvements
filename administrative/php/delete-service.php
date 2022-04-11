<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];

$delete_service = "DELETE FROM `service` WHERE `service`.`id_service`='$id'";
$reseult_delete = mysqli_query($conn,$delete_service);

if($reseult_delete){
    echo "deletado";
}else{
    echo "erro";
}
?>