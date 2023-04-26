<?php
session_start();
ob_start();
include_once 'conexao.php';

$sql = "SELECT * FROM status_deferimento";

$result = $conn->prepare($sql);
$result->execute();
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row){
    echo var_dump($row);
}