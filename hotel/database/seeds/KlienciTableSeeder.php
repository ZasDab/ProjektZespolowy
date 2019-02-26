<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Klienci;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class KlienciTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('klienci')->delete();
        Klienci::create(array(
        'imie'     => 'Janusz',
        'nazwisko' => 'Krzak',
        'haslo' => Hash::make('haslo'),
        'adres'    => 'Mila 105',
        'miasto'    => 'Warszawa',
        'kod'    => '00-111',
        'telefon'    => '600500400',
        'email'    => 'janusz.krzak@mail.pl',
    ));
    }
}

 