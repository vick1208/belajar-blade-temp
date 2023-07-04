<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledTest extends TestCase
{
    public function testDisabledBlade()
    {
        $this->view("utils.disabled", ["name" => "Eko Kunthadi"])
            ->assertDontSeeText("Eko Kunthadi")
            ->assertSeeText('Hello {{ $name }}');
    }
}
