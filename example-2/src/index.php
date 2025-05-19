<?php

$pdo = new PDO('mysql:host=db;dbname=testdb', 'root', 'rootpass');
$stmt = $pdo->query("SELECT NOW()");
echo "Heure actuelle en BDD : " . $stmt->fetchColumn();
