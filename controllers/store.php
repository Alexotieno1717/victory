<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if (! Validator::string($_POST['branch'], 1, 255)) {
    $errors['branch'] = 'A minimum of 1 characters is required.';
}

if (! Validator::string($_POST['contact'], 1, 15)) {
    $errors['contact'] = 'Cannot exceed a minimum of 15 characters.';
}

//if (! Validator::string($_POST['sub_county'], 0, 255)) {
//    $errors['county'] = 'A minimum of 1 characters is required.';
//}

if (! Validator::string($_POST['county'], 1, 15)) {
    $errors['county'] = 'Please select your county.';
}

// Calling the json data
$jsonData = file_get_contents('../counties.json');
$counties = json_decode($jsonData, true);

// Sort the counties array by county name in ascending order
usort($counties, function ($a, $b) {
    return intval($a['code']) - intval($b['code']);
});

if (! empty($errors)) {
    return view("create.view.php", [
        'errors' => $errors,
        'counties' => $counties
    ]);
}

$db->query('INSERT INTO branches(branch, contact, county, sub_county) VALUES (:branch, :contact, :county, :sub_county)', [
    'branch' => $_POST['branch'],
    'contact' => $_POST['contact'],
    'county' => $_POST['county'],
    'sub_county' => $_POST['sub_county'],
]);


header('location: /');
die();