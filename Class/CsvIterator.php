<?php


class CsvIterator implements Iterator
{

    private $var = [];

    public function __construct($file)
    {
        $row = str_getcsv(file_get_contents($file), "\n");
        $this->var = $row;
    }

    public function current()
    {
        $var = explode(',', current($this->var));
        return $var;
    }

    public function next()
    {
        $var = next($this->var);
        return $var;
    }

    public function key()
    {
        $var = key($this->var);
        return $var;
    }

    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        return $var;
    }

    public function rewind()
    {
        reset($this->var);
    }
}