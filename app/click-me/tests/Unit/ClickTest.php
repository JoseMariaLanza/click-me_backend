<?php

namespace Tests\Unit;

use App\Click;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class ClickTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_clicks()
    {
        $click = new Click;

        $this->assertInstanceOf(Collection::class, $click->get());
    }
}
