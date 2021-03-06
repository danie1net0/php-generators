<?php

function getLines(string $filePath): Generator
{
    $file = fopen($filePath, 'rb');

    while (! feof($file)) {
        yield fgets($file);
    }

    fclose($file);
}

$lines = getLines(__DIR__ . '/file.txt');

foreach ($lines as $line) {
    echo "$line\n";
}

echo 'Used memory: ~' . round((memory_get_peak_usage() / 1024 / 1024), 2) . "MB\n";