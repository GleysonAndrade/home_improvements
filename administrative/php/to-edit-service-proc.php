<?php 
session_start();
include_once '../connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$img = $_POST['img'];

$arquivo = $_FILES['img']['name'];

if ($arquivo) {
    // echo $arquivo;
    $arquivo = $_FILES['img']['name'];
    $ext = pathinfo($arquivo, PATHINFO_EXTENSION);
    if ($ext == "png" ||  $ext == "jpeg" ||  $ext == "jpg") {
        $pasta_dir = "img/";
        $novonome = date("His");
        $img = $pasta_dir . $novonome . "." . $ext;
        move_uploaded_file($_FILES["img"]['tmp_name'], $img);
    } else {
        // echo "erro 407";
        // exit;
    }
} else {
    // echo "erro 408";
    // exit;
}

if ($_FILES['img']['name'] == "") {
    $update = "UPDATE `service` SET `name` = '$name', `description` = '$description' WHERE `service`.`id_service` = '$id'";
    $result = mysqli_query($conn, $update);
} else {
    $update = "UPDATE `service` SET `name` = '$name', `description` = '$description', `img` = '$img' WHERE `service`.`id_service` = '$id'";
    $result = mysqli_query($conn, $update);
}

echo $update;

$verify = $conn->affected_rows;
if($verify == 0){
    header("Location: ../service.php");
}else{
    header("Location: ../service.php");
}
?>