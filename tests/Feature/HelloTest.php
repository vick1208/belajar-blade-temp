<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello(){
        $this->get("/hello")
        ->assertSeeText("Gol D Roger");
    }
    public function testUser(){
        $this->get("/user")
        ->assertSeeText("Gol D Roger");
    }
    public function testViewDirectHello(){
        $this->view("hello",["name" => "Eko Kunthadi"])
        ->assertSeeText("Eko Kunthadi");
    }
    public function testViewDirectUser(){
        $this->view("hello.user",["name" => "Eko Kunthadi"])
        ->assertSeeText("Eko Kunthadi");
    }
}
