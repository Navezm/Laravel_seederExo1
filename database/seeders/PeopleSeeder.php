<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert(
            [
                [
                    'name' => 'Martin',
                    'age' => 24,
                    'email' => 'nvagagag@gmail.com',
                    'phone' => '+320454524'
                ],
                [
                    'name' => 'Marcelin',
                    'age' => 23,
                    'email' => 'hagafahdkd@gmail.com',
                    'phone' => '+320777844'
                ],
                [
                    'name' => 'Violette',
                    'age' => 25,
                    'email' => 'farstyshf@gmail.com',
                    'phone' => '+325478265'
                ],
                [
                    'name' => 'Rayane',
                    'age' => 24,
                    'email' => 'papapapapap@gmail.com',
                    'phone' => '+3254864'
                ]
            ]
        );
    }
}
