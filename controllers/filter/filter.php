<?php
// Database configuration

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database2']);


// Query to fetch data from the table
#$query = "SELECT 'MSISDN', 'SESSION_ID', 'SERVICE_CODE', 'USSD_STRING', 'dateCreated', 'dateModified' AS dateAccessed FROM ussdRequestLogs WHERE SERVICE_CODE = '*617#' AND USSD_STRING = '200' AND DATE(dateModified) >= '2023-05-05' GROUP BY SESSION_ID";
//$ussd = $db->query("SELECT MSISDN, SESSION_ID, SERVICE_CODE, USSD_STRING, dateModified AS dateAccessed
//FROM ussdRequestLogs
//WHERE SERVICE_CODE = '*617#' AND USSD_STRING = '100' AND DATE(dateModified) BETWEEN '2023-04-23' AND '2023-08-23'
//GROUP BY MSISDN, SESSION_ID, SERVICE_CODE, USSD_STRING, dateModified;
//")->get();

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
