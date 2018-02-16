<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NewBGP</title>
        <!-- Bootstrap core CSS-->
        <link href="<?= $public ?>templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?= $public ?>templates/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="<?= $public ?>templates/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="<?= $public ?>templates/css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.html">Newbgp</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="<?= $url ?>admin/home">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Resumo</span>
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pessoas">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePessoas" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Pessoas</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapsePessoas">
                            <li>
                                <a href="<?= $url ?>admin/pessoas/usuarios/index">Usuários</a>
                            </li>
                            <li>
                                <a href="<?= $url ?>admin/pessoas/clientes/index">Clientes</a>
                            </li>

                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Code">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCode" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-code"></i>
                            <span class="nav-link-text">Projetos</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseCode">
                            <li>
                                <a href="<?= $url; ?>admin/projetos/lista">Lista</a>
                            </li>
                            <li>
                                <a href="<?= $url; ?>admin/projetos/ponto">Ponto</a>
                            </li>
                            <li>
                                <a href="<?= $url; ?>admin/projetos/senhas">Senhas</a>
                            </li>
                            <li>
                                <a href="<?= $url; ?>admin/projetos/resumo">Resumo</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Comercial">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComercial" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-line-chart "></i>
                            <span class="nav-link-text">Comercial</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComercial">
                            <li>
                                <a href="">Propagandas</a>
                            </li>
                            <li>
                                <a href="cards.html">Lista</a>
                            </li>
                            <li>
                                <a href="cards.html">Leads</a>
                            </li>
                            <li>
                                <a href="cards.html">Resumo</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Financeiro">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFinaceiro" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-money"></i>
                            <span class="nav-link-text">Financeiro</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseFinaceiro">
                            <li>
                                <a href="">A Receber</a>
                            </li>
                            <li>
                                <a href="cards.html">A Pagar</a>
                            </li>
                            <li>
                                <a href="cards.html">Contas</a>
                            </li>
                            <li>
                                <a href="cards.html">Resumo</a>
                            </li>
                        </ul>
                    </li>

                    <!--
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Financeira">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFinanceira" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-money"></i>
                            <span class="nav-link-text">Financeira</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseFinanceira">
                            <li>
                                <a href="navbar.html">Contas</a>
                            </li>
                            <li>
                                <a href="cards.html">Entradas</a>
                            </li>
                            <li>
                                <a href="cards.html">Saídas</a>
                            </li>
                            <li>
                                <a href="cards.html">Fechamentos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Compras">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCompras" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-credit-card"></i>
                            <span class="nav-link-text">Compras</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseCompras">
                            <li>
                                <a href="navbar.html">Nova Compra</a>
                            </li>
                            <li>
                                <a href="cards.html">Compras</a>
                            </li>
                            <li>
                                <a href="cards.html">Ruptura de Estoque</a>
                            </li>
                            <li>
                                <a href="cards.html">Sobrecarga de Estoque</a>
                            </li>
                            <li>
                                <a href="cards.html">Tempo de Venda</a>
                            </li>
                        </ul>
                    </li>
                    -->
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active"><?= $titulo ?></li>
                </ol>
                <!--<div class="row">-->
                <!--                    <div class="col-12">-->
                <?= $content ?>
                <!--</div>-->
                <!--</div>-->
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Your Website 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="<?= $public ?>templates/vendor/jquery/jquery.min.js"></script>
            <?php
            import( "jquery" ) ;
            import( "pkj" ) ;
            import( "datatables" ) ;
            import( "bind" ) ;
            import( "mask" ) ;
            ?>
            <script>
                $(function () {
                    $("input[type='password']").addClass('form-control');
                })
            </script>


            <script src="<?= $public ?>templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="<?= $public ?>templates/vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="<?= $public ?>templates/js/sb-admin.min.js"></script>
            <!--<script src="<?= $public ?>templates/vendor/datatables/jquery.dataTables.js"></script>-->
            <!--<script src="<?= $public ?>templates/js/sb-admin-datatables.min.js"></script>-->

        </div>
    </body>

</html>
