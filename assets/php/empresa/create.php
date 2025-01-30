<?php
require_once "../crud.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();
    
    $razao_social = trim($_POST['razao_social'] ?? '');
    $cnpj = trim($_POST['cnpj'] ?? '');
    $tipo_logradouro = trim($_POST['tipo_logradouro'] ?? '');
    $logradouro = trim($_POST['logradouro'] ?? '');
    $numero = trim($_POST['numero'] ?? '');
    $complemento = trim($_POST['complemento'] ?? '');
    $cep = trim($_POST['cep'] ?? '');
    $estado = trim($_POST['estado'] ?? '');
    $cidade = trim($_POST['cidade'] ?? '');
    $bairro = trim($_POST['bairro'] ?? '');
    
    $errors = [];
    
    if (empty($razao_social)) {
        $errors['razao_social'] = 'O campo Razão Social é obrigatório.';
    }
    if (empty($cnpj) || !is_numeric($cnpj)) {
        $errors['cnpj'] = 'O campo CNPJ é obrigatório e deve conter apenas números.';
    }
    if (empty($tipo_logradouro)) {
        $errors['tipo_logradouro'] = 'O campo Tipo de Logradouro é obrigatório.';
    }
    if (empty($logradouro)) {
        $errors['logradouro'] = 'O campo Logradouro é obrigatório.';
    }
    if (empty($numero) || !is_numeric($numero)) {
        $errors['numero'] = 'O campo Número é obrigatório e deve conter apenas números.';
    }
    if (empty($cep)) {
        $errors['cep'] = 'O campo CEP é obrigatório.';
    }
    if (empty($estado)) {
        $errors['estado'] = 'O campo Estado é obrigatório.';
    }
    if (empty($cidade)) {
        $errors['cidade'] = 'O campo Cidade é obrigatório.';
    }
    if (empty($bairro)) {
        $errors['bairro'] = 'O campo Bairro é obrigatório.';
    }
    
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    print_r($_POST);
    $query = "INSERT INTO empresa (razao_social, cnpj, tipo_logradouro, logradouro, numero, complemento, cep, estado, cidade, bairro) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = [$razao_social, $cnpj, $tipo_logradouro, $logradouro, $numero, $complemento, $cep, $estado, $cidade, $bairro];
    
    $result = $db->executeQuery($query, $params);
    
    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Empresa salvo com sucesso.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar no banco de dados.']);
    }
}
