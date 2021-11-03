<?php
require_once('inc/headers.php');
require_once('inc/functions.php');

$db = openDb();
$sql = 'select * from xxxx';
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
print json_encode($results); 