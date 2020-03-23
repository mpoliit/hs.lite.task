<?php
require_once 'Worker.php';

$jack = new Worker('Jack', 25, 1000);

var_dump($jack->getName());