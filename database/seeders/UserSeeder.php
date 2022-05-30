<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ad Ministrator',
                'email' => 'ad.ministrator@example.com',
                'password' => Hash::make('Password1'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => null,
                'name' => 'Adrian G',
                'email' => 'adrian.g@example.com',
                'email_verified_at' => now(),
                'password' => 'Password1',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => null,
                'name' => 'Ann Ominous',
                'email' => 'ann.ominous@example.com',
                'email_verified_at' => now(),
                'password' => 'Password1',
                'created_at' => now(),
                'updated_at' => null,
            ],

        ];

        foreach ($users as $user) {
            $user['email_verified_at'] = Carbon::now();
            \App\Models\User::create($user);
        }

        $countItems = count($users);
        $this->command->getOutput()->writeln("<info>            Added {$countItems} users.");

    }
}
