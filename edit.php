<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Editar contato</h1>

        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name">Nome do contato</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $contact['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="fone">Telefone do contato</label>
                <input type="text" class="form-control" id="fone" name="fone" value="<?= $contact['fone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="observations">Observação do contato</label>
                <textarea rows="3" type="text" class="form-control" name="observations" id="observations" required> <?= $contact['observations'] ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Atualizar</button>
        </form>
    </div>


<?php
    include_once("templates/footer.php");
?>