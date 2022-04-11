<?php 
session_start();
include_once '../connect.php';

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');

$name = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
$description = htmlspecialchars($_POST['description'], ENT_QUOTES,'UTF-8');


// if(isset($_FILES["img"])) {
//     $date = rand();
//     $archive = $_FILES['img']['name'];
//     $folder_dir = "img/";
//     $archive_name = $folder_dir. $date . $archive;
//     move_uploaded_file($_FILES['img']['tmp_name'],$archive_name);
//     $img = $archive_name;
// }

//recupera imagem e salva no diretorio
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


$select_who = "SELECT * FROM `service` WHERE `name`='$name'";
$result_who = mysqli_query($conn,$select_who);

if($num_row = mysqli_num_rows($result_who) > 1) {

}else{
    $insert_who = "INSERT INTO `service` (`id_service`,`name`,`description`,`img`,`date_register`) VALUE (NULL,'$name','$description','$img',NOW())";
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