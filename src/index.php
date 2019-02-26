<?php
// let the accessing client know that this script prints out json data
header('Content-Type: application/json');

// retrieve json string from upper api
$source = file_get_contents('http://weather.asti.dost.gov.ph/web-api/index.php/api/data/1520');

// convert json string to json object
$json = json_decode($source);
if (is_null($json)) {
  echo '\'SOURCE_DATA_ERROR\'';
  exit;
}

// replace data with the first item in the data array
try {
  $json->data = $json->data[0];
} catch(Exception $e) {
  echo '\'DATA_ISOLATION_ERROR\'';
  exit;
}

// convert to json string and print final data
echo json_encode($json);
exit;

// print out final data (for debugging)
echo '<pre>' . print_r($json, true) . '</pre>';
