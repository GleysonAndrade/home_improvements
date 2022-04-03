<?php
session_start();
include_once '../connect.php';

$date = date('m/d/Y');

$name = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
$description = htmlspecialchars($_POST['description'], ENT_QUOTES,'UTF-8');

if(isset($_FILES["img1"])) {
    $date = rand();
    $archive = $_FILES['img1']['name'];
    $folder_dir = "img/";
    $archive_name = $folder_dir. $date . $archive;
    move_uploaded_file($_FILES['img1']['tmp_name'],$archive_name);
    $img1 = $archive_name;
}

if(isset($_FILES["img2"])){
    $date = rand();
    $archive2 = $_FILES['img2']['name'];
    $folder_dir2 = "img/";
    $archive_name2 = $folder_dir2. $date .$archive2;
    move_uploaded_file($_FILES["img2"]['tmp_name'], $archive_name2);
    $img2 = $archive_name2;
   
}

if(isset($_FILES["img3"])) {
    $date = rand();
    $archive3 = $_FILES['img3']['name'];
    $folder_dir3 = "img/";
    $archive_name3 = $folder_dir3. $date .$archive3;
    move_uploaded_file($_FILES["img3"]['tmp_name'], $archive_name3);
    $img3 = $archive_name3;
}

$select_carousel = "SELECT * FROM `carousel` WHERE `name`='$name'";
$result_carousel = mysqli_query($conn,$select_carousel);

if($num_row = mysqli_num_rows($result_carousel) > 1) {

}else{
    $insert_carousel = "INSERT INTO `carousel` (`id_carousel`,`name`,`description`,`img_1`,`img_2`,`img_3`,`date_register`) VALUE (NULL,'$name','$description','$img1','$img2','$img3',NOW())";
    $query_carousel = mysqli_query($conn,$insert_carousel);
    // echo $insert_carousel;

    $verify = $conn->affected_rows;
    if($verify == 0){
        // header("Location: ../carousel_home.php");
    }else{
        // header("Location: ../carousel_home.php");
    }
}
?>