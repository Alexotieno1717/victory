<?php
// Database configuration

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database2']);

// Get the input dates from the form
$ussd_string = $_POST['ussd_string'];
$start_date = $_POST['from'];
$end_date = $_POST['to'];

//// Query to fetch data from the table
//#$query = "SELECT 'MSISDN', 'SESSION_ID', 'SERVICE_CODE', 'USSD_STRING', 'dateCreated', 'dateModified' AS dateAccessed FROM ussdRequestLogs WHERE SERVICE_CODE = '*617#' AND USSD_STRING = '200' AND DATE(dateModified) >= '2023-05-05' GROUP BY SESSION_ID";
$ussd = $db->query("SELECT * FROM ussdRequestLogs
    WHERE SERVICE_CODE = '*617#' AND USSD_STRING = :ussd_string
    AND DATE(dateModified) BETWEEN :start_date AND :end_date", [
    'ussd_string' => $ussd_string,
    ':start_date' => $start_date,
    ':end_date' => $end_date
])->get();

//dd($ussd);

view('filter.view.php', [
    'ussd' => $ussd
]);

