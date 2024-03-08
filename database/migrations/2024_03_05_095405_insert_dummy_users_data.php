<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertDummyUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Insert dummy data into the users table
     DB::table('users')->insert([
        [
        'name' => 'Votive',
        'email' => 'votive@gmail.com',
        'role' => 0,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'),
        'created_at' => now(),
        'updated_at' => now(),
        ],
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Super Agent',
                'email' => 'superagent@gmail.com',
                'role' => 2,
                'email_verified_at' => now(),
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                    'name' => 'Master Agent',
                    'email' => 'masteragent@gmail.com',
                    'role' => 3,
                    'email_verified_at' => now(),
                    'password' => bcrypt('123456'),
                    'created_at' => now(),
                    'updated_at' => now(),
                    ],
                    [
                        'name' => 'Agent',
                        'email' => 'agent@gmail.com',
                        'role' => 4,
                        'email_verified_at' => now(),
                        'password' => bcrypt('123456'),
                        'created_at' => now(),
                        'updated_at' => now(),
                        ]

]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove the inserted data if needed
        DB::table('users')->whereIn('email', ['john.doe@example.com', 'jane.smith@example.com'])->delete();
    }
}
