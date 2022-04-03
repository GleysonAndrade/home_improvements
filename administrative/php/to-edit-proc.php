<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];

if(isset($_FILES["img1"])) {
    $date = rand();
    $archive = $_FILES['img1']['name'];
    $folder_dir = "img/";
    $archive_name = $folder_dir. $date . $archive;
    move_uploaded_file($_FILES['img1']['tmp_name'],$archive_name);
    $img1 = $archive_name;
}

if($_FILES['img1']['name'] == ""){
    $upadate1 = "UPDATE `carousel` SET `name`='$name',`description`='$description' WHERE `carousel`.`id_carousel`='$id'";
    $result1 = mysqli_query($conn, $upadate1);
}else{
    $upadate1 = "UPDATE `carousel` SET `name`='$name',`description`='$description' `img_1`='$img1' WHERE `carousel`.`id_carousel`='$id'";
    $result1 = mysqli_query($conn, $upadate1);
}

if(isset($_FILES["img2"])){
    $date = rand();
    $archive2 = $_FILES['img2']['name'];
    $folder_dir2 = "img/";
    $archive_name2 = $folder_dir2. $date .$archive2;
    move_uploaded_file($_FILES["img2"]['tmp_name'], $archive_name2);
    $img2 = $archive_name2;
}

if($_FILES['img2']['name'] == ""){
    $upadate2 = "UPDATE `carousel` SET `name`='$name',`description`='$description' WHERE `carousel`.`id_carousel`='$id'";
    $result2 = mysqli_query($conn, $upadate2);
}else{
    $upadate2 = "UPDATE `carousel` SET `name`='$name',`description`='$description' `img_2`='$img2' WHERE `carousel`.`id_carousel`='$id'";
    $result2 = mysqli_query($conn, $upadate2);
}

if(isset($_FILES["img3"])) {
    $date = rand();
    $archive3 = $_FILES['img3']['name'];
    $folder_dir3 = "img/";
    $archive_name3 = $folder_dir3. $date .$archive3;
    move_uploaded_file($_FILES["img3"]['tmp_name'], $archive_name3);
    $img3 = $archive_name3;
}

if($_FILES['img3']['name'] == ""){
    $upadate3 = "UPDATE `carousel` SET `name`='$name',`description`='$description' WHERE `carousel`.`id_carousel`='$id'";
    $result3 = mysqli_query($conn, $upadate3);
}else{
    $upadate3 = "UPDATE `carousel` SET `name`='$name',`description`='$description' `img_3`='$img3' WHERE `carousel`.`id_carousel`='$id'";
    $result3 = mysqli_query($conn, $upadate3);
}

echo $upadate3;

$verify = $conn->affected_rows;
if($verify == 0){
    // header("Location: ../carousel_home.php");
}else{
    // header("Location: ../carousel_home.php");
}
?>