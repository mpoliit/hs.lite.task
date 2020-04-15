<?php


namespace Classes\Format;

use Interfaces\iFormat;

class RawFormat implements iFormat
{
    public function format($string)
    {
        return $string;
    }
}