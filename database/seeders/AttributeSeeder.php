<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attributes')->truncate();
        //DB::table('attributes')->insert($this->setAttr());

        $this->call(VillSection1Seeder::class);
        $this->call(VillSection2Seeder::class);
        $this->call(VillSection3Seeder::class);
        $this->call(VillSection4Seeder::class);
        $this->call(VillSection5Seeder::class);
        $this->call(VillSection6Seeder::class);
        $this->call(VillSection7Seeder::class);
        $this->call(VillSection8Seeder::class);
        $this->call(VillSection9Seeder::class);
        $this->call(VillSection10Seeder::class);
        $this->call(VillSection11Seeder::class);
        $this->call(VillSection14To18Seeder::class);
        $this->call(VillSection19To20Seeder::class);
        $this->call(VillSection21To27Seeder::class);
        $this->call(VillSection28To35Seeder::class);
        $this->call(VillSection36To39Seeder::class);
        $this->call(VillSection40Seeder::class);
        $this->call(VillSection41Seeder::class);
        $this->call(VillSection42Seeder::class);
    }

}
