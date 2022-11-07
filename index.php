<?php

require 'Speedometer.php';

echo '10 Kms font ' . Speedometer::KmtoMiles(10) . 'Miles <br>';
echo '10 Miles font ' . Speedometer::MilestoKM(10) . 'Kms';