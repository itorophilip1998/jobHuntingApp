<?php

use Illuminate\Database\Seeder;

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
              'password' => Hash::make('admin1passing'),
              'role' => 'admin',
            ),
            array(
              'name' => 'Admin2',
              'email' => 'admin2@jobstart.com',
              'password' => Hash::make('admin2passing'),
              'role' => 'admin',
            ),
            array(
              'name' => 'Admin3',
              'email' => 'admin3@jobstart.com',
              'password' => Hash::make('admin3passing'),
              'role' => 'admin',
            ),
          ));
    }
}
