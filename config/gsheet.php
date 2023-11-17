<?php
require_once 'vendor/autoload.php';

// configure the Google Client
$client = new \Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
// credentials.json is the key file we downloaded while setting up our Google Sheets API
$path = 'data/credentials.json';
$client->setAuthConfig($path);

$client->setHttpClient(new GuzzleHttp\Client(['verify' => false]));

// configure the Sheets Service
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1UOTUkLImUc_-Cj39T8o6V5YFD_GKHJ3a1bCUQA6W1h8';
$spreadsheet = $service->spreadsheets->get($spreadsheetId);
var_dump($spreadsheet);

// get all the rows of a sheet
$range = 'Sheet1'; // here we use the name of the Sheet to get all the rows
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
var_dump($values);
?>