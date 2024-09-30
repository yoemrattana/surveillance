<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection8Seeder extends Seeder
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
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផ្សារទំនើប",
                    "code_attribute"       => "location",
                    "group"                => 69,
                    "section"              => "7-2",
                    "sort"                 => "69",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផ្សារមធ្យម (ផ្សារធម្មតាតែលក់ពេញមួយថ្ងៃ)",
                    "code_attribute"       => "total",
                    "group"                => 70,
                    "section"              => "7-2",
                    "sort"                 => "70",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផ្សារខ្នាតតូច (ផ្សារលក់តែមួយព្រឹកឬល្ងាច)",
                    "code_attribute"       => "female",
                    "group"                => 71,
                    "section"              => "7-2",
                    "sort"                 => "71",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផ្សាររាត្រី (ផ្សារលក់តែពេលយប់)",
                    "code_attribute"       => "female",
                    "group"                => 72,
                    "section"              => "7-2",
                    "sort"                 => "72",
                    "visible"              => true,
                    "category"             => "production-service"
                ],

            ];
    }
}
