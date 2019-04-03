<?php
require '../bootloader.php';

$sensors = new \App\Sensors();
$temp = new \App\SensorFartTemp();
$humidity = new \App\SensorFartHumidity();


$sensors->add('Sensoriaus temp', $temp);
$sensors->add('Humidity', $humidity);

?>
<html>
    <head>
        <title>Sensors</title>
    </head>
    <body>
        <ul>
            <?php foreach ($sensors->getReadings() as $key => $sensor): ?>
                <li>
                    <?php print $key; ?>
                    <?php print $sensor; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
