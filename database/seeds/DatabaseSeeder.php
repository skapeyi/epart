<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@epart.com',
            'phone'=>'256774466600',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'anonymous',
            'email' => 'anonymouse@epart.com',
            'phone'=>'256774466601',
            'password' => bcrypt('anonymous'),
        ]);
    }
}
