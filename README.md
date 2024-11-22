# EspoCRM-LogViewer
Quickly view EspoCRM logs

## Configuration

* Change path in set.php file

```php
<?php

//error_reporting(E_ALL);

$today = date('Y-m-d');
$data = "file_path='[ESPOCRM_PATH]/data/logs/espo-{$today}.log'\n" .
"vscode_path_search='/srv/www/spaces/current/'\n" .
"vscode_path_replace='C:\doll\spaces\'\n";

//var_dump($data);

file_put_contents('php-error-log-viewer.ini', $data);
```

* The default user and password are:
  
DEV
 
12345

* Make sure that `php-error-log-viewer.ini` is writeable
