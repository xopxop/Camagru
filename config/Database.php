<?php
  class Database {
    private $_options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    private $_stmt;
    private $_db;

    public function __construct($dsn, $user, $password) {
      try {
        $this->_db = new PDO($dsn, $user, $password, $this->_options);
      } catch (PDOException $e) {
        throw $e;
      }
    }

    public function query($sql) {
      $this->_stmt = $this->_db->prepare($sql);
    }

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
  }