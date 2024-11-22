<?php

//error_reporting(E_ALL);

$today = date('Y-m-d');
$data = "file_path='/var/www/html/espocrm/data/logs/espo-{$today}.log'\n" .
"vscode_path_search='/srv/www/spaces/current/'\n" .
"vscode_path_replace='C:\doll\spaces\'\n";

//var_dump($data);

file_put_contents('php-error-log-viewer.ini', $data);