<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Administrative - Carrousel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo.png">

    <!-- page css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="./assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <?php

            include './fixed/navbar.php';

            include './fixed/header.php';
            // header
            ?>

            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="card">
                        <div class="card-body" style="overflow-x: auto;">
                            <h4>Table Carousel</h4>
                            <!-- <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Below is an example of zero configuration.</p> -->
                            <div class="col-xs-0 col-md-0 col-lg-0" align="right">
                                <a name="" id="" class="btn btn-sm btn-primary" href="javascript:void(0)" role="button" data-toggle="modal" data-target="#add">Add Carrousel</a>
                            </div>
                            <div class="m-t-25">
                                <table id="data-table" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>DESCRIPTION</th>
                                            <th>IMAGE</th>
                                            <th>IMAGE</th>
                                            <th>IMAGE</th>
                                            <th>DATE REGISTER</th>
                                            <th>TO EDIT</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'connect.php';

                                        $sql = "SELECT * FROM `carousel` ORDER BY id_carousel ASC";
                                        $query = mysqli_query($conn, $sql);
                                        while ($dados = mysqli_fetch_assoc($query)) {
                                            $id = $dados['id_carousel'];
                                            $name = $dados['name'];
                                            $description = $dados['description'];
                                            $date = $dados['date_register'];
                                            $img1 = $dados['img_1'];
                                            $img2 = $dados['img_2'];
                                            $img3 = $dados['img_3'];
                                            echo "

                                                <tr>
                                                    <td>$id</td>
                                                    <td>$name</td>
                                                    <td>$description</td>
                                                    <td><img width='50' src='php/$img1'></td>
                                                    <td><img width='50' src='php/$img2'></td>
                                                    <td><img width='50' src='php/$img3'></td>
                                                    
                                                    <td>$date</td>";

                                            echo "

                                                <td><a class='editarusr' data-id='$id' data-name='$name' data-msg='$description' data-img1='$img1' data-img2='$img2' data-img3='$img3'>TO EDIT</a></td>
                                                <td><a class='excluir' data-id = '$id' data-name='$name' href='#'>DELETE</a></td>
                                                </tr>
                                            ";
                                        }

                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>DESCRIPTION</th>
                                            <th>IMAGE</th>
                                            <th>IMAGE</th>
                                            <th>IMAGE</th>
                                            <th>DATE REGISTER</th>
                                            <th>TO EDIT</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include "./fixed/footer.php";
                ?>
                <!-- Modal -->
                <div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="excluirModalLabel">Confirmação</h5>
                                <button id="btn_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button id="btn_exluir_nao" type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button id="btn_exluir_sim" type="button" class="btn btn-primary">Yes</button>
                                <button id="btn_confirm" type="button" class="btn btn-primary" data-dismiss="modal" hidden>OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="contaBC" tabindex="-1" role="dialog" aria-labelledby="contaBC" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 85%;" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contaBC2">Data carousel</h5>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button id="btn_confirm_asessorModal" type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- popup to register carousel images from home page -->
                <div class="modal fade" id="add" enctype="multipart/form-data" tabindex="-1" role="dialog" aria-labelledby="contaBC" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="min-width: 65%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contaBC2">Register Images Home</h5>
                            </div>
                            <div class="modal-body">
                                <form action="javascript:void(0)" id="form_registration" enctype="multipart/form-data" method="post">
                                    <div class="container">
                                        <div class="row">
                                            <input type="text" hidden class="form-control idIn" name="id" value="<?= $id_carousel ?>">
                                            <!-- image 1 -->
                                            <div class="col-md-4">
                                                <div style="position:relative; text-align:center;">
                                                    <img src="" id="imgPreview" style="border-radius: 10px;" width="100" height="100" />
                                                </div>
                                                <p class="text-center">Load Image-1
                                                    <input type="file" class="form-control file" id="photo" name="img1" style="position: relative; left:33%; width:150px; top:-50px; opacity:0;" />
                                                </p>
                                            </div>
                                            <!-- image 2 -->
                                            <div class="col-md-4" id="frames">
                                                <div style="position:relative; text-align:center;">
                                                    <img src="" id="imgPreview2" style="border-radius: 10px;" width="100" height="100" class="img2In" />
                                                </div>
                                                <p id="change-image-button" class="text-center">Load Image-2
                                                    <input type="file" class="form-control file" id="photo2" name="img2" style="position: relative; left:33%; width:150px; top:-50px; opacity:0;" />
                                                </p>
                                            </div>
                                            <!-- image 3 -->
                                            <div class="col-md-4">
                                                <div style="position:relative; text-align:center;">
                                                    <img src="" id="imgPreview3" style="border-radius: 10px;" width="100" height="100" class="img3In" />
                                                </div>
                                                <p id="change-image-button" class="text-center">Load Image-3
                                                    <input type="file" class="form-control file" id="photo3" name="img3" style="position: relative; left:33%; width:150px; top:-50px; opacity:0;" />
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="nome">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter a name for corousel" style="width: 780px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="from-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="6" aria-describedby="helpId" placeholder="Enter a description for carousel" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn_confirm_asessorModal" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        <button id="salvar" type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- modal carousel save success -->
                <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header" bg-success>
                            <h5 class="modal-title">Success Carousel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Carousel successfully registered!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="close">OK</button>
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editar_usr" tabindex="-1" role="dialog" aria-labelledby="contaBC" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="min-width: 65%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contaBC2">To Edit Carousel</h5>
                            </div>
                            <div class="modal-body">
                                <form action="./php/to-edit-proc.php" enctype="multipart/form-data" id="newedit" method="post">
                                    <div class="row">
                                        <input type="text" hidden class="form-control idIn" name="id" value="<?= $id ?>">
                                        <div class="col-md-4">
                                            <div style="position:relative; text-align:center;">
                                                <img src="" id="imgPreview4" style="border-radius: 10px;" width="100" height="100" class="img1In" id="" />
                                            </div>
                                            <p class="text-center">Load Image-1
                                                <input type="file" class="form-control img1In" id="photo4" name="img1" style="position: relative; left:33%; width:150px; top:-50px; opacity:0;" />
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="position:relative; text-align:center;">
                                                <img src="" id="imgPreview5" style="border-radius: 10px;" width="100" height="100" class="img2In" id="" />
                                            </div>
                                            <p id="change-image-button" class="text-center">Load Image-2
                                                <input type="file" class="form-control img2In" id="photo5" name="img2" style="position: relative; left:33%; width:150px; top:-50px; opacity:0;" />
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="position:relative; text-align:center;">
                                                <img src="" id="imgPreview6" style="border-radius: 10px;" width="100" height="100" class="img3In" id="" />
                                            </div>
                                            <p id="change-image-button" class="text-center">Load Image-3
                                                <input type="file" class="form-control img3In" id="photo6" name="img3" style="position: relative; left:33%; width:150px; top:-50px; opacity:0;" />
                                            </p>
                                        </div>
                                        <div class="container">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="nome">Name</label>
                                                    <input type="text" class="form-control nameIn" name="name" id="" aria-describedby="helpId" placeholder="" style="width: 780px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="from-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control msgIn" id="" cols="30" rows="6" aria-describedby="helpId" required></textarea>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button id="btn_confirm_asessorModal" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        <button id="" type="button" class="btn btn-success enviando_sub">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="statusModalLongTitle">Alteração de Status</h5>
                            </div>
                            <div class="modal-body">

                            </div>
                            <br>
                            <div class="modal-footer">
                                <button id='cancelar_btn_status' type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button id='salvar_btn_status' type="button" class="btn btn-primary">Alterar Status</button>
                                <button id='btn_ok_status' type="button" class="btn btn-primary d-none">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app">
        <div class="layout">
            <?php

            include './fixed/navbar.php';

            include './fixed/header.php';
            // header
            ?>

            <!-- Page Container START -->
            <div class="page-container">

                <!-- page js -->

                <script src="assets/vendors/datatables/jquery.dataTables.min.js?id=x"></script>
                <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>

                <script>
                    $(document).ready(function() {

                        $(function() {
                            $("#form_registration").submit(function(e) {
                                var name = $("#name").val();
                                var description = $("#description").val();
                                var success = success;
                                var dados = new FormData();
                                dados.append("img1", $("#photo")[0].files[0]);
                                dados.append("img2", $("#photo2")[0].files[0]);
                                dados.append("img3", $("#photo3")[0].files[0]);
                                dados.append("name", name);
                                dados.append("description", description);

                                $.ajax({
                                    type: "POST",
                                    url: "php/add-carousel.php",
                                    data: dados,
                                    processData: false,
                                    contentType: false,
                                    success: function(data) {
                                        // console.log(data); 
                                        $('#saveModal').modal('show');
                                        $('body').on('click','#close', function(){
                                            window.location = "./carousel_home.php";
                                        }); 
                                    },
                                });
                            })
                        })

                        $(".editarusr").css({
                            cursor: "pointer",
                            color: "blue"
                        });
                        $(".contaBC").css({
                            cursor: "pointer",
                            color: "blue"
                        });
                        $(".editarusr").click(function() {
                            $("#editar_usr").modal("show");
                            $("#editar_usr .idIn").val(this.dataset.id)
                            $("#editar_usr .nameIn").val(this.dataset.name)
                            $("#editar_usr .msgIn").val(this.dataset.msg)
                            $("#editar_usr .img1In").attr("src", "php/" + this.dataset.img1)
                            $("#editar_usr .img2In").attr("src", "php/" + this.dataset.img2)
                            $("#editar_usr .img3In").attr("src", "php/" + this.dataset.img3)
                        });
                        $(".enviando_sub").click(function() {
                            $(this).attr("disabled", "")
                            if ($("#editar_usr .nomeIn").val() == "") {
                                alert("Preencha o campo nome corretamente!");
                                $(this).removeAttr("disabled")
                            } else {
                                $("#newedit").submit();
                                // window.location = "./carousel_home.php";
                            }
                        });
                    

                        $(".excluir").each(function() {

                            if ($(this).text() == "DELETE") {
                                $(this).addClass("text-danger")
                            } else {
                                $(this).addClass("text-success")
                            }

                        })

                        $(".excluir").click(function() {

                            var id_data = this.dataset.id
                            var name_data = this.dataset.name
                            $('#excluirModal').modal({
                                backdrop: 'static',
                                keyboard: false
                            })
                            $("#excluirModal .modal-body").text('Are you sure you want to delete the carousel ' + name_data + ' in ID ' + id_data + ' ?');
                            $("#excluirModal").modal('show')

                            $("#btn_exluir_sim").click(function() {

                                $('#btn_close').attr('hidden', true);
                                $('#btn_exluir_nao').attr('hidden', true);

                                $('#excluirModal').modal('hide')

                                $.post("php/delete-carousel.php", {
                                        id: id_data,

                                    },
                                    function(data, status) {
                                        console.log(data);
                                        if (data == "deletado") {
                                            $("#excluirModal .modal-body").text('User successfully deleted!');
                                            $("#btn_exluir_sim").attr('hidden', true);
                                            $('#btn_confirm').attr('hidden', false);
                                            $('#excluirModal').modal('show')
                                            $("#btn_confirm").click(function() {
                                                window.location = "./carousel_home.php";
                                            })


                                        } else if (data == "erro") {

                                            $("#excluirModal .modal-body").text('An error occurred while trying to delete the user, please try again!');
                                            $('#btn_confirm').attr('hidden', false);
                                            $('#excluirModal').modal('show');
                                            $("#btn_confirm").click(function() {
                                                window.location = "./carousel_home.php";
                                            })
                                        }


                                    })
                            })
                        })
                        // preview imagem 1 do carousel
                        $("#photo").change(function() {
                            const file = this.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $("#imgPreview")
                                        .attr("src", event.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                        // preview imagem 2 do carousel
                        $("#photo2").change(function() {
                            const file = this.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $("#imgPreview2")
                                        .attr("src", event.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                        // preview imagem 3 do carousel
                        $("#photo3").change(function() {
                            const file = this.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $("#imgPreview3")
                                        .attr("src", event.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                        // edit carousel
                        $("#photo4").change(function() {
                            const file = this.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $("#imgPreview4")
                                        .attr("src", event.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                        $("#photo5").change(function() {
                            const file = this.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $("#imgPreview5")
                                        .attr("src", event.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                        $("#photo6").change(function() {
                            const file = this.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $("#imgPreview6")
                                        .attr("src", event.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                    });
                </script>
                <!-- Core JS -->
                <script src="assets/js/app.min.js"></script>
                <script src="assets/js/script.js"></script>

</body>
<?php
mysqli_close($conn);
?>

</html>