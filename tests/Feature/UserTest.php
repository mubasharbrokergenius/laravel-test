<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestSuite;
//use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Event;

class UserTest extends TestSuite
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

//        $response->assertStatus(200);

        // Retrieve data from the database
//        $users = Event::all();
//
//        // Assert the result
//        $this->assertCount(3, $users);

        $this->assertDatabaseCount('events', 1);
    }
}
