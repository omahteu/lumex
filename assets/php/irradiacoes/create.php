<?php
session_start();
require_once "../crud.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();
    
    $estado = trim($_POST['estado'] ?? '');
    $cidade = trim($_POST['cidade'] ?? '');
    $irradiacao = trim($_POST['irradiacao'] ?? '');
    
    $errors = [];
    
    if (empty($estado)) {
        $errors['estado'] = 'O campo Estado é obrigatório.';
    }
    if (empty($cidade)) {
        $errors['cidade'] = 'O campo Cidade é obrigatório.';
    }
    if (empty($irradiacao) || !is_numeric($irradiacao)) {
        $errors['irradiacao'] = 'O campo Irradiação é obrigatório e deve conter apenas números.';
    }
    
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    
    $query = "INSERT INTO irradiacoes (estado, cidade, irradiacao) VALUES (?, ?, ?)";
    $params = [$estado, $cidade, $irradiacao];
    
    $result = $db->executeQuery($query, $params);
    
    if ($result) {
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Irradiação cadastrado com sucesso!'
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => 'Erro ao cadastrar o irradiação.'
        ];
    }
    
    header("Location: ../../../irradiacoes.php");
    exit;
}
