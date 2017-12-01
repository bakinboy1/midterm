<?php
    $dsn = 'mysql:host=localhost;dbname=courseDB';
    $username = 'mgs_user';
    $password = 'pa55word';
    $servername= "localhost";
    $dbname='courseDB';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>