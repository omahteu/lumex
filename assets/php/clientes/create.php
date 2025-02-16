<?php
require_once "../crud.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $errors = [];
    $db = new Database();

    // Verifica se é uma atualização
    $is_update = isset($_POST['id']) && !empty($_POST['id']);
    
    // Validação dos campos obrigatórios
    $required_fields = ["nome_cliente", "cpf_cliente", "unidade_consumidora", "logradouro", "numero", "bairro", "cidade", "estado", "tipo_fase", "distribuidora"];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "O campo $field é obrigatório.";
        }
    }

    // Validação numérica
    $numeric_fields = ["cpf_cliente", "unidade_consumidora", "numero", "cep", "distribuidora"];
    for ($i = 1; $i <= 12; $i++) {
        $numeric_fields[] = "mes_$i";
    }
    foreach ($numeric_fields as $field) {
        if (!empty($_POST[$field]) && !ctype_digit($_POST[$field])) {
            $errors[] = "O campo $field deve conter apenas números.";
        }
    }

    if (!empty($errors)) {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => implode("<br>", $errors)
        ];
        echo json_encode(["status" => "error", "messages" => $errors]);
        exit;
    }

    if ($is_update) {
        // Atualização
        $query = "UPDATE clientes SET nome = ?, cpf = ?, unidade_consumidora = ?, tipo_logradouro = ?, logradouro = ?, numero = ?, complemento = ?, cep = ?, bairro = ?, cidade = ?, estado = ?, descricao_unidade_consumidora = ?, tipo_fase = ?, distribuidora = ?, mes_1 = ?, mes_2 = ?, mes_3 = ?, mes_4 = ?, mes_5 = ?, mes_6 = ?, mes_7 = ?, mes_8 = ?, mes_9 = ?, mes_10 = ?, mes_11 = ?, mes_12 = ? WHERE id = ?";
        
        $params = [
            $_POST["nome_cliente"], $_POST["cpf_cliente"], $_POST["unidade_consumidora"], $_POST["tipo_logradouro"], $_POST["logradouro"], $_POST["numero"], $_POST["complemento"], $_POST["cep"],
            $_POST["bairro"], $_POST["cidade"], $_POST["estado"], $_POST["descricao_unidade_consumidora"], $_POST["tipo_fase"], $_POST["distribuidora"],
            $_POST["mes_1"], $_POST["mes_2"], $_POST["mes_3"], $_POST["mes_4"], $_POST["mes_5"], $_POST["mes_6"], $_POST["mes_7"],
            $_POST["mes_8"], $_POST["mes_9"], $_POST["mes_10"], $_POST["mes_11"], $_POST["mes_12"], $_POST["id"]
        ];
        
        $result = $db->executeQuery($query, $params);

        if ($result) {
            $_SESSION['message'] = [
                'type' => 'success',
                'text' => 'Cliente atualizado com sucesso!'
            ];
        } else {
            $_SESSION['message'] = [
                'type' => 'error',
                'text' => 'Erro ao atualizar o cliente.'
            ];
        }
    } else {
        // Inserção
        $query = "INSERT INTO clientes (nome, cpf, unidade_consumidora, tipo_logradouro, logradouro, numero, complemento, cep, bairro, cidade, estado, descricao_unidade_consumidora, tipo_fase, distribuidora, mes_1, mes_2, mes_3, mes_4, mes_5, mes_6, mes_7, mes_8, mes_9, mes_10, mes_11, mes_12) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $params = [
            $_POST["nome_cliente"], $_POST["cpf_cliente"], $_POST["unidade_consumidora"], $_POST["tipo_logradouro"], $_POST["logradouro"], $_POST["numero"], $_POST["complemento"], $_POST["cep"],
            $_POST["bairro"], $_POST["cidade"], $_POST["estado"], $_POST["descricao_unidade_consumidora"], $_POST["tipo_fase"], $_POST["distribuidora"],
            $_POST["mes_1"], $_POST["mes_2"], $_POST["mes_3"], $_POST["mes_4"], $_POST["mes_5"], $_POST["mes_6"], $_POST["mes_7"],
            $_POST["mes_8"], $_POST["mes_9"], $_POST["mes_10"], $_POST["mes_11"], $_POST["mes_12"]
        ];

        $result = $db->executeQuery($query, $params);
        
        if ($result) {
            $_SESSION['message'] = [
                'type' => 'success',
                'text' => 'Cliente cadastrado com sucesso!'
            ];
        } else {
            $_SESSION['message'] = [
                'type' => 'error',
                'text' => 'Erro ao cadastrar o cliente.'
            ];
        }
    }

    header("Location: ../../../clientes.php");
    exit;
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
}
