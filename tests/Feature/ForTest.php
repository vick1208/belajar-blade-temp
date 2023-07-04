<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    public function testFor()
    {
        $this->view("looping.for", ["limit" => 5])
            ->assertSeeText("0")
            ->assertSeeText("1")
            ->assertSeeText("2")
            ->assertSeeText("3")
            ->assertSeeText("4");
    }
    public function testForEach()
    {
        $this->view("looping.foreach", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }
    
    public function testForElse()
    {
        $this->view("looping.forelse", ["hobbies" => ["Coding", "Gaming"]])
        ->assertSeeText("Coding")
        ->assertSeeText("Gaming")
        ->assertDontSeeText("Tidak Punya Hobby");
        
        $this->view("looping.forelse", ["hobbies" => []])
        ->assertDontSeeText("Coding")
        ->assertDontSeeText("Gaming")
        ->assertSeeText("Tidak Punya Hobby");
    }
    public function testLoopVar()
    {
        $this->view("looping.loopvar", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("1. Coding")
            ->assertSeeText("2. Gaming");
    }
}
