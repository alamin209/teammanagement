<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Team;
use App\models\User;
class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id =User::pluck('id')->toArray();
        $team = Team::updateOrCreate(
            [
                'user_id'       =>1,
                'name'          => 'Test Team',
                'personal_team' => '1'

            ]

        );
    }
}
