<?php

use Illuminate\Database\Seeder;

class CorredoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CPrado\Models\Corredor::class, 50)->create();
    }
}
