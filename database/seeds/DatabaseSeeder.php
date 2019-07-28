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
            'name' => 'perdo',
            'last_name' => 'maria diana lopez',
            'cedula' => 'v123',
            'email' => 'wytuxas@gmail.com',
            'password' => Hash::make('barklis1'),
        ])->assignRole('admin');

        User::create([
            'name' => 'albert',
            'last_name' => 'no show face',
            'cedula' => 'v321',
            'email' => 'swdna88@hotmail.com',
            'password' => Hash::make('diana22diana'),
        ])->assignRole('admin');


    }
}
