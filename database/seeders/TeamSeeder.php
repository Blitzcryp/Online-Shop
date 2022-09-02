<?php

namespace Database\Seeders;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            "user_id" => 2,
            "name" => "Best Team",
            "personal_team" => 0,
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);

        $table = DB::table("team_user")->insert([
           "team_id" => 1,
           "user_id" => 1,
           "role" => "Editor",
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);
        $table = DB::table("team_user")->insert([
           "team_id" => 1,
           "user_id" => 2,
           "role" => "Admin",
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);

    }
}
