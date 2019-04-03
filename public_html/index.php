<?php
require '../bootloader.php';

$sensors = new \App\Sensors();
$sensor_fart_temp = new \App\SensorFartTemp();
$sensor_fart_humidity = new \App\SensorFartHumidity();


$sensors->add('Sensoriaus temp', $sensor_fart_temp);
$sensors->add('Humidity', $sensor_fart_humidity);

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
