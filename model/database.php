<?php

# Donnée pour láccès a la base de données: login et mdp
define("DB_USER",     "root");
define("DB_PASS",     "");

/* Connection à la base de donnée SQL */
$dsn = 'mysql:dbname=fansticker;host=localhost';
$pdo = new PDO($dsn, DB_USER, DB_PASS);




