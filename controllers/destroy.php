<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$db->query("delete from branches where id = :id", [
    'id' => $_POST['id']
]);

header('location: /');
exit();