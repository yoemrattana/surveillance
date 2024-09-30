<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection1Seeder extends Seeder
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
                    "name_attribute"       => "Total number of families",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារសរុបក្នុងភូមិ",
                    "code_attribute"       => "family",
                    "group"                => null,
                    "section"              => "1",
                    "sort"                 => "1",
                    "visible"              => true,
                    "category"             => "ស្ថិតិគ្រួសារ"
                ],
                [
                    "name_attribute"       => "# Female household headed",
                    "name_attribute_khmer" => "ក្នុងនោះចំនួនគ្រួសារដែលមានស្រី្តជាមេគ្រួសារ",
                    "code_attribute"       => "female_householder",
                    "group"                => null,
                    "section"              => "1",
                    "sort"                 => "2",
                    "visible"              => true,
                    "category"             => "ស្ថិតិគ្រួសារ"
                ]

            ];
    }
}
