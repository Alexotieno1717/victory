<?php


use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$branch = $db->query("select * from branches where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

view("show.view.php", [
    'branch' => $branch
]);