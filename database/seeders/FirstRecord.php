<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class FirstRecord extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'content'=>"First Record",
            'img'=>"First Record",
        ]);
    }
}
