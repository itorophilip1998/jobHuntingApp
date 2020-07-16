<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
              'name' => 'Admin1',
              'email' => 'admin1@jobstart.com',
              'password' => Hash::make('admin1passing6789054321'),
              'role' => 'admin', 
            ),
            array(
              'name' => 'Admin2',
              'email' => 'admin2@jobstart.com',
              'password' => Hash::make('admin2passing1234567890'),
              'role' => 'admin',
            ),
            array(
              'name' => 'Admin3',
              'email' => 'admin3@jobstart.com',
              'password' => Hash::make('admin3passing0987654321'),
              'role' => 'admin',
            ),
          ));
    }
}
