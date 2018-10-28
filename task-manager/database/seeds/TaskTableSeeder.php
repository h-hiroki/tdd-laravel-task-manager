<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // random
        DB::table('tasks')->insert([
            'title' => str_random(512),
            'executed' => false,
        ]);

        // static
        DB::table('tasks')->insert([
            'title' => "テストタスク",
            'executed' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => "終了タスク",
            'executed' => true,
        ]);
    }
}
