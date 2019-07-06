<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\UserRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roleId=Role::store('Admin',"Poate face tot ce vrea.",1,'admin',1);
        Role::store('Client',"Nu poate face tot ce vrea.",0,'client');

        $userId=DB::table('users')->insertGetId([
            'name'=>"Tomacu Alexandru",
            'email'=>"atomacu@gmail.com",
            'password' => Hash::make('1234567890'),
        ]);

        UserRole::store($userId,$roleId);


        // Asta e pentru adaugarea categoriilor
        DB::table('categories')->insert([
            'name' => 'Actual',
            'index' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Politic',
            'index' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'Social',
            'index' => 3
        ]);

        DB::table('categories')->insert([
            'name' => 'Economic',
            'index' => 4
        ]);

        DB::table('categories')->insert([
            'name' => 'Sănătate',
            'index' => 5
        ]);
    }
}
