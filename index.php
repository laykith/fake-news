<?php

declare(strict_types=1);

//Logic files
require __DIR__.'/app/functions.php';
require __DIR__.'/database/dbConnect.php';
$database = new dbConnect();

//Build array of data
$query = 'SELECT * FROM post ORDER BY post.creationdate LIMIT 25';
$params = [];
$data = $database->getData($query, $params);

//View
require __DIR__.'/views/header.php';

echo '<pre>';
print_r($data);
echo '</pre>';

require __DIR__.'/views/footer.php';
