<?php
    include_once("templates/header.php");
?>

    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title"><?= $contact['name'] ?></h1>
        <p id="bold">Telefone:</p>
        <p><?= $contact['fone'] ?></p>
        <p id="bold">Observação:</p>
        <p><?= $contact['observations'] ?></p>
    </div>

<?php
    include_once("templates/footer.php");
?>