<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$update = "UPDATE `question` SET `question` = '$question', `answer` = '$answer' WHERE `question`.`id_question` = '$id'";
$result = mysqli_query($conn, $update);
echo $update;
$verify = $conn->affected_rows;
if($verify == 0){
    header("Location: ../question.php");
}else{
    header("Location: ../question.php");
}
?>