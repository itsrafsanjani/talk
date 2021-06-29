<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        $users = [
            [
                "name"          => "User 1",
                "email"         => "user1@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "User 2",
                "email"         => "user2@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "User 3",
                "email"         => "user3@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "User 4",
                "email"         => "user4@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "User 5",
                "email"         => "user5@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "User 6",
                "email"         => "user6@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "User 7",
                "email"         => "user7@example.com",
                "password"      => bcrypt('password'),
                "created_at"    => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('users')->insert($users);
    }
}
