<?php

$pdo = new PDO("mysql:host=localhost;dbname=gestion_bancaire",'abdoulaye','rootladi');

var_dump($pdo->query('SELECT * FROM profil')->fetchAll());