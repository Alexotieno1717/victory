<?php
// Database configuration

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database2']);

$ussd = $db->query("SELECT * FROM ussdRequestLogs")->get();




//dd($ussd);

// Open the CSV file for writing
//$filename = 'ussdLogs100.csv';
//$file = fopen($filename, 'w');
//
//// Write the column headers to the CSV file
//$columnHeaders = array('MSISDN', 'SESSION_ID', 'SERVICE_CODE', 'USSD_STRING', 'dateAccessed');
//fputcsv($file, $columnHeaders);
//
//// Fetch the rows and write them to the CSV file
//while ($row = $result->fetch_assoc()) {
//    $rowData = array(
//        $row['MSISDN'],
//        $row['SESSION_ID'],
//        $row['SERVICE_CODE'],
//        $row['USSD_STRING'],
//        $row['dateAccessed']
//    );
//    fputcsv($file, $rowData);
//}
//
//// Close the file
//fclose($file);
//
//
//echo "Data exported to $filename successfully.";


view('filter.view.php', [
    'ussd' => $ussd
]);
