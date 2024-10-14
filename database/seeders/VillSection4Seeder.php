<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attributes')->insert($this->setAttr());
    }

    private function setAttr(): array
    {
        return
            [
                [
                    "name_attribute"       => "Distance from village center to primary school (grade 1 - grade 6)",
                    "name_attribute_khmer" => "ចំងាយពីចំនុចកណ្តាលភូមិទៅសាលារៀនបឋមសិក្សា(ថ្នាក់ទី១ ដល់ថ្នាក់ទី៦)",
                    "code_attribute"       => "",
                    "group"                => null,
                    "section"              => "4",
                    "sort"                 => "29",
                    "visible"              => true,
                    "category"             => "ទីតាំងសាលារៀននានាធៀបនឹងចំនុចកណ្តាលភូមិ"
                ],
                [
                    "name_attribute"       => "Distance from the village center to junior secondary school (grade 7 - grade 9)",
                    "name_attribute_khmer" => "ចំងាយពីចំនុចកណ្តាលភូមិទៅសាលាអនុវិទ្យាល័យ(ថ្នាក់ទី៧ ដល់ថ្នាក់ទី៩)",
                    "code_attribute"       => "",
                    "group"                => null,
                    "section"              => "4",
                    "sort"                 => "30",
                    "visible"              => true,
                    "category"             => "ទីតាំងសាលារៀននានាធៀបនឹងចំនុចកណ្តាលភូមិ"
                ],
                [
                    "name_attribute"       => "Distance from the village center to senior secondary school (grade 10 - grade 12)",
                    "name_attribute_khmer" => "ចំងាយពីចំនុចកណ្តាលភូមិទៅសាលាវិទ្យាល័យ(ថ្នាក់ទី១០ ដល់ថ្នាក់ទី១២)",
                    "code_attribute"       => "",
                    "group"                => null,
                    "section"              => "4",
                    "sort"                 => "31",
                    "visible"              => true,
                    "category"             => "ទីតាំងសាលារៀននានាធៀបនឹងចំនុចកណ្តាលភូមិ"
                ],
            ];
    }
}
