<?php

namespace Tests\Feature;
namespace Tests;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestSuite;
//use Tests\TestCase;
use App\Models\Event;
class ExampleTest extends TestSuite
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/events');

        $users = Event::all();
        $this->assertCount(3, $users);
        $response->assertStatus(200);
    }
}
