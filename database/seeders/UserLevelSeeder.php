<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_levels')->insert([
            'role' => 'ESTOQUISTA',
            'level' => 1
        ]);
        DB::table('user_levels')->insert([
            'role' => 'ATENDENTE',
            'level' => 2
        ]);
        DB::table('user_levels')->insert([
            'role' => 'SUPERVISOR',
            'level' => 3
        ]);
        DB::table('user_levels')->insert([
            'role' => 'GERENTE',
            'level' => 4
        ]);
        DB::table('user_levels')->insert([
            'role' => 'ADMINISTRADOR',
            'level' => 5
        ]);
        DB::table('user_levels')->insert([
            'role' => 'SUPERUSER',
            'level' => 6
        ]);

    }
}
