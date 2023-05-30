<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class InitData extends Command
{
    protected $signature = 'app:init-data';

    protected $description = 'Initialize company data';

    public function handle()
    {
        $faker = Faker::create();
        $name = $faker->company;
        $tax_number = $faker->numerify('###-###-###');
        $phone = $faker->phoneNumber;
        $email = $faker->email;

        $this->info('Generating Company...');
        $this->info('Name: '. $name);
        $this->info('Tax Number: '. $tax_number);
        $this->info('Phone Number: '. $phone);
        $this->info('Email: '. $email);


        \App\Models\Company::create([
            'name' => $name,
            'tax_number' => $tax_number,
            'phone' => $phone,
            'email' => $email,
        ]);


    }
}
