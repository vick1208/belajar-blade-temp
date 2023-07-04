<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view("while", ["i" => 0])
            ->assertSeeText("Current value is 0")
            ->assertSeeText("Current value is 1")
            ->assertSeeText("Current value is 2")
            ->assertSeeText("Current value is 3")
            ->assertSeeText("Current value is 4")
            ->assertSeeText("Current value is 5")
            ->assertSeeText("Current value is 6")
            ->assertSeeText("Current value is 7")
            ->assertSeeText("Current value is 8")
            ->assertSeeText("Current value is 9");
    }
}
