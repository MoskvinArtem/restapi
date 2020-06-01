<?php
class database {
  private $host = "localhost";
  private $db_name = "api_db";
  private $user = "root";
  private $pass = "";
  public $conn;

  public function getConnection () {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->user, $this->pass);
      $this->conn->exec("set_names_utf8");
    } catch (PDOException $exception) {
      echo "Connection error: " . $exception->getMessage();
    }

    return $this->conn;
  }
}
?>
