<?php

// $task = [
//     'name' => 'Comprar llet',
//     'description' => 'Al Lidl',
//     'completed' => true,
// ];

//try {
//    $pdo = new PDO('mysql:host=127.0.0.1:dbname=tasks', 'debian-sys-maint', 'Sw8lPYpAFLi5B3n4');
//} catch (PDOException $e) {
//    die($e -> getMessage());
//};

class Task
{
    public $name;
    public $description;
    public $completed;
}


try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks', 'debian-sys-maint', 'Sw8lPYpAFLi5B3n4');
} catch (PDOException $e) {
    die($e->getMessage());
}

$query = $pdo->prepare('SELECT * FROM tasks');

$query->execute();

$results = $query->fetchAll(PDO::FETCH_CLASS, 'Task');

$task = $results[0];
