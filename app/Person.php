<?php

namespace App;

class Person
{
    private $fname;
    private $lname;

    public function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function fullName()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function sayHelloTo($person)
    {
        return "Hello ". $person->fullName();
    }
}