<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Araba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Araba::create(
            [
                'name' => 'import_badge_users',
                'fiyat' => '10',
            ]);
    }
}
