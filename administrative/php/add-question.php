<?php 
session_start();
include_once '../connect.php';

$date = date('m/d/Y');

$question = htmlspecialchars($_POST['question'], ENT_QUOTES,'UTF-8');
$answer = htmlspecialchars($_POST['answer'], ENT_QUOTES,'UTF-8');

$select_question = "SELECT * FROM `question` WHERE `question`='$question'";
$result_question = mysqli_query($conn,$select_question);

if($num_row = mysqli_num_rows($result_question) > 1) {

}else{
    $insert_question = "INSERT INTO `question` (`id_question`,`question`,`answer`,`date_register`) VALUE (NULL,'$question','$answer',NOW())";
    $query_question = mysqli_query($conn,$insert_question);
    // echo $insert_question;

    $verify = $conn->affected_rows;
    if($verify == 0){
        // header("Location: ../question.php");
    }else{
        // header("Location: ../question.php");
    }
}
?>