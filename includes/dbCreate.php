<?php

//Importing Db and schema
$schema = file_get_contents(BASEDIR . "/data/schema.sql");
$db = file_get_contents (BASEDIR . "/data/database.sql");

//Creating
$pdo->exec($db);
$pdo->exec($schema);