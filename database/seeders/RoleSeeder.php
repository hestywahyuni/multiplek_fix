<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            ['role' => 'admin'],
            ['role' => 'pengguna']
        ];

        DB::table('role')->insert($role);
    }
}
