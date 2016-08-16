<?php

use HNG\Buka;
use Illuminate\Database\Seeder;

class BukasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bukas = [
            ['name' => 'Whitehouse'],
            ['name' => 'Commint'],
        ];

        foreach ($bukas as $buka) Buka::create($buka);
    }
}
