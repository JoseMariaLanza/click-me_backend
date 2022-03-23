<?php

namespace Tests\Unit;

use Illuminate\Contracts\Pagination\Paginator;
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
        $clicks = new ClickRepository;

        $this->assertInstanceOf(Paginator::class, $clicks->all());
    }
}
