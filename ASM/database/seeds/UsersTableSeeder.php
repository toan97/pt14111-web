<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class)->create([
        	'role'=> config('role.admin'),
        	'email'=>'vantoan@gmail.com'
        ]);
        factory(App\Models\User::class,10)->create();
    }
}
