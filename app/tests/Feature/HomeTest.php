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
        $click = factory(Click::class)->create();
        $payload = [
            'times_clicked' => $click->times_clicked,
            'updated_at'    => $click->updated_at,
            'created_at'    => $click->created_at,
            'id'    => $click->id,
        ];

        $response = $this->post('/api', $payload);

        $response->assertStatus(200);
    }
}
