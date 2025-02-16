<?php
session_start();
require_once "../crud.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();
    
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
    
    $query = "INSERT INTO produtos (nome, ncm, descricao, fornecedor) VALUES (?, ?, ?, ?)";
    $params = [$nome, $ncm, $descricao, $fornecedor];
    
    $result = $db->executeQuery($query, $params);
    
    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Produto salvo com sucesso.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar no banco de dados.']);
    }

    if ($result) {
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Produto cadastrado com sucesso!'
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => 'Erro ao cadastrar o Produto.'
        ];
    }
    
    header("Location: ../../../produtos.php");
    exit;
}
