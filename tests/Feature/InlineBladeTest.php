<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class InlineBladeTest extends TestCase
{
    public function testInline(){
        $response = Blade::render('Hello {{ $name }}',['name' => "Eko"]);
        assertEquals("Hello Eko",$response);
    }
}
