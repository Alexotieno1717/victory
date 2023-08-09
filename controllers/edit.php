<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// Calling the json data
$jsonData = file_get_contents('../counties.json');
$counties = json_decode($jsonData, true);

// Sort the counties array by county name in ascending order
usort($counties, function ($a, $b) {
    return intval($a['code']) - intval($b['code']);
});

$branch = $db->query("select * from branches where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

view("edit.view.php", [
    'branch' => $branch,
    'counties' => $counties
]);