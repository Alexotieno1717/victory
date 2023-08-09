<?php

use Core\Database;



$config = require base_path('config.php');
$db = new Database($config['database']);

$branches = $db->query("select * from branches ORDER BY id DESC")->get();

//dd($branches);


view('index.view.php', [
    'branches' => $branches
]);