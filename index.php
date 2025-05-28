<?php

require "functions.php";
require "Database.php";
require "router.php";

$config = require "config.php";
$db = new Database($config["database"], "data_grip", "kwarner");




