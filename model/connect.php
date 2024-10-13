<?php
  class connectDB {
    private $hostname = "localhost";
    private $username = "root";
    private $databasename = "quanlybansach";
    private $password = "";
    public $conn;
  
    public function __construct() {
        $this->conn = new mysqli(hostname: $this->hostname, username: $this->username, password: $this->password, database: $this->databasename);
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
    }
    
    // Return table (records)
    public function query($sql): bool|mysqli_result {
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Lỗi truy vấn: " . $this->conn->error."<br>".$sql);
        }
        return $result;
    }
  
    // For insert, delete, update
    public function execute($sql): bool {
        $result = $this->conn->query(query: $sql);
        if ($result) { // Sử dụng $result để kiểm tra số lượng dòng ảnh hưởng
            return true;
        }
        return false;
    }

    // Close database
    public function close(): void {
        mysqli_close($this->conn);
    }

    public function selectAll($tableName): bool|mysqli_result {
        $sql = "SELECT * FROM $tableName";
        $result = $this->conn->query(query: $sql);
        if (!$result) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }
        return $result;
    }
  }
?>