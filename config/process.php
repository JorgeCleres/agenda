<?php

    session_start();

    include_once('connection.php');
    include_once('url.php');

    $data = $_POST;

    //inserção de dados
    if(!empty($data)) {
        //criar contato
        if($data['type'] === 'create') {
            $name = $data['name'];
            $fone = $data['fone'];
            $observations = $data['observations'];

            $query = "INSERT INTO contacts  (name, fone, observations) VALUES (:name, :fone, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":fone", $fone);
            $stmt->bindParam(":observations", $observations);

            try {
                $stmt->execute();
                $_SESSION['msg'] = 'Contato criado com sucesso';
        
            } catch(PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Error: $error";
            }
        }

        //redirect HOME
        header("location:" . $BASE_URL . "../index.php" );

    } else {
        $id;
        if(!empty($_GET)) {
            $id = $_GET['id'];
        }

        if(!empty($id)) {
            //RETORNA UIM CONTATO
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();
        } else {
            //RETORNA TODOS OS CONTATOS
            $contacts = [];
            $query = "SELECT * FROM contacts";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $contacts = $stmt->fetchall();
        }
    }

    //fechar conexao
    $conn = null;
