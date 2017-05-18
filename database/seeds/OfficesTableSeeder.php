<?php

use App\Eloquent\Office;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Office::class, 5)->create();
    }
}
