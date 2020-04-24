<?php


namespace Interfaces;


interface IPay
{
    public function connect(): void;

    public function sendMoney($connect): void;
}