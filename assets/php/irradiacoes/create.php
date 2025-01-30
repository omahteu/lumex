<?php
require_once "../crud.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();
    
    $estado = trim($_POST['estado'] ?? '');
    $cidade = trim($_POST['cidade'] ?? '');
    $irradiacao = trim($_POST['irradiacao'] ?? '');
    // $arquivo = $_FILES['arquivo'] ?? null;
    
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
    // if (!$arquivo || $arquivo['error'] !== UPLOAD_ERR_OK) {
    //     $errors['arquivo'] = 'Erro no upload do arquivo.';
    // } elseif (pathinfo($arquivo['name'], PATHINFO_EXTENSION) !== 'xlsx') {
    //     $errors['arquivo'] = 'O arquivo deve ser um .xlsx válido.';
    // }
    
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    
    // $novo_nome_arquivo = uniqid('arquivo_', true) . '.xlsx';
    
    // if (!move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $novo_nome_arquivo)) {
    //     echo json_encode(['success' => false, 'message' => 'Erro ao salvar o arquivo no servidor.']);
    //     exit;
    // }
    
    // $query = "INSERT INTO tabela (estado, cidade, irradiacao, arquivo_nome) VALUES (?, ?, ?, ?)";
    // $params = [$estado, $cidade, $irradiacao, $novo_nome_arquivo];

    $query = "INSERT INTO irradiacoes (estado, cidade, irradiacao) VALUES (?, ?, ?)";
    $params = [$estado, $cidade, $irradiacao];
    
    $result = $db->executeQuery($query, $params);
    
    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Registro salvo com sucesso.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar no banco de dados.']);
    }
}
