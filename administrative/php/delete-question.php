<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];

$delete_question = "DELETE FROM `question` WHERE `question`.`id_question`='$id'";
$reseult_delete = mysqli_query($conn,$delete_question);

if($reseult_delete){
    echo "deletado";
}else{
    echo "erro";
}
?>