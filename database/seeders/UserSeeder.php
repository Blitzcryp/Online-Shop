<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Coman Cosmin",
            "email" => "comancosmin112+ticketApp@gmail.com",
            "email_verified_at" => Carbon::now()->addHour()->toDateTimeString(),
            "password" => Hash::make("parola12345"),
            "remember_token" => Hash::make("parola12345"),
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);

        User::create(            [
            "name" => "Coman Cosmin Admin",
            "email" => "comancosmin1122@gmail.com",
            "email_verified_at" => Carbon::now()->addHour()->toDateTimeString(),
            "password" => Hash::make("parola12345"),
            "remember_token" => Hash::make("parola12345"),
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString(),
        ]);
    }
}
