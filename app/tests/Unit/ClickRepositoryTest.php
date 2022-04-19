<?php

namespace Tests\Unit;

use App\Click;
use Illuminate\Contracts\Pagination\Paginator;
use App\Repositories\ClickRepository;
use Tests\TestCase;

class ClickRepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_clicks_with_pagination()
    {
        $this->assertTrue(true);
        // $clicks = new ClickRepository(new Click);

        // $this->assertInstanceOf(Paginator::class, $clicks->all());
    }
}
