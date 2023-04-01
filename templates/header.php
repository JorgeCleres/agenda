<?php

    include_once("config/url.php");
    include_once("config/process.php");

    ///limpa a mensagem
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="<?= $BASE_URL ?>index.php">
            <img class="navbar-brand" src="<?= $BASE_URL ?>img/agenda.png" alt="logo agenda">
        </a>
        <div>
            <div class="navbar-nav">
                <a href="<?= $BASE_URL ?>index.php" id="home-link" class="nav-link active">Agenda</a>
                <a href="<?= $BASE_URL ?>create.php" id="home-link" class="nav-link active">Criar Contato</a>
            </div>
        </div>
    </nav>
</header>

<body>