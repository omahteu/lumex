<?php
session_start();
require_once "../crud.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $id = $_POST['id'] ?? null;
    $nome = trim($_POST['nome'] ?? '');
    $ncm = trim($_POST['ncm'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $fornecedor = trim($_POST['fornecedor'] ?? '');

    $errors = [];

    if (empty($nome)) {
        $errors['nome'] = 'O campo Nome do produto é obrigatório.';
    }
    if (empty($ncm) || !is_numeric($ncm)) {
        $errors['ncm'] = 'O campo NCM é obrigatório e deve conter apenas números.';
    }
    if (empty($descricao)) {
        $errors['descricao'] = 'O campo Descrição do produto é obrigatório.';
    }
    if (empty($fornecedor)) {
        $errors['fornecedor'] = 'O campo Fornecedor é obrigatório.';
    }

    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    if (!empty($id)) {
        // Atualização
        $query = "UPDATE produtos SET nome = ?, ncm = ?, descricao = ?, fornecedor = ? WHERE id = ?";
        $params = [$nome, $ncm, $descricao, $fornecedor, $id];
        $action = "atualizado";
    } else {
        // Inserção
        $query = "INSERT INTO produtos (nome, ncm, descricao, fornecedor) VALUES (?, ?, ?, ?)";
        $params = [$nome, $ncm, $descricao, $fornecedor];
        $action = "cadastrado";
    }

    $result = $db->executeQuery($query, $params);

    if ($result) {
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => "Produto $action com sucesso!"
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => "Erro ao $action o produto."
        ];
    }

    header("Location: ../../../produtos.php");
    exit;
} else {
    echo json_encode(["success" => false, "message" => "Método inválido."]);
}
