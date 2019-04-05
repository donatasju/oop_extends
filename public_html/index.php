<?php
require '../bootloader.php';

$cookie = new Core\Cookie('Cookis');

if($cookie->exists()) {
    $data_array = $cookie->read();
    $data_array[0]++;
    $cookie->save($data_array);
} else {
    $data_array[0];
}


?>
<html>
    <head>
        <title>Sensors</title>
    </head>
    <body>
        <?php if(isset($_COOKIE['Cookis'])): ?>
        <?php print $cookie->read(0); ?>
        <?php endif; ?>
        
    </body>
</html>
