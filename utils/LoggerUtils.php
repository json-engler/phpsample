<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// cannot overload functions, so need a unique name
function getLoggerWithName($channelname) {
    // https://stackify.com/php-monolog-tutorial/
    $logger = new Logger($channelname);
    $logger->pushHandler(new StreamHandler($_SERVER['DOCUMENT_ROOT'] . '/logs/app.log', Logger::DEBUG));
    // TODO: look for any configs
    return $logger;
}

// https://stackoverflow.com/questions/2110732/how-to-get-name-of-calling-function-method-in-php
function getLogger() {
    return getLoggerWithName(basename($_SERVER['PHP_SELF'], ".php"));
}
?>