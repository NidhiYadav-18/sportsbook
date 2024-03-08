<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertRoleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert dummy data into the users table
     DB::table('roles')->insert([
        [
        'name' => 'Admin',
        'created_at' => now(),
        'updated_at' => now(),
        ],
        [
            'name' => 'Super Agent',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Master Agent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                [
                    'name' => 'Agent',
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
        //
    }
}
