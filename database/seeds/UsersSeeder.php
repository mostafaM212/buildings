<?php

use Illuminate\Database\Seeder;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return factory(\App\User::class,10)->create();
    }
}
