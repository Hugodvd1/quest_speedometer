<?php

require 'Speedometer.php';

echo '10 Kms = ' . Speedometer::KmtoMiles(10) . 'Miles <br>';
echo '10 Miles = ' . Speedometer::MilestoKM(10) . 'Kms';