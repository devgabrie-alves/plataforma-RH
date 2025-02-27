<?php
function loadEnv($filePath)
{
    if (!file_exists($filePath)) {
        throw new Exception("Arquivo .env não encontrado em: $filePath");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        $parts = explode('=', $line, 2);
        if (count($parts) === 2) {
            $name = trim($parts[0]);
            $value = trim($parts[1]);

            if (!getenv($name)) {
                putenv("$name=$value");
            }
        }
    }
}