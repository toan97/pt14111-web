<?php

use Illuminate\Database\Seeder;

class WasehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Wasehouse::class, 10)->create();
    }
}
