<?php

declare(strict_types=1);

class Logger
{
    public static function info(string $message): void
    {
        echo "Mensaje: $message" . PHP_EOL;
        echo "Archivo: " . __FILE__ . PHP_EOL;
        echo "Carpeta: " . __DIR__ . PHP_EOL;
        echo "Línea: " . __LINE__ . PHP_EOL;
        echo "Clase: " . __CLASS__ . PHP_EOL;
        echo "Método: " . __METHOD__ . PHP_EOL;
    }
}

