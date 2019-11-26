<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>fontawesome/css/all.css">   
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark container" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#hamburguer" aria-expanded="false" aria-controls="hamburguer" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>                  
            </button>          
        
            <div id="hamburguer" class="collapse navbar-collapse">
                <ul class="navbar-nav">        
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASEURL; ?>customers">Gerenciar Clientes </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente </a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>

    <main class="container">