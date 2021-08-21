<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name'  => 'super_admin',
            'email'       => 'super_admin@app.com',
            'password'    =>bcrypt('10201020'),
         ]);

    }
}
