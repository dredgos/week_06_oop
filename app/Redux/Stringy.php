<?php

namespace App\Redux;

class Stringy 
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function repeat($num)
    {
        $this->string = str_repeat($this->string, $num);
        return $this;
    }

    public function get()
    {
        return $this->string;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($str)
    {
        $this->string = $this->string.$str;
        return $this;
    }

}