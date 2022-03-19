<?php

require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php')
require_once('account.php');
require_once('Payment.php');
require_once('Cash.php');
require_once('Paypal.php');
require_once('Card.php');

$UberX = new UberX('CVB738', new Account('Andres Herrera', 'AND456'), "Chevrolet", 'Spark');
$UberX->printDataCar();

$UberPool = new UberPool('TYU567', new Account('Andrea Ferran', 'ANDA765'), "Dodge", 'Attitude');
$UberPool->printDataCar();
?>