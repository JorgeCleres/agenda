<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Criar contato</h1>

        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="fone">Telefone do contato</label>
                <input type="text" class="form-control" id="fone" name="fone" required>
            </div>
            <div class="form-group">
                <label for="observations">Observação do contato</label>
                <textarea rows="3" type="text" class="form-control" id="observations" name="observations" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>


<?php
    include_once("templates/footer.php");
?>