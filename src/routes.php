<?php
$routes = [
    'metadata',
    'analyzeEmail',
    'analyzeIp'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

