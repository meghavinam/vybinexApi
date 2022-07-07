<?php
  $file = '../API/testimonials.json';
$json = file_get_contents($file); 
 
$json_data = json_decode($json,true);
 
echo json_encode($json_data);
?>
