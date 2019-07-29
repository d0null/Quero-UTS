<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Role::firstOrCreate(['name' => 'operator']);
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);

        User::create([
            'name' => 'Pedro',
            'last_name' => 'Perez',
            'cedula' => 'V18123456',
            'email' => 'wytuxas@gmail.com',
            'password' => Hash::make('barklis1'),
        ])->assignRole('admin');

        User::create([
            'name' => 'Albert',
            'last_name' => 'Smith',
            'cedula' => 'V18123456',
            'email' => 'test@test.com',
            'password' => Hash::make('testtest'),
        ])->assignRole('admin');


    }
}
