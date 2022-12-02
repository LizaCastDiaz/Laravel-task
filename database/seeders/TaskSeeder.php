<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   //
    {
        DB::table('tasks')->insert([ //crear unos campos --- hay q me meter el created add en caso de que no se creen con fecha.
            //se lanza con php artisan db:seed --class=UserSeeder
            'name' => 'compar',
            'description' => 'patatas',
            'status' => false,



        ]);
    }
}
