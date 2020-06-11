<?php

$data = file_get_contents('php://input');
$filename = "data-" . getdate()[0];

if( $data ) { http_response_code(200); }
else { http_response_code(400); }

$file = fopen( $filename . ".txt", "a");
fwrite($file, $data);
fclose($file);

?>
