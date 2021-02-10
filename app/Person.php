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

    public function sayHelloTo($person)
    {
        return "Hello {$person->fname} {$person->lname}";
    }
}