<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use MoonShine\Laravel\Models\MoonshineUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MoonShineUser::query()->create([
            'name' => 'admin@mail.ru',
            'email' => 'admin@mail.ru',
            'password' => Hash::make(12345)
        ]);
    }
}
