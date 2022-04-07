<?php 
session_start();
include_once '../connect.php';

$date = date('m/d/Y');

$title = htmlspecialchars($_POST['title'], ENT_QUOTES,'UTF-8');
$text = htmlspecialchars($_POST['text'], ENT_QUOTES,'UTF-8');


if(isset($_FILES["img"])) {
    $date = rand();
    $archive = $_FILES['img']['name'];
    $folder_dir = "img/";
    $archive_name = $folder_dir. $date . $archive;
    move_uploaded_file($_FILES['img']['tmp_name'],$archive_name);
    $img = $archive_name;
}

$select_who = "SELECT * FROM `who_we_are` WHERE `title`='$title'";
$result_who = mysqli_query($conn,$select_who);

if($num_row = mysqli_num_rows($result_who) > 1) {

}else{
    $insert_who = "INSERT INTO `who_we_are` (`id_who`,`title`,`text`,`img`,`date_register`) VALUE (NULL,'$title','$text','$img',NOW())";
    $query_who = mysqli_query($conn,$insert_who);
    echo $insert_who;

    $verify = $conn->affected_rows;
    if($verify == 0){
        // header("Location: ../carousel_home.php");
    }else{
        // header("Location: ../carousel_home.php");
    }
}
?>