<?php

$timestamp = (float) microtime(true);
$hostname = gethostname();

echo "<pre>";
var_dump([
    'timestamp' => $timestamp,
    'hostname' => $hostname,
]);
echo "</pre>";