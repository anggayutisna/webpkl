<?php

use Illuminate\Database\Seeder;

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
        $user = new \App\User;
        $user->name = "Angga Y";
        $user->email = "anggasompok@gmail.com";
        $user->password = bcrypt("0823angga");
        $user->save();
    }
}
