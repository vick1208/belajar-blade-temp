<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm(){
        $this->view("forms.form", ["user" => [
            "premium" => true,
            "name" => "Mardi",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Mardi")
            ->assertDontSee("readonly");

        $this->view("forms.form", ["user" => [
            "premium" => false,
            "name" => "Mardi",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Mardi")
            ->assertSee("readonly");
    }
    public function testCsrf(){
        $this->view('forms.csrf',[])
        ->assertSee("hidden")
        ->assertSee("_token");
    }
    public function testError()
    {
        $errors = [
            "name" => "Name is required",
            "password" => "Password is required"
        ];

        $this->withViewErrors($errors)
            ->view("other.valerr", [])
            ->assertSeeText("Name is required")
            ->assertSeeText("Password is required");

    }
}
