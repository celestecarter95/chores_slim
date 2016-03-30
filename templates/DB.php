<?php

class DB {

  private $dateClicked;

  private $connection;

  function __construct() {
    // connect to database
    $this->connection = new PDO('mysql:host=mysql.cs.dixie.edu;dbname=ccarter', 'ccarter', 'helloworld5595');
  }

  function createChore($chore) {
    //print_r($chore);
    $sql = 'INSERT INTO chore (chore_name, user_id, date) VALUES (:chore_name, :user_id, :date)';
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam('chore_name', $chore['chore_name']);
    $stmt->bindParam('user_id', $chore['user_id']);
    $date = $chore['date'];
    date('Y-m-d', strtotime(urldecode($date)));
    $stmt->bindParam('date', $date);
    $stmt->execute();
    return $this->connection->lastInsertId();
    //return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function getChore($chore_id) {
    $sql = 'SELECT chore.chore_name, users.first_name, users.last_name, chore.date
            FROM chore
            LEFT JOIN users
            ON chore.user_id=users.id
            WHERE chore.id = :chore_id';
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam('chore_id', $chore_id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function getAllChores() {
    $sql = 'SELECT * FROM chore';
    //$sql = 'SELECT chore.chore_name, users.first_name, users.last_name, chore.date
    //        FROM chore
    //        LEFT JOIN users
    //        ON chore.user_id=users.id';
    $stmt = $this->connection->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function getAllUsers() {
    $sql = 'SELECT * FROM users';
    $stmt = $this->connection->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
