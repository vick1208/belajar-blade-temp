<?php

namespace App\Services;

class Greet{
    function SayHello(string $name) : string {
        return "Hello $name";
    }
}