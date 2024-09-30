<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection40Seeder extends Seeder
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
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលជួបប្រទះអំពើហឹង្សាក្នុងគ្រួសារ",
                    "code_attribute"       => "",
                    "group"                => "202",
                    "section"              => "40",
                    "sort"                 => "202",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនករណីអំពើហឹង្សាក្នុងគ្រួសារពាក់ពន្ធ័ដល់អាជ្ញាធរ",
                    "code_attribute"       => "",
                    "group"                => "203",
                    "section"              => "40",
                    "sort"                 => "203",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនជនរងគ្រោះដោយអំពើ ហឹង្សាក្នុងគ្រួសារ",
                    "code_attribute"       => "total",
                    "group"                => "18",
                    "section"              => "40",
                    "sort"                 => "204",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនជនរងគ្រោះដោយអំពើ ហឹង្សាក្នុងគ្រួសារ",
                    "code_attribute"       => "female",
                    "group"                => "18",
                    "section"              => "40",
                    "sort"                 => "204",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនជនរងគ្រោះដោយអំពើ ហឹង្សាក្នុងគ្រួសារ",
                    "code_attribute"       => "total",
                    "group"                => "18up",
                    "section"              => "40",
                    "sort"                 => "204",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនជនរងគ្រោះដោយអំពើ ហឹង្សាក្នុងគ្រួសារ",
                    "code_attribute"       => "female",
                    "group"                => "18up",
                    "section"              => "40",
                    "sort"                 => "204",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលមានសមាជិកក្នុងគ្រួសារប្រើប្រាស់ គ្រឿងញៀន",
                    "code_attribute"       => "",
                    "group"                => "205",
                    "section"              => "40",
                    "sort"                 => "205",
                    "visible"              => true,
                    "category"             => "Violate and Drug"
                ],

            ];
    }
}
