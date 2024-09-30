<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection6Seeder extends Seeder
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
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនមនុស្សចំណាកស្រុកក្នុងប្រទេស",
                    "code_attribute"       => "M",
                    "group"                => 53,
                    "section"              => "6",
                    "sort"                 => "53",
                    "visible"              => true,
                    "category"             => "migration"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនមនុស្សចំណាកស្រុកក្នុងប្រទេស",
                    "code_attribute"       => "F",
                    "group"                => 53,
                    "section"              => "6",
                    "sort"                 => "53",
                    "visible"              => true,
                    "category"             => "migration"
                ],

                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងនោះ</span> 53.1 ចំនួនមនុស្សអាយុ <span class=\"text-danger\">ក្រោម18</span>ឆ្នាំចំណាកស្រុកក្នុងប្រទេស",
                    "code_attribute"       => "M",
                    "group"                => 53,
                    "section"              => "6",
                    "sort"                 => "53",
                    "visible"              => true,
                    "category"             => "migration"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងនោះ</span> 53.1 ចំនួនមនុស្សអាយុ <span class=\"text-danger\">ក្រោម18</span>ឆ្នាំចំណាកស្រុកក្នុងប្រទេស",
                    "code_attribute"       => "F",
                    "group"                => 53,
                    "section"              => "6",
                    "sort"                 => "53",
                    "visible"              => true,
                    "category"             => "migration"
                ],

                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនមនុស្សចំណាកស្រុកក្រៅប្រទេស",
                    "code_attribute"       => "M",
                    "group"                => 54,
                    "section"              => "6",
                    "sort"                 => "54",
                    "visible"              => true,
                    "category"             => "migration"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនមនុស្សចំណាកស្រុកក្រៅប្រទេស",
                    "code_attribute"       => "F",
                    "group"                => 54,
                    "section"              => "6",
                    "sort"                 => "54",
                    "visible"              => true,
                    "category"             => "migration"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងនោះ</span> 54.1 ចំនួនមនុស្សអាយុ <span class=\"text-danger\">ក្រោម18</span>ឆ្នាំចំណាកស្រុកក្នុងប្រទេស",
                    "code_attribute"       => "M",
                    "group"                => 54,
                    "section"              => "6",
                    "sort"                 => "54",
                    "visible"              => true,
                    "category"             => "migration"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងនោះ</span> 54.1 ចំនួនមនុស្សអាយុ <span class=\"text-danger\">ក្រោម18</span>ឆ្នាំចំណាកស្រុកក្នុងប្រទេស",
                    "code_attribute"       => "F",
                    "group"                => 54,
                    "section"              => "6",
                    "sort"                 => "54",
                    "visible"              => true,
                    "category"             => "migration"
                ],

            ];
    }
}
