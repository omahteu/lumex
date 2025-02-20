<?php
session_start();
require_once "../crud.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $deleted_at = date("Y-m-d H:i:s");

    $db = new Database();
    $query = "UPDATE produtos SET deleted_at = ? WHERE id = ?";
    $result = json_decode($db->executeQuery($query, [$deleted_at, $id]), true);

    if ($result["affected_rows"] > 0) {
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Cliente removido com sucesso!'
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => 'Erro ao remover o cliente.'
        ];
    }

    http_response_code(204);
    exit;
}
