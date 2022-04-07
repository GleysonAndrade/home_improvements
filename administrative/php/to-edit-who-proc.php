<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
$img = $_POST['img'];

if(isset($_FILES["img"])) {
    $date = rand();
    $archive = $_FILES['img']['name'];
    $folder_dir = "img/";
    $archive_name = $folder_dir. $date . $archive;
    move_uploaded_file($_FILES['img']['tmp_name'],$archive_name);
    $img = $archive_name;
}

if ($_FILES['img']['name'] == "") {
    $update = "UPDATE `who_we_are` SET `title` = '$title', `text` = '$text' WHERE `who_we_are`.`id_who` = '$id'";
    $result = mysqli_query($conn, $update);
} else {
    $update = "UPDATE `who_we_are` SET `title` = '$title', `text` = '$text', `img` = '$img' WHERE `who_we_are`.`id_who` = '$id'";
    $result = mysqli_query($conn, $update);
    // echo $update;
}

$verify = $conn->affected_rows;
if($verify == 0){
    header("Location: ../about.php");
}else{
    header("Location: ../about.php");
}
?>