<?php  $path="http://$_SERVER[HTTP_HOST]".'/sgf';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGF</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$path;?>/estoque/Views/css/menu.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
   
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
    <div class="flex-row d-flex">
        <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" title="">Menu Principal</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <!-- <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul> -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#myAlert" data-toggle="collapse"><?=$this->dados[0]['usuario']?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Sair</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
            <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                <li class="nav-item"><a class="nav-link" href="<?=$path?>/Home/index">Inicio</a></li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Cadastros</a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link" href="">Report 1</a></li>
                       <li class="nav-item"><a class="nav-link" href="">Report 2</a></li>
                    </ul>
                </li> -->
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" data-target="#submenu1" href="" >Cartões</a>
                <ul class="list-unstyled flex-column pl-3 collapse <?php if($collapse=='painelcartao' || $collapse=='cadcartao'){ echo "show";}?>" id="submenu1" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link  <?php if($collapse=='painelcartao'){ echo "text-secondary";}?>" href="<?=$path?>/Home/cartoes">Painel</a></li>
                       <li class="nav-item"><a class="nav-link <?php if($collapse=='cadcartao'){ echo "text-secondary";}?>" href="<?=$path?>/Home/cadcartoes">Cadastro</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="collapse" data-target="#submenu2" href="<?=$path?>/Home/conta">Conta</a>
                    <ul class="list-unstyled flex-column pl-3 collapse <?php if($collapse=='painelconta' || $collapse=='cadconta'){ echo "show";}?>" id="submenu2" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link  <?php if($collapse=='painelconta'){ echo "text-secondary";}?>" href="<?=$path?>/Home/conta">Painel</a></li>
                       <li class="nav-item"><a class="nav-link <?php if($collapse=='cadconta'){ echo "text-secondary";}?>" href="<?=$path?>/Home/cadconta">Cadastro</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>
        <!--/col-->

