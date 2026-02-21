<?php
require_once 'class/OpenWeather.php';
$weather = new OpenWeather('825f6d28048deaead717e57bd7113032');
$forecast = $weather->getForecast('Kinshasa,drc');
require 'elements/header.php';
?>

<div class="container">
    <ul>
        <?php foreach($forecast as $day): ?>
            <li><?= $day['date']->format('d/m/Y')?> <?= $day['description']?> <?= $day['temp'] ?>°C</li>
        <?php endforeach ?>
    </ul>
</div>

<?php require 'elements/footer.php';?>