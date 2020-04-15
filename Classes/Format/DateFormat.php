<?php


namespace Classes\Format;

use Interfaces\iFormat;

class DateFormat implements iFormat
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}