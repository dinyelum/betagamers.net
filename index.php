<?php 
session_start();
//file_put_contents(time(), json_encode($_SERVER, JSON_PRETTY_PRINT));

require str_replace('/public_html', '', $_SERVER['DOCUMENT_ROOT'])."/app/betagamers/core/init.php"; 

$app = new App;