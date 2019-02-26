<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Klienci;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Model::unguard();
         Eloquent::unguard();
        $this->call(KlienciTableSeeder::class);
    }
}

