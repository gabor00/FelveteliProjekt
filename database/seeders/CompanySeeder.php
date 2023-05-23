<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Company::create([
                'name' => $faker->company,
                'tax_number' => $faker->numerify('###-###-###'),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
            ]);
        }
    }
}
