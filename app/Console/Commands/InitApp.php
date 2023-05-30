<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class InitApp extends Command
{
    protected $signature = 'app:init-user';

    protected $description = 'Initialize users';

    public function handle()
    {
        $faker = Faker::create();
        $name = $faker->name;
        $email = $faker->email;
        $password = Str::password(10, true, true, false, false);

        $this->info('Generating random user...');
        $this->info('Name: ' . $name);
        $this->info('Email: ' . $email);
        $this->info('Password: '. $password);

        \App\Models\User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
    }
}

