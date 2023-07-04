<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch()
    {
        $this->view("conditional.switch", ["value" => "A"])
            ->assertSeeText("Memuaskan");

        $this->view("conditional.switch", ["value" => "B"])
            ->assertSeeText("Bagus");

        $this->view("conditional.switch", ["value" => "C"])
            ->assertSeeText("Cukup");

        $this->view("conditional.switch", ["value" => "D"])
            ->assertSeeText("Tidak Lolos");
    }
}
