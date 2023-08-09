<?php

// Calling the json data
$jsonData = file_get_contents('../counties.json');
$counties = json_decode($jsonData, true);

// Sort the counties array by county name in ascending order
usort($counties, function ($a, $b) {
    return intval($a['code']) - intval($b['code']);
});

//dd($counties);

view('create.view.php', [
    'counties' => $counties
]);