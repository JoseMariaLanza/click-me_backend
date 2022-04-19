<?php

namespace Tests\Unit;

use App\Click;
use Illuminate\Contracts\Pagination\Paginator;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ClickTest extends TestCase
{
    use DatabaseMigrations;
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

    public function test_create_click()
    {
        $click = Click::create([
            'times_clicked' => 3
        ]);

        $this->assertInstanceOf(Collection::class, $click->get());
    }
}
