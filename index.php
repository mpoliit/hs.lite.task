<?php

require_once 'Class/CsvIterator.php';

$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}
