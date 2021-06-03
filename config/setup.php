<?php
  require_once './database.php';
  try {
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $options);
  } catch (PDOException $e) {
    if ($e->getCode() == 1049) {
      die('no database' . PHP_EOL);
    } else {
      die($e);
    }
  }