<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loser;

class LosersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loser::truncate();
        $faker = \Faker\Factory::create('en_GB');
          for ($i = 0; $i < 10; $i++) {
            Loser::create([
                'surname' => $faker->name,
                'othername' => $faker->name,
                'samaritan' => 681248724
            ]);
        }

        //
    }
}
