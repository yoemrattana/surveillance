<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection21to27Seeder extends Seeder
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
                    "name_attribute_khmer" => "ឈោ្មះមណ្ឌលសុខភាពដែលប្រជាជនភាគច្រើនទៅរកសេវា",
                    "code_attribute"       => "",
                    "group"                => 151,
                    "section"              => "21",
                    "sort"                 => "151",
                    "visible"              => true,
                    "category"             => "health"
                ], [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំងាយមធ្យមពីចំនុចកណ្តាលភូមិទៅមណ្ឌលសុខភាព",
                "code_attribute"       => "km",
                "group"                => 152,
                "section"              => "21",
                "sort"                 => "152",
                "visible"              => true,
                "category"             => "health"
            ], [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនពេទ្យឆ្មបដែលរស់នៅក្នុងភូមិ",
                "code_attribute"       => "poeple",
                "group"                => 153,
                "section"              => "21",
                "sort"                 => "153",
                "visible"              => true,
                "category"             => "health"
            ],

                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្ល (សំរាលកូន ) ដោយឆ្មបបុរាណ",
                    "code_attribute"       => "woman",
                    "group"                => 154,
                    "section"              => "22",
                    "sort"                 => "154",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្ល (សំរាលកូន ) ដោយឆ្មបបុរាណ",
                    "code_attribute"       => "baby",
                    "group"                => 154,
                    "section"              => "22",
                    "sort"                 => "154",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្ល (សំរាលកូន ) ដោយឆ្មបបុរាណ",
                    "code_attribute"       => "deadwoman",
                    "group"                => 154,
                    "section"              => "22",
                    "sort"                 => "154",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [

                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្ល (សំរាលកូន ) ដោយឆ្មបបុរាណ",
                    "code_attribute"       => "deadbaby",
                    "group"                => 154,
                    "section"              => "22",
                    "sort"                 => "154",
                    "visible"              => true,
                    "category"             => "health"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្លេ (សំរាលកូន ) ដោយពេទ្យឆ្មបឬពេទ្យមានជំនាញ",
                    "code_attribute"       => "woman",
                    "group"                => 155,
                    "section"              => "22",
                    "sort"                 => "155",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្លេ (សំរាលកូន ) ដោយពេទ្យឆ្មបឬពេទ្យមានជំនាញ",
                    "code_attribute"       => "baby",
                    "group"                => 155,
                    "section"              => "22",
                    "sort"                 => "155",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្លេ (សំរាលកូន ) ដោយពេទ្យឆ្មបឬពេទ្យមានជំនាញ",
                    "code_attribute"       => "deadwoman",
                    "group"                => 155,
                    "section"              => "22",
                    "sort"                 => "155",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនស្ត្រីដែលបានឆ្លងទន្លេ (សំរាលកូន ) ដោយពេទ្យឆ្មបឬពេទ្យមានជំនាញ",
                    "code_attribute"       => "deadbaby",
                    "group"                => 155,
                    "section"              => "22",
                    "sort"                 => "155",
                    "visible"              => true,
                    "category"             => "health"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "woman",
                    "group"                => 155.1,
                    "section"              => "22",
                    "sort"                 => "155.1",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "baby",
                    "group"                => 155.1,
                    "section"              => "22",
                    "sort"                 => "155.1",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "deadwoman",
                    "group"                => 155.1,
                    "section"              => "22",
                    "sort"                 => "155.1",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "deadbaby",
                    "group"                => 155.1,
                    "section"              => "22",
                    "sort"                 => "155.1",
                    "visible"              => true,
                    "category"             => "health"
                ],

                //23
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទារកដែលបានចុះសំបុត្រកំណើត",
                    "code_attribute"       => "x",
                    "group"                => 156,
                    "section"              => "23",
                    "sort"                 => "156",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនកុមារដែលមានអាយុ ចន្លោះពី៩ខែ-១២ខែ",
                    "code_attribute"       => "x",
                    "group"                => 157,
                    "section"              => "23",
                    "sort"                 => "157",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្នុងនោះ 157.1 បានចាក់ថ្នាំបង្ការគ្រប់ចំនួន",
                    "code_attribute"       => "x",
                    "group"                => 157.1,
                    "section"              => "23",
                    "sort"                 => "157.1",
                    "visible"              => true,
                    "category"             => "health"
                ],

                //24
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកម៉ាស៊ីន(ទឹករ៉ូបី ណេ បានឆ្លងកាត់ប្រព័ន្ធធ្វើទឹកឱ្យស្អាតដែល ភ្ជាប់ទៅ តាមផ្ទះឬទៅតាមកន្លែងសាធារណៈ)",
                    "code_attribute"       => "family",
                    "group"                => 158,
                    "section"              => "24",
                    "sort"                 => "158",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភពទឹក អណ្ដូងស្នប់ អណ្ដូងចំរុះ(អណ្តូងខួង)",
                    "code_attribute"       => "family",
                    "group"                => 159,
                    "section"              => "24",
                    "sort"                 => "159",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភពទឹក អណ្ដូងស្នប់ អណ្ដូងចំរុះ(អណ្តូងខួង)",
                    "code_attribute"       => "well",
                    "group"                => 159,
                    "section"              => "24",
                    "sort"                 => "159",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភព អណ្តូងជីកដែលមានការការពារ",
                    "code_attribute"       => "family",
                    "group"                => 160,
                    "section"              => "24",
                    "sort"                 => "160",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភព អណ្តូងជីកដែលមានការការពារ",
                    "code_attribute"       => "well",
                    "group"                => 160,
                    "section"              => "24",
                    "sort"                 => "160",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភព អណ្ដូងជីកដែលមិនមានការការពារ",
                    "code_attribute"       => "family",
                    "group"                => 161,
                    "section"              => "24",
                    "sort"                 => "161",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភព អណ្ដូងជីកដែលមិនមានការការពារ",
                    "code_attribute"       => "well",
                    "group"                => 161,
                    "section"              => "24",
                    "sort"                 => "161",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកស្រះ",
                    "code_attribute"       => "family",
                    "group"                => 162,
                    "section"              => "24",
                    "sort"                 => "162",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកស្រះ",
                    "code_attribute"       => "well",
                    "group"                => 162,
                    "section"              => "24",
                    "sort"                 => "162",
                    "visible"              => true,
                    "category"             => "health"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកភ្លៀងដែល ការការពារ",
                    "code_attribute"       => "family",
                    "group"                => 163,
                    "section"              => "24",
                    "sort"                 => "163",
                    "visible"              => true,
                    "category"             => "health"
                ],

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកពីប្រភពផ្សេងៗ (ទន្លេ ស្ទឹង បឹង ត្រពាំង ទឹកអូរ ទឹកជ្រោះ)",
                    "code_attribute"       => "family",
                    "group"                => 164,
                    "section"              => "24",
                    "sort"                 => "164",
                    "visible"              => true,
                    "category"             => "health"
                ],


//25
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលទទួលទានទឹកម៉ាស៊ីន",
                    "code_attribute"       => "well",
                    "group"                => 165,
                    "section"              => "25",
                    "sort"                 => "165",
                    "visible"              => true,
                    "category"             => "water resource"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលទទួលទានទឹកមានសុវត្ថិភាព (ទឹកបរិសុទ្ធ ឬបើ ប្រាស់ឧបករណ៍ចំរោះទឹក ដោយប្រើធុងចមោះសេរាមិក ឬធុង ចម្រះជីវខ្សាច់)",
                    "code_attribute"       => "well",
                    "group"                => 166,
                    "section"              => "25",
                    "sort"                 => "166",
                    "visible"              => true,
                    "category"             => "water resource"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារដែលមានទំលាប់ទទួលទានទឹកដោយដាំទឹកឱ្យពុះ",
                    "code_attribute"       => "well",
                    "group"                => 167,
                    "section"              => "25",
                    "sort"                 => "167",
                    "visible"              => true,
                    "category"             => "water resource"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុបចំនួនគ្រួសារដែលទទួលទានទឹកដោយប្រើវិធីខាងលើ",
                    "code_attribute"       => "well",
                    "group"                => 167.1,
                    "section"              => "25",
                    "sort"                 => "167.1",
                    "visible"              => true,
                    "category"             => "water resource"
                ],

                //26
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រួសារដែលមានទឹកអណ្តូងស្នប់ ឬអណ្ដូងលូ ឬបំពង់ទុយោប្រើប្រាស់ដល់ក្នុងផ្ទះ ឬចំងាយជិតជាង១៥០ម៉ែត្រពីផ្ទះ",
                    "code_attribute"       => "",
                    "group"                => 168,
                    "section"              => "26",
                    "sort"                 => "168",
                    "visible"              => true,
                    "category"             => "water resource"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រួសារដែលមានទឹកអណ្តូងស្នប់ ឬអណ្ដូងលូ ឬបំពង់ទុយោ ប្រើប្រាស់ ដែលមានចំងាយឆ្ងាយជាង១៥០ម៉ែត្រពីផ្ទះ",
                    "code_attribute"       => "",
                    "group"                => 169,
                    "section"              => "26",
                    "sort"                 => "169",
                    "visible"              => true,
                    "category"             => "water resource"
                ],
                //27
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនគ្រួសារមានបង្គន់អនាម័យប្រើប្រាស់ផ្ទាល់ខ្លួន",
                    "code_attribute"       => "",
                    "group"                => 170,
                    "section"              => "27",
                    "sort"                 => "170",
                    "visible"              => true,
                    "category"             => "toilet"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "170.1. គ្រួសារប្រើប្រាស់បង្គន់អនាម័យមានបច្ចេកទេស",
                    "code_attribute"       => "",
                    "group"                => 170.1,
                    "section"              => "27",
                    "sort"                 => "170.1",
                    "visible"              => true,
                    "category"             => "toilet"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "170.2. គ្រួសារប្រើប្រាស់បង្គន់អនាម័យគ្មានបច្ចេកទេស",
                    "code_attribute"       => "",
                    "group"                => 170.2,
                    "section"              => "27",
                    "sort"                 => "170.2",
                    "visible"              => true,
                    "category"             => "toilet"
                ],

                //

            ];
    }
}
