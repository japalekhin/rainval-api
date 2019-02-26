<?php

// retrieve json string from upper api
$source = file_get_contents('http://weather.asti.dost.gov.ph/web-api/index.php/api/data/1520');

// convert json string to json object
$json = json_decode($source);
if (is_null($json)) {
  echo '\'DATA_ERROR\'';
  exit;
}

echo '<pre>';
print_r($json);
echo '</pre>';
