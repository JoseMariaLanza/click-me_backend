<?php

use App\Click;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClicksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clicks')->insert([
            'times_clicked' => 0,
            'created_at'   => Carbon::now()->format('Y-m-d H:m:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:m:s'),
        ]);
    }
}
