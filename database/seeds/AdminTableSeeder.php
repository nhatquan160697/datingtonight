<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrator')->insert([
            'username' => 'admin',
            'id_role' => 1,
            'fullname' => 'Quân Óc chó',
            'password' => bcrypt('123456'),
        ]);
    }
}
