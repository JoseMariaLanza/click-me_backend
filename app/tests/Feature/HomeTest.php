<?php

namespace Tests\Feature;

use App\Click;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Http\Response;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_clicks()
    {
        factory(Click::class)->create();

        $response = $this->get('/api');

        $response->assertStatus(200);
    }

    public function test_post_click()
    {
        return $this->assertTrue(true);
    }
}
