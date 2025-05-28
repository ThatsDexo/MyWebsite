<?php

$heading = "Notes";


$config = require "config.php";
$db = new Database($config["database"], "data_grip", "kwarner");

$query = "SELECT * FROM notes WHERE user_id = 2;";
$notes = $db->query($query)->fetchAll();

require "views/notes.view.php";

