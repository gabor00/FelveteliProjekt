<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class InitApp extends Command
{
    protected $signature = 'app:init';

    protected $description = 'Initialize the application';

    public function handle()
    {
        $faker = Faker::create();
        $name = $faker->name;
        $email = $faker->email;
        $password = Hash::make('password');

        $this->info('Generating random user...');
        $this->info('Name: ' . $name);
        $this->info('Email: ' . $email);
        $this->info('Password: password');

        \App\Models\User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
    }
}
