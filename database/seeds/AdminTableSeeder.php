<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->email = "a.salah.b@gmail.com";
        $admin->password = bcrypt("abosalah");
        $admin->save();
    }
}
