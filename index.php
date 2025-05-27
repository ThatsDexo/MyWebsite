<?php

require "functions.php";
require "router.php";
require "Database.php";

$db = new Database();
$posts = $db->query("SELECT * FROM wall;")->fetch(PDO::FETCH_ASSOC);


foreach($posts as $post){
    echo "<li>{$post["message"]}</li>";
}

