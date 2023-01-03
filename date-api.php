<?php
  // Set the default timezone to use
  date_default_timezone_set('UTC');

  // Get the current date and time
  $current_date = date('Y-m-d H:i:s');

  // Return the date as a JSON object
  header('Content-Type: application/json');
  echo json_encode(array('date' => $current_date));
?>
