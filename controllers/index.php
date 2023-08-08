<?php

use Core\Database;



$config = require base_path('config.php');
$db = new Database($config['database']);

$data = $db->query("select * from branches")->get();

//dd($data);


view('index.view.php', [
    'data' => $data
]);