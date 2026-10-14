<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Layanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuci_kering = Cuci::factory(4)->create();
    }
}
