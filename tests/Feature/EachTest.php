<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Eko",
                "foods" => ["Takoyaki", "Donat"]
            ],
            [
                "name" => "Kurniawan",
                "foods" => ["Takoyaki", "Donat"]
            ]
        ]])
            ->assertSeeInOrder([
                ".red",
                "Eko",
                "Takoyaki",
                "Donat",
                "Kurniawan",
                "Takoyaki",
                "Donat"
            ]);
    }
}
