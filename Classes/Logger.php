<?php


namespace Classes;


class Logger
{
    public function log($format, $delivery, $text)
    {
        return $delivery->delivery($format->format($text));
    }
}