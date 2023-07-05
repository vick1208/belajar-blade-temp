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
        $this->view("conditional.if", ["hobbies" => []] )
            ->assertSeeText("I do not have any hobbies!");

        $this->view("conditional.if", ["hobbies" => ["Coding"]] )
            ->assertSeeText("I have one hobby!");

        $this->view("conditional.if", ["hobbies" => ["Coding", "Gaming"]] )
            ->assertSeeText("I have multiple hobbies!");
    }
    public function testUnless()
    {
        $this->view("conditional.unless", ["isAdmin" => true])
            ->assertDontSeeText("You are not Admin.");

        $this->view("conditional.unless", ["isAdmin" => false])
            ->assertSeeText("You are not Admin.");
    }

    public function testRaw()  {
        $this->view("other.raw")
        ->assertSeeText("Edwin")
        ->assertSeeText("Indonesia");
    }

    public function testStack() {
        $this->view('other.stack')
        ->assertSeeInOrder(["third.js","first.js","second.js"]);
    }
    public function testInherit() {
        $this->view('child')
        ->assertSeeText("Nama apl - Halaman Utama")
        ->assertSeeText("Default header")
        ->assertSeeText("Deskripsi header")
        ->assertDontSeeText("Default content")
        ->assertSeeText("Ini halaman utama");
    }
    public function testInheritWithoutOverride() {
        $this->view('child-def')
        ->assertSeeText("Nama apl - Halaman Utama")
        ->assertSeeText("Default header")->assertSeeText("Default content")
        ->assertDontSeeText("Deskripsi header")
        ->assertDontSeeText("Ini halaman utama");
    }
    
}
