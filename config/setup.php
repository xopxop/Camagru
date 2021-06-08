<?php
  require_once __DIR__ . '/database.php';
  require_once __DIR__ . '/../app/libraries/Database.php';

  try {
    $dbh = new Database($DB_DSN, $DB_USER, $DB_PASSWORD);
  } catch (PDOException $e) {
    die($e);
  }

  $sql = "CREATE DATABASE IF NOT EXISTS {$DB_NAME}";
  $dbh->query($sql);
  $dbh->execute($sql);

  $sql = "USE {$DB_NAME}";
  $dbh->query($sql);
  $dbh->execute($sql);

  $sql = "CREATE TABLE IF NOT EXISTS users (";
  $sql .= "id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
  $sql .= "firstname VARCHAR(30) NOT NULL,";
  $sql .= "lastname VARCHAR(30) NOT NULL)";
  $dbh->query($sql);
  $dbh->execute($sql);