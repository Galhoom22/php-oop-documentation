<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-5.php'; // Load Logger and FileLogger.

function writeLog(Logger $logger, string $message): void { // Accepts Logger or any child of Logger.
    $logger->log($message);                        // Calls whichever log() that object has.
    echo "\n";                                     // New line after each log.
}

writeLog(new Logger(), 'Hello');                   // Uses Logger::log
writeLog(new FileLogger(), 'Hello');               // Uses FileLogger::log (override)