<?php 
$apiToken = "663831584:AAFY2F_cN-YxkoIBv6j8vCUuTRBNj4Lh8H0";

$data = [
    'chat_id' => '@EWS',
    'text' => 'terjadi tanah longsor segera mengungsi!'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

// Do what you want with result
 ?>