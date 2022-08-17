<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Estoquista da Silva',
            'username' => 'estoquista',
            'email' => 'estoquista@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Atendente dos Santos',
            'username' => 'atendente',
            'email' => 'atendente@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Administrador Bastos',
            'username' => 'administrador',
            'email' => 'administrador@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sendy Lago',
            'username' => 'sendylago',
            'email' => 'sendylago@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Geilson Alves',
            'username' => 'geilsonalves',
            'email' => 'geilsonalves@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rodrigo Coutinho',
            'username' => 'rodrigocoutinho',
            'email' => 'rodrigocoutinho@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andrea',
            'username' => 'andrea',
            'email' => 'andrea@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rodrigo Magalhaes',
            'username' => 'rodrigocmagalhaes',
            'email' => 'rodrigocmagalhaes@fbe.com',
            'password' => bcrypt('12345678'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Newton Cleber',
            'username' => 'newtoncleber',
            'email' => 'newtoncleber@gmail.com',
            'password' => bcrypt('41526341'),
            'user_levels_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
