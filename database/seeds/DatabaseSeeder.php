<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        DB::table('skills')->insert([
            'skill' =>  'CSS',
            'difficulty' => 1 ,
            'body' => 'CSS' ,
            'info_link' => 'hi' ,
        ]);
        DB::table('skills')->insert([
            'skill' => 'HTML',
            'difficulty' => 1 ,
            'body' => 'HTML' ,
            'info_link' => 'hi' ,
        ]);
        DB::table('skills')->insert([
            'skill' => 'Java',
            'difficulty' => 1 ,
            'body' => 'Java' ,
            'info_link' => 'hi' ,
        ]);
        DB::table('skills')->insert([
            'skill' => 'C#',
            'difficulty' => 1 ,
            'body' => 'C#' ,
            'info_link' => 'hi' ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 1,
            'skill_id' => 1 ,
            'level' => 1 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 1,
            'skill_id' => 2 ,
            'level' => 2 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 1,
            'skill_id' => 3 ,
            'level' => 1 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 1,
            'skill_id' => 4 ,
            'level' => 5 ,
        ]);        
        DB::table('skilllevels')->insert([
            'user_id' => 2,
            'skill_id' => 1 ,
            'level' => 5 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 2,
            'skill_id' => 2 ,
            'level' => 5 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 2,
            'skill_id' => 3 ,
            'level' => 5 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 2,
            'skill_id' => 4 ,
            'level' => 1 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 3,
            'skill_id' => 1 ,
            'level' => 3 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 3,
            'skill_id' => 2 ,
            'level' => 2 ,
        ]);
        DB::table('skilllevels')->insert([
            'user_id' => 3,
            'skill_id' => 4 ,
            'level' => 4 ,
        ]);
    }
}
