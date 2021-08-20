<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team =Team::pluck('id')->toArray();

        $admin = User::updateOrCreate(
            [
             'name'              =>'Admin',
            'email'              => 'admin@gmail.com',
            'password'           => bcrypt('12345678'), // password
            'email_verified_at' => now(),
            'current_team_id'   =>$team[0],
            'remember_token'    => Str::random(10),
            ]
        );
    }
}
