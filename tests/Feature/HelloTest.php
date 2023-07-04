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
    public function testIf()
    {
        $this->view("ifstate", ["hobbies" => []] )
            ->assertSeeText("I don't have any hobbies!", false);

        $this->view("ifstate", ["hobbies" => ["Coding"]] )
            ->assertSeeText("I have one hobby!");

        $this->view("ifstate", ["hobbies" => ["Coding", "Gaming"]] )
            ->assertSeeText("I have multiple hobbies!");
    }
    
}
