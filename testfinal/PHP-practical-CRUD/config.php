<?php
class Database {
  private $connection;
  private $statement;

  public function __construct() {
    $connectionString = "mysql:host=localhost;dbname=crudoperation;port=3307";

    try {
        $this->connection = new PDO($connectionString, "root", "", [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Enable error handling
        ]);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
  }

  public function query($sql, $params = []) {
    $this->statement = $this->connection->prepare($sql);
    $this->statement->execute($params);
    return $this;
  }

  public function get() {
    return $this->statement->fetchAll();
  }

  public function find() {
    return $this->statement->fetch();
  }

  public function lastInsertId() {
    return $this->connection->lastInsertId();
  }
  
  public function getConnection() {
    return $this->connection;
  }
}

// Initialize the database connection
$db = new Database();
$pdo = $db->getConnection();
?>
