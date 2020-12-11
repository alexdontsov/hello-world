<?php

require "../vendor/autoload.php";

use Log\Logger;

try {
    $log = new Logger();
    $log->run();
} catch (Exception $e) {
    // TODO
}