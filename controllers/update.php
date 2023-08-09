<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$db->query('update branches set branch = :branch, contact = :contact, county = :county, sub_county = :sub_county where id = :id',
    [
        'id' => $_POST['id'],
        'branch' => $_POST['branch'],
        'contact' => $_POST['contact'],
        'county' => $_POST['county'],
        'sub_county' => $_POST['sub_county']
    ]);

//redirect the user
header('location: /');
die();