<?php
include('../verificar-autenticidade.php');
include('../conexao_pdo.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ordem & Servac | Clientes</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../dist/plugins/fontawesome-free/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../dist/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../dist/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("../nav.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include("../aside.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content mt-3 ">
                <div class="container-fluid">
                    <!-- LISTA DE SERVICOS -->
                    <div class="row">
                        <div class="col">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Lista de serviço</h3>
                                    <a href="./form.php" class="btn btn-sm btn-primary float-right">
                                        Adicionar
                                        <i class="i bi-plus"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>CÓD</th>
                                                <th>SERVIÇO</th>
                                                <th>OPÇÕES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "
                                            SELECT pk_servico, servico
                                            FROM servicos
                                            ORDER BY servico
                                            ";
                                            $stmt = $conn->prepare($sql);
                                            $stmt->execute();

                                            $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

                                            foreach ($dados as $row) {
                                                echo '
                                                <tr>
                                                <td>' . $row->pk_servico . '</td>
                                                <td class="text-center">' . $row->servico . '</td>
                                                <td class="text-center">
                                                    <a 
                                                    href="form.php?ref=' . base64_encode($row->pk_servico) . '" class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></a>
                                                    <a onclick= "if(confirm(\'Deseja realmente remover este registro? \'))
                                                    {window.location=\'remover.php?ref' . base64_encode($row->pk_servico) . '\'} "
                                                    href="remover.php?ref=' . base64_encode($row->pk_servico) . '" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                                ';
                                            }

                                            ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php include("../footer.php"); ?>
        <!-- Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../dist/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../dist/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../dist/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../dist/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- SWeetAlert2 -->
    <script src="../dist/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?php
    include("../sweet_alert_2.php");
    ?>
    <script>
        $(function() {

            $("#theme_mode").click(function() {
                // PEGAR ATRIBUTO CLASS DO OBJETO
                var classMode = $("#theme_mode").attr("class")
                if (classMode == "fas fa-sun") {
                    $("body").removeClass("dark-mode")
                    $("#theme_mode").attr("class", "fas fa-moon")
                    $("#navTopo").attr("class", "main-header navbar navbar-expand navbar-white navbar-light")
                    $("#asideMenu").attr("class", "main-sidebar sidebar-light-primary elevation-4")
                } else {
                    $("body").addClass("dark-mode")
                    $("#theme_mode").attr("class", "fas fa-sun")
                    $("#navTopo").attr("class", "main-header navbar navbar-expand navbar-black navbar-dark")
                    $("#asideMenu").attr("class", "main-sidebar sidebar-dark-primary elevation-4")
                }
            });
        });
    </script>
</body>

</html>