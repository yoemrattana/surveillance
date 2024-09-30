<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection2Seeder extends Seeder
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
                    "name_attribute"       => "0-2",
                    "name_attribute_khmer" => "0-2",
                    "code_attribute"       => "M0-2",
                    "group"                => "0-2",
                    "section"              => "2",
                    "sort"                 => "3",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "3-4",
                    "name_attribute_khmer" => "3-4",
                    "code_attribute"       => "M3-4",
                    "group"                => "3-4",
                    "section"              => "2",
                    "sort"                 => "4",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "3-4 Kindergarden",
                    "name_attribute_khmer" => "3-4 Kindergarden",
                    "code_attribute"       => "M3-4_kindergarden",
                    "group"                => "3-4",
                    "section"              => "2",
                    "sort"                 => "4",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "5",
                    "name_attribute_khmer" => "5",
                    "code_attribute"       => "M5",
                    "group"                => "5",
                    "section"              => "2",
                    "sort"                 => "5",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "5 Kindergarden",
                    "name_attribute_khmer" => "5 Kindergarden",
                    "code_attribute"       => "M5_kindergarden",
                    "group"                => "5",
                    "section"              => "2",
                    "sort"                 => "5",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "6",
                    "name_attribute_khmer" => "6",
                    "code_attribute"       => "M6",
                    "group"                => "6",
                    "section"              => "2",
                    "sort"                 => "6",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "6",
                    "name_attribute_khmer" => "6",
                    "code_attribute"       => "M6_kindergarden",
                    "group"                => "6",
                    "section"              => "2",
                    "sort"                 => "6",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "6",
                    "name_attribute_khmer" => "6",
                    "code_attribute"       => "M6_primary",
                    "group"                => "6",
                    "section"              => "2",
                    "sort"                 => "6",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "7-11",
                    "name_attribute_khmer" => "7-11",
                    "code_attribute"       => "M7-11",
                    "group"                => "7-11",
                    "section"              => "2",
                    "sort"                 => "7",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "7-11",
                    "name_attribute_khmer" => "7-11",
                    "code_attribute"       => "M7-11_primary",
                    "group"                => "7-11",
                    "section"              => "2",
                    "sort"                 => "7",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "12-14",
                    "name_attribute_khmer" => "12-14",
                    "code_attribute"       => "M12-14",
                    "group"                => "12-14",
                    "section"              => "2",
                    "sort"                 => "8",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "12-14",
                    "name_attribute_khmer" => "12-14",
                    "code_attribute"       => "M12-14_primary",
                    "group"                => "12-14",
                    "section"              => "2",
                    "sort"                 => "8",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "12-14",
                    "name_attribute_khmer" => "12-14",
                    "code_attribute"       => "M12-14_secondary",
                    "group"                => "12-14",
                    "section"              => "2",
                    "sort"                 => "8",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "15-17",
                    "name_attribute_khmer" => "15-17",
                    "code_attribute"       => "M15-17",
                    "group"                => "15-17",
                    "section"              => "2",
                    "sort"                 => "9",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "15-17",
                    "name_attribute_khmer" => "15-17",
                    "code_attribute"       => "M15-17_primary",
                    "group"                => "15-17",
                    "section"              => "2",
                    "sort"                 => "9",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "15-17",
                    "name_attribute_khmer" => "15-17",
                    "code_attribute"       => "M15-17_secondary",
                    "group"                => "15-17",
                    "section"              => "2",
                    "sort"                 => "9",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "15-17",
                    "name_attribute_khmer" => "15-17",
                    "code_attribute"       => "M15-17_highschool",
                    "group"                => "15-17",
                    "section"              => "2",
                    "sort"                 => "9",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "15-17",
                    "name_attribute_khmer" => "15-17",
                    "code_attribute"       => "M15-17_illiterature",
                    "group"                => "15-17",
                    "section"              => "2",
                    "sort"                 => "9",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "18-24",
                    "name_attribute_khmer" => "18-24",
                    "code_attribute"       => "M18-24",
                    "group"                => "18-24",
                    "section"              => "2",
                    "sort"                 => "10",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "18-24",
                    "name_attribute_khmer" => "18-24",
                    "code_attribute"       => "M18-24_highschool",
                    "group"                => "18-24",
                    "section"              => "2",
                    "sort"                 => "10",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "18-24",
                    "name_attribute_khmer" => "18-24",
                    "code_attribute"       => "M18-24_university",
                    "group"                => "18-24",
                    "section"              => "2",
                    "sort"                 => "10",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "18-24",
                    "name_attribute_khmer" => "18-24",
                    "code_attribute"       => "M18-24_speciality",
                    "group"                => "18-24",
                    "section"              => "2",
                    "sort"                 => "10",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "18-24",
                    "name_attribute_khmer" => "18-24",
                    "code_attribute"       => "M18-24_illiterature",
                    "group"                => "18-24",
                    "section"              => "2",
                    "sort"                 => "10",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "25-35",
                    "name_attribute_khmer" => "25-35",
                    "code_attribute"       => "M25-35",
                    "group"                => "25-35",
                    "section"              => "2",
                    "sort"                 => "11",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "25-35",
                    "name_attribute_khmer" => "25-35",
                    "code_attribute"       => "M25-35_university",
                    "group"                => "25-35",
                    "section"              => "2",
                    "sort"                 => "11",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "25-35",
                    "name_attribute_khmer" => "25-35",
                    "code_attribute"       => "M25-35_speciality",
                    "group"                => "25-35",
                    "section"              => "2",
                    "sort"                 => "11",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "25-35",
                    "name_attribute_khmer" => "25-35",
                    "code_attribute"       => "M25-35_illiterature",
                    "group"                => "25-35",
                    "section"              => "2",
                    "sort"                 => "11",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "36-45",
                    "name_attribute_khmer" => "36-45",
                    "code_attribute"       => "M36-45",
                    "group"                => "36-45",
                    "section"              => "2",
                    "sort"                 => "12",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "36-45",
                    "name_attribute_khmer" => "36-45",
                    "code_attribute"       => "M36-45_illiterature",
                    "group"                => "36-45",
                    "section"              => "2",
                    "sort"                 => "12",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "46-60",
                    "name_attribute_khmer" => "46-60",
                    "code_attribute"       => "M46-60",
                    "group"                => "46-60",
                    "section"              => "2",
                    "sort"                 => "13",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ],
                [
                    "name_attribute"       => "61",
                    "name_attribute_khmer" => "61",
                    "code_attribute"       => "M61",
                    "group"                => "61",
                    "section"              => "2",
                    "sort"                 => "14",
                    "visible"              => true,
                    "category"             => "ស្ថិតិមនុស្សប្រុសនិងការអប់រំ"
                ]
            ];
    }
}
