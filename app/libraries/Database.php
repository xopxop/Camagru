<?php
  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */

  class Database {
    private $_options = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    private $_db;
    private $_stmt;

    public function __construct($dsn, $user, $password) {
      try {
        $this->_db = new PDO($dsn, $user, $password, $this->_options);
      } catch (PDOException $e) {
        throw $e;
      }
    }

    // Prepare statement with query
    public function query($sql) {
      $this->_stmt = $this->_db->prepare($sql);
    }

    // Bind values
    public function bind($param, $value, $type = null) {
      if (is_null($type)) {
        switch(true) {
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          default:
            $type = PDO::PARAM_STR;
        }
      }

      $this->_stmt->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function execute() {
      return $this->_stmt->execute();
    }

    // Get result set as array of object
    public function fetchAll() {
      $this->execute();
      return $this->_stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Get single record as object
    public function fetch() {
      $this->execute();
      return $this->_stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get row count
    public function rowCount() {
      return $this->stmt->rowCount();
    }
  }
