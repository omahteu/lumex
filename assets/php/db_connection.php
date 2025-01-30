<?php
// db_connection.php
class DBConnection {
    private static $host = "localhost";
    private static $dbname = "lumex";
    private static $username = "root";
    private static $password = "";
    private static $conn;

    public static function getConnection() {
        if (!self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die(json_encode(["error" => "Erro na conexão: " . $e->getMessage()]));
            }
        }
        return self::$conn;
    }
}
?>
