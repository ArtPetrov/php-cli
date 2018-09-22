<?php

use ArtPetrov\{Teacher, Exceptions\InvalidArgumentException};

require_once __DIR__ . '/vendor/autoload.php';

$options = getopt("p:");

if (file_exists($options['p'])) {

    $exm = file_get_contents($options['p']);

    try {

        if (Teacher::checkExample($exm)) {

            echo "Correctly math example. \n";

        } else {

            echo "Error math example. \n";

        };

    } catch (InvalidArgumentException $e) {

        echo 'Exception: ', $e->getMessage(), "\n";

    }

} else {
    die('None file.');
}
