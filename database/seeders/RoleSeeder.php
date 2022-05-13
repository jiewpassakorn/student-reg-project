<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Carbon\Carbon;
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
        // Role::create(['name' => 'Administrator']);
        // Role::create(['name' => 'Student']);
        // Role::create(['name' => 'Teacher']);
        
        $role = [
            ['name' => 'admin','created_at' => Carbon::now()],
            ['name' => 'student', 'created_at' => Carbon::now()],
            ['name' => 'teacher', 'created_at' => Carbon::now()],
        ];

        DB::table('roles')->insert($role);
    }
}
