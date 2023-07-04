<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition(){
        $this->view('include-cond',[
            "user" => [
                "name" => "Rudi",
                "owner" => true
            ]
        ])->assertSeeText("Selamat Datang Admin")
        ->assertSeeText("Selamat Datang Rudi");
        $this->view('include-cond',[
            "user" => [
                "name" => "Rudi",
                "owner" => false
            ]
        ])->assertDontSeeText("Selamat Datang Admin")
        ->assertSeeText("Selamat Datang Rudi");
    }
}
