<?php

define("ALIAS", $_SERVER['DOCUMENT_ROOT']);

require_once 'inc/class/Test.php';

$test = new Test();
echo $test->getSum();