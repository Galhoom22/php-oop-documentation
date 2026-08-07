<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Logger {                                     // Base logger: writes a simple line.
    public function log(string $message): void {   // Shared method name for all loggers.
        echo "[LOG] " . $message;                  // Basic format.
    }
}

class FileLogger extends Logger {                  // Child logger for "files".
    public function log(string $message): void {   // Override: keep base idea, add file context.
        parent::log($message);                     // Reuse the parent's formatting first.
        echo " (saved to file)";                   // Then add file-specific behavior.
    }
}

$logger = new Logger();                            // Base logger.
$logger->log('Server started');                    // Prints: [LOG] Server started
echo "\n";                                         // New line.

$fileLogger = new FileLogger();                    // Child logger.
$fileLogger->log('Server started');                // Prints: [LOG] Server started (saved to file)