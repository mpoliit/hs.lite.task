<?php

function getFile($file){
    $f = fopen($file, 'r');
    if (!$f) throw new Exception();

    while ($line = fgets($f)){
        $line = explode(',', $line);
        yield $line;
    }
    fclose($f);
}

foreach (getFile(__DIR__ . '/cats.csv') as $line) {
    echo '<pre>'.print_r($line, true).'</pre>';
}