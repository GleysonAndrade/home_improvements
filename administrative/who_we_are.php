<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Administrative - Who We Are</title>
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
                            <h4>Table Who We Are</h4>
                            <!-- <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Below is an example of zero configuration.</p> -->
                            <div class="col-xs-0 col-md-0 col-lg-0" align="right">
                                <a name="" id="" class="btn btn-sm btn-primary" href="javascript:void(0)" role="button" data-toggle="modal" data-target="#add">Add Who We Are</a>
                            </div>
                            <div class="m-t-25">
                                <table id="data-table" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>DESCRIPTION</th>
                                            <th>DATE REGISTER</th>
                                            <th>TO EDIT</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'connect.php';

                                        $sql = "SELECT * FROM `who_we_are` ORDER BY id_who ASC";
                                        $query = mysqli_query($conn, $sql);
                                        while ($dados = mysqli_fetch_assoc($query)) {
                                            $id = $dados['id_who'];
                                            $title = $dados['title'];
                                            $text = $dados['text'];
                                            $date = $dados['date_register'];

                                            echo "

                                                <tr>
                                                    <td>$id</td>
                                                    <td>$title</td>
                                                    <td>$text</td>
                                                    <td>$date</td>";

                                            echo "

                                                <td><a class='editarusr' data-id='$id' data-title='$title' data-msg='$text'>TO EDIT</a></td>
                                                <td><a class='excluir' data-id = '$id' data-title='$title' href='#'>DELETE</a></td>
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
                                <h5 class="modal-title" id="excluirModalLabel">Confirmation</h5>
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
                                <h5 class="modal-title" id="contaBC2">Register Who We Are Home</h5>
                            </div>
                            <div class="modal-body">
                                <form action="javascript:void(0)" id="form_registration" enctype="multipart/form-data" method="post" novalidate>
                                    <div class="container">
                                        <div class="row">
                                            <input type="text" hidden class="form-control idIn" name="id" value="<?= $id_carousel ?>">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="nome">Name</label>
                                                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Enter a name for corousel" style="width: 780px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="from-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea name="text" class="form-control" id="text" cols="30" rows="6" aria-describedby="helpId" placeholder="Enter a description for carousel" required></textarea>
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
                                <p>Who We Are successfully registered!</p>
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
                                <h5 class="modal-title" id="contaBC2">To Edit Who We Are</h5>
                            </div>
                            <div class="modal-body">
                                <form action="./php/to-edit-who-proc.php" enctype="multipart/form-data" id="newedit" method="post">
                                    <div class="row">
                                        <input type="text" hidden class="form-control idIn" name="id" value="<?= $id ?>">
                                        <div class="container">
                                            <div class=" form-group">
                                                <div class="col-md-12">
                                                    <label for="nome">Name</label>
                                                    <input type="text" class="form-control titleIn" name="title" id="" aria-describedby="helpId" placeholder="" style="width: 780px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="from-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea name="text" class="form-control msgIn" id="text" cols="30" rows="6" aria-describedby="helpId" required></textarea>
                                        </div>
                                    </div>
                                    <div class="content msgIn">
                                        <!-- <input type="text" class="msgIn"> -->
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
            <div class="page-container"></div>


            <!-- page js -->

            <script src="assets/vendors/datatables/jquery.dataTables.min.js?id=x"></script>
            <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>


            <script>
                $(document).ready(function() {

                    $(function() {
                        $("#form_registration").submit(function(e) {
                            var title = $("#title").val();
                            var text = $("#text").val();
                            var dados = new FormData();
                            dados.append("title", title);
                            dados.append("text", text);

                            $.ajax({
                                type: "POST",
                                url: "php/add-who-we-are.php",
                                data: dados,
                                processData: false,
                                contentType: false,
                                success: function(data) {
                                    console.log(data);
                                    $('#saveModal').modal('show');
                                    $('body').on('click', '#close', function() {
                                        window.location = "./who_we_are.php";
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
                        $("#editar_usr .titleIn").val(this.dataset.title)
                        $("#editar_usr .msgIn").val(this.dataset.msg)
                    });
                    $(".enviando_sub").click(function() {
                        $(this).attr("disabled", "")
                        if ($("#editar_usr .titleIn").val() == "") {
                            alert("Fill in the name field correctly!");
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
                        var name_data = this.dataset.title
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

                            $.post("php/delete-who.php", {
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
                                            window.location = "./who_we_are.php";
                                        })


                                    } else if (data == "erro") {

                                        $("#excluirModal .modal-body").text('An error occurred while trying to delete the user, please try again!');
                                        $('#btn_confirm').attr('hidden', false);
                                        $('#excluirModal').modal('show');
                                        $("#btn_confirm").click(function() {
                                            window.location = "./who_we_are.php";
                                        })
                                    }


                                })
                        })
                    })

                    // tinymce.init({
                    //     language: 'pt_BR',
                    //     selector: "#text",
                    //     activeEditor: true,
                    //     plugins: [
                    //         'advlist', 'image', 'table', 'autolink', 'emoticons', 'fullscreen', 'link', 'lists', 'media', 'paste', 'preview', 'print', 'save', 'searchreplace', 'wordcount'
                    //     ],
                    //     init_instance_callback: () => {
                    //         tinymce.get("text").setContent($(".content").html());
                    //     }
                    // });
                });
            </script>

            <script>

            </script>

            <!-- Core JS -->
            <script src="assets/js/app.min.js"></script>
            <script src="assets/js/script.js"></script>
            <script src="assets/tinymce/tinymce.min.js"></script>

</body>
<?php
mysqli_close($conn);
?>

</html>