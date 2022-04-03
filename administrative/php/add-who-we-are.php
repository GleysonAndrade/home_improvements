<?php 
session_start();
include_once '../connect.php';

$date = date('m/d/Y');

$title = htmlspecialchars($_POST['title'], ENT_QUOTES,'UTF-8');
$text = htmlspecialchars($_POST['text'], ENT_QUOTES,'UTF-8');

$select_who = "SELECT * FROM `who_we_are` WHERE `title`='$title'";
$result_who = mysqli_query($conn,$select_who);

if($num_row = mysqli_num_rows($result_who) > 1) {

}else{
    $insert_who = "INSERT INTO `who_we_are` (`id_who`,`title`,`text`,`date_register`) VALUE (NULL,'$title','$text',NOW())";
    $query_who = mysqli_query($conn,$insert_who);
    // echo $insert_carousel;

    $verify = $conn->affected_rows;
    if($verify == 0){
        // header("Location: ../carousel_home.php");
    }else{
        // header("Location: ../carousel_home.php");
    }
}
?>