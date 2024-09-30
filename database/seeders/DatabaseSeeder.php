<?php

namespace Database\Seeders;
use App\Models\Module;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(LaratrustSeeder::class);
        $this->call(DefaultAdminSedder::class);

        $modules = config('laratrust_seeder.roles_structure.administrator');

        foreach ($modules as $module => $value) {
            $newModule = new Module();

            $newModule->name = $module;
            $newModule->display_name = ucwords(str_replace('_', ' ', $module));
            $newModule->description = $value['description'];

            $newModule->save();
        }
    }
}
