<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultAdminSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'admin';
        $user->username='admin';
        $user->email = 'admin@example.com';
        $user->password = '123456';

        $user->save();

        //$user->attachRole(Role::where('name', 'administrator')->first()->id);
    }
}
