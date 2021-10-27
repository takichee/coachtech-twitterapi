<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'body' => Str::random(30),
                'user_id' => '1',
                'created_at' => now(),
            ],
            [
                'body' => Str::random(30),
                'user_id' => '2',
                'created_at' => now(),
            ],
            [
                'body' => Str::random(30),
                'user_id' => '3',
                'created_at' => now(),
            ],
        ]);
    }
}
