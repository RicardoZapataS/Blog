<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Codeigniter</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php

use App\Controllers\categoria;
use App\Models\CategoriaModel;

echo base_url();?>\css\fontawesome-free\css\all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/adminlte.min.css">
    <style>
        body {
            padding-top: 56px;
        }
    </style>
    <style type="text/css">
            body{
                font-family: 'Varela Round', sans-serif;
            }
            .form-control {
                box-shadow: none;		
                font-weight: normal;
                font-size: 13px;
            }
            .form-control:focus {
                border-color: #33cabb;
                box-shadow: 0 0 8px rgba(0,0,0,0.1);
            }
            .navbar-header.col {
                padding: 0 !important;
            }	
            .navbar {
                background: #fff;
                padding-left: 16px;
                padding-right: 16px;
                border-bottom: 1px solid #dfe3e8;
                border-radius: 0;
            }
            .nav-link img {
                border-radius: 50%;
                width: 36px;
                height: 36px;
                margin: -8px 0;
                float: left;
                margin-right: 10px;
            }
            .navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
                padding-left: 0;
                font-size: 20px;
                padding-right: 50px;
            }
            .navbar .navbar-brand b {
                font-weight: bold;
                color: #33cabb;		
            }
            .navbar .form-inline {
                display: inline-block;
            }
            .navbar .nav li {
                position: relative;
            }
            .navbar .nav li a {
                color: #888;
            }
            .search-box {
                position: relative;
            }	
            .search-box input {
                padding-right: 35px;
                border-color: #dfe3e8;
                border-radius: 4px !important;
                box-shadow: none
            }
            .search-box .input-group-addon {
                min-width: 35px;
                border: none;
                background: transparent;
                position: absolute;
                right: 0;
                z-index: 9;
                padding: 7px;
                height: 100%;
            }
            .search-box i {
                color: #a0a5b1;
                font-size: 19px;
            }
            .navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
                color: #fff;
                background: #33cabb;
                padding-top: 8px;
                padding-bottom: 6px;
                vertical-align: middle;
                border: none;
            }	
            .navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {		
                color: #fff;
                outline: none;
                background: #31bfb1;
            }
            .navbar .navbar-right li:first-child a {
                padding-right: 30px;
            }
            .navbar .nav-item i {
                font-size: 18px;
            }
            .navbar .dropdown-item i {
                font-size: 16px;
                min-width: 22px;
            }
            .navbar ul.nav li.active a, .navbar ul.nav li.open > a {
                background: transparent !important;
            }	
            .navbar .nav .get-started-btn {
                min-width: 120px;
                margin-top: 8px;
                margin-bottom: 8px;
            }
            .navbar ul.nav li.open > a.get-started-btn {
                color: #fff;
                background: #31bfb1 !important;
            }
            .navbar .dropdown-menu {
                border-radius: 1px;
                border-color: #e5e5e5;
                box-shadow: 0 2px 8px rgba(0,0,0,.05);
            }
            .navbar .nav .dropdown-menu li {
                color: #999;
                font-weight: normal;
            }
            .navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
                padding: 8px 20px;
                line-height: normal;
            }
            .navbar .navbar-form {
                border: none;
            }
            .navbar .dropdown-menu.form-wrapper {
                width: 280px;
                padding: 20px;
                left: auto;
                right: 0;
                font-size: 14px;
            }
            .navbar .dropdown-menu.form-wrapper a {		
                color: #33cabb;
                padding: 0 !important;
            }
            .navbar .dropdown-menu.form-wrapper a:hover{
                text-decoration: underline;
            }
            .navbar .form-wrapper .hint-text {
                text-align: center;
                margin-bottom: 15px;
                font-size: 13px;
            }
            .navbar .form-wrapper .social-btn .btn, .navbar .form-wrapper .social-btn .btn:hover {
                color: #fff;
                margin: 0;
                padding: 0 !important;
                font-size: 13px;
                border: none;
                transition: all 0.4s;
                text-align: center;
                line-height: 34px;
                width: 47%;
                text-decoration: none;
            }	
            .navbar .social-btn .btn-primary {
                background: #507cc0;
            }
            .navbar .social-btn .btn-primary:hover {
                background: #4676bd;
            }
            .navbar .social-btn .btn-info {
                background: #64ccf1;
            }
            .navbar .social-btn .btn-info:hover {
                background: #4ec7ef;
            }
            .navbar .social-btn .btn i {
                margin-right: 5px;
                font-size: 16px;
                position: relative;
                top: 2px;
            }
            .navbar .form-wrapper .form-footer {
                text-align: center;
                padding-top: 10px;
                font-size: 13px;
            }
            .navbar .form-wrapper .form-footer a:hover{
                text-decoration: underline;
            }
            .navbar .form-wrapper .checkbox-inline input {
                margin-top: 3px;
            }
            .or-seperator {
                margin-top: 32px;
                text-align: center;
                border-top: 1px solid #e0e0e0;
            }
            .or-seperator b {
                color: #666;
                padding: 0 8px;
                width: 30px;
                height: 30px;
                font-size: 13px;
                text-align: center;
                line-height: 26px;
                background: #fff;
                display: inline-block;
                border: 1px solid #e0e0e0;
                border-radius: 50%;
                position: relative;
                top: -15px;
                z-index: 1;
            }
            .navbar .checkbox-inline {
                font-size: 13px;
            }
            .navbar .navbar-right .dropdown-toggle::after {
                display: none;
            }
            @media (min-width: 1200px){
                .form-inline .input-group {
                    width: 300px;
                    margin-left: 30px;
                }
            }
            @media (max-width: 768px){
                .navbar .dropdown-menu.form-wrapper {
                    width: 100%;
                    padding: 10px 15px;
                    background: transparent;
                    border: none;
                }
                .navbar .form-inline {
                    display: block;
                }
                .navbar .input-group {
                    width: 100%;
                }
                .navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
                    display: block;
                }
            }
        </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top">
        <div class="navbar-header d-flex col">
            <a class="navbar-brand" href="#">Blog<b>Codeigniter</b></a>  		
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <ul class="nav navbar-nav">
                <?php
                    if(\Config\Services::session()->has('authUser'))
                        if(\Config\Services::session()->get('authUser')['permisos'] == '0')
                            echo '<li class="nav-item"><a href="'. base_url() .'/entrada" class="nav-link">Ver como admin</a></li>';
                    echo '<li class="nav-item"><a href="<?php echo base_url();?>" class="nav-link">inicio</a></li>';
                    foreach($datos as $dato){
                        echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            '.$dato['nombre'].'
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        $paginas = new CategoriaModel();
                        $paginas = $paginas->getPaginas($dato['id']);
                        foreach($paginas as $pagina)
                            echo '<a class="dropdown-item" href="'. base_url() . '/pagina/ver/'.$pagina['id'].'">'. $pagina['titulo'] .'</a>';
                        echo '</div>
                    </li>';
                    }
                ?>
            </ul>
            <?php 
            if(\Config\Services::session()->has('authUser'))
                echo '<ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fas fa-user"></i> '. \Config\Services::session()->get('authUser')['nombre'] .' </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="'. base_url() .'/login/cerrar">Cerrar sesion</a>
                    </div>
                </li></ul>';
            else
                echo '<ul class="nav navbar-nav navbar-right ml-auto">			
                <li class="nav-item">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
                    <ul class="dropdown-menu form-wrapper">					
                        <li>
                            <form action="'. base_url() .'/login/verificar">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo" required="required" name="correo">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="required" name="contraseña">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Registrate</a>
                    <ul class="dropdown-menu form-wrapper">					
                        <li>
                            <form action="'. base_url() .'/registrar/guardar">
                                <p class="hint-text">¡Completa los campos para crearte una cuenta!</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="correo" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Sign up">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>';
            ?>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Proyecto final
            <small>Entradas</small>
            </h1>
            <?php
                foreach($entradas as $entrada){
                    echo '<div class="card mb-4">
                            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">'.$entrada['titulo'].'</h2>
                                <p class="card-text">'.$entrada['contenido'].'</p>
                            </div>
                            <div class="card-footer text-muted">
                                Posteado en '. $entrada['created_at'] .' 
                            </div>
                        </div>';
                }

            ?>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
            </ul>

        </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5" style="background-color: #33cabb;">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?php echo base_url(); ?>/js/adminlte.js"></script>

</body>

</html>