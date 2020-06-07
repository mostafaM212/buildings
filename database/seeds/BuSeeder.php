<?php

use Illuminate\Database\Seeder;

class BuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return factory(\App\Bu::class,4)->create();
    }
}
