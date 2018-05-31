<?php

use Illuminate\Database\Seeder;
use App\Web;
use App\User;

class WebTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Web::class, 50)->create();
    }
}
