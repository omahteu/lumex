<?php
// Database.php
require_once "db_connection.php";

class Database {
    private $conn;

    public function __construct() {
        $this->conn = DBConnection::getConnection();
    }

    public function executeQuery($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            
            if (stripos($query, "SELECT") === 0) {
                return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
            } elseif (stripos($query, "INSERT") === 0) {
                return json_encode(["last_insert_id" => $this->conn->lastInsertId()]);
            } else {
                return json_encode(["affected_rows" => $stmt->rowCount()]);
            }
        } catch (PDOException $e) {
            return json_encode(["error" => "Erro na execução da query: " . $e->getMessage()]);
        }
    }
}

// Exemplo de uso:
//$db = new Database();
//echo $db->executeQuery("SELECT * FROM usuarios WHERE id = ?", [1]);
//echo $db->executeQuery("INSERT INTO usuarios (nome, email) VALUES (?, ?)", ["João", "joao@email.com"]);
//echo $db->executeQuery("UPDATE usuarios SET nome = ? WHERE id = ?", ["Maria", 1]);
//echo $db->executeQuery("DELETE FROM usuarios WHERE id = ?", [1]);
?>