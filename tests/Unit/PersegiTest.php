<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\PersegiController;

class PersegiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     // Rumus Persegi : S x S

     public function testRumusPersegi()
     {
       $Rumuspersegi = new PersegiController;
       $persegi = $Rumuspersegi->persegi(20,20);
       $this->assertEquals(400, $persegi);
     }
}
