<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //

        DB::table('roles')->insert(
            [
                'nombre_rol' => 'administrador'

            ]);
        DB::table('roles')->insert(
                [
                    'nombre_rol' => 'user'

             ]);


        DB::table('users')->insert(
            [
                'name'=> 'admin',
                'email'=> 'admin@yahoo.com',
                'password' =>Hash::make('admin1234'),
                 'role_id' => '1'
            ]);
            DB::table('users')->insert(
                [
                    'name'=> 'user',
                    'email'=> 'user@yahoo.com',
                    'password' =>Hash::make('user1234'),
                     'role_id' => '2'
                ]);

    }
}
