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
        $this->view("if", ["hobbies" => []] )
            ->assertSeeText("I do not have any hobbies!");

        $this->view("if", ["hobbies" => ["Coding"]] )
            ->assertSeeText("I have one hobby!");

        $this->view("if", ["hobbies" => ["Coding", "Gaming"]] )
            ->assertSeeText("I have multiple hobbies!");
    }
    public function testUnless()
    {
        $this->view("unless", ["isAdmin" => true])
            ->assertDontSeeText("You are not Admin.");

        $this->view("unless", ["isAdmin" => false])
            ->assertSeeText("You are not Admin.");
    }
    
}
