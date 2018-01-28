<?php

class User
{
    // Properties
    private $name;
    private $pass;
    private $fullName;

    public function __construct()
    {
        echo '<br>' . __METHOD__;
    }

    public function __destruct()
    {
        echo '<br>' . __METHOD__;
    }
}
