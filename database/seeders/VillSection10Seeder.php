<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection10Seeder extends Seeder
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
                    "name_attribute_khmer" => "ចំនួនគ្រួសារធ្វើស្រែជាចំបងដែលមានដីស្រែតិចជាង១ហិចតា",
                    "code_attribute"       => "family",
                    "group"                => 90,
                    "section"              => "10",
                    "sort"                 => 90,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារធ្វើស្រែជាចំបងដែលគ្មានដីស្រែផ្ទាល់ខ្លួន",
                    "code_attribute"       => "family",
                    "group"                => 91,
                    "section"              => "10",
                    "sort"                 => 91,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដីស្រែទទួលបានទឹកពីប្រពន្ធ័ធារាសាស្ត្រ",
                    "code_attribute"       => "family",
                    "group"                => 92,
                    "section"              => "10",
                    "sort"                 => 92,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារធ្វើស្រែតាមបែបប្រពលវប្បកម្ម(ប.រ.ស)",
                    "code_attribute"       => "family",
                    "group"                => 93,
                    "section"              => "10",
                    "sort"                 => 93,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារមានអណ្តូងទឹកសម្រាប់ស្រោចស្រព(អណ្តូងកសិកម្ម)",
                    "code_attribute"       => "family",
                    "group"                => 94,
                    "section"              => "10",
                    "sort"                 => 94,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនអណ្តូងទឹកសម្រាប់ស្រោចស្រព(អណ្តូងកសិកម្ម)",
                    "code_attribute"       => "family",
                    "group"                => 95,
                    "section"              => "10",
                    "sort"                 => 95,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទិន្នផលស្រូវរដូវវស្សាជាមធ្យមក្នុង១ហិកតាមានប្រហែល",
                    "code_attribute"       => "family",
                    "group"                => 96,
                    "section"              => "10",
                    "sort"                 => 96,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទិន្នផលស្រូវប្រាំងជាមធ្យមក្នុង១ហិកតាមានប្រហែល",
                    "code_attribute"       => "family",
                    "group"                => 97,
                    "section"              => "10",
                    "sort"                 => 97,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងឆ្នាំនេះតំលៃស្រូវលក់ចេញក្នុង១គីឡូក្រាមមានតម្លៃខ្ពស់កំផុត",
                    "code_attribute"       => "max",
                    "group"                => 98,
                    "section"              => "10",
                    "sort"                 => 98,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងឆ្នាំនេះតំលៃស្រូវលក់ចេញក្នុង១គីឡូក្រាមមានតម្លៃទាបបំផុត",
                    "code_attribute"       => "min",
                    "group"                => 98,
                    "section"              => "10",
                    "sort"                 => 98,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារធ្វើដំណាំចំការជាចំបងមានដីដំណាំចំការតិចជាង១ហិកតា",
                    "code_attribute"       => "family",
                    "group"                => 99,
                    "section"              => "10",
                    "sort"                 => 99,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារធ្វើដំណាំចំការជាចំបងគ្មានដីធ្វើចំការផ្ទាល់ខ្លួន",
                    "code_attribute"       => "family",
                    "group"                => 100,
                    "section"              => "10",
                    "sort"                 => 100,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើជីគីមី",
                    "code_attribute"       => "family",
                    "group"                => 101,
                    "section"              => "10",
                    "sort"                 => 101,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើជីធម្មជាតិ(ជីកំប៉ុស្ត៍ ជីសរិរាង្គ...)",
                    "code_attribute"       => "family",
                    "group"                => 102,
                    "section"              => "10",
                    "sort"                 => 102,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើថ្នាំគីមីសំលាប់សត្វល្អិតនិងស្មៅ",
                    "code_attribute"       => "family",
                    "group"                => 103,
                    "section"              => "10",
                    "sort"                 => 103,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើថ្នាំសរីរាង្គ(ធម្មជាតិ)សំលាប់សត្វល្អិតនិងស្មៅ",
                    "code_attribute"       => "family",
                    "group"                => 104,
                    "section"              => "10",
                    "sort"                 => 104,
                    "visible"              => true,
                    "category"             => "agriculture"
                ],


            ];
    }
}
