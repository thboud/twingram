<?php
/////////////////////////// WRITING THE CONFIG FILE
$dir = rtrim(rtrim(__DIR__, "/writesql.php"),"installer\stages") . "/";
$fp=fopen($dir . 'engine/db/config.php','w');
$fs =  "<?php\n";
$fs .= "define('db_host', '" . $_POST['host'] . "');\n";
$fs .= "define('db_username', '" . $_POST['username'] . "');\n";
$fs .= "define('db_password', '" . $_POST['password'] . "');\n";
$fs .= "define('db_database', '" . $_POST['db'] . "');\n";
$fs .= "define('db_port', '" . $_POST['port'] . "');\n";
fwrite($fp, $fs);
fclose($fp);
?>