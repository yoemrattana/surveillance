<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //occupation

        DB::table('attributes')->insert($this->setAttr());
    }

    private function setAttr() {
        return [
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរធ្វើស្រូវស្រ ឬធ្វើស្រូវចំការ",
                "code_attribute"       => "M1",
                "group"                => "32",
                "section"              => "5",
                "sort"                 => "32",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរធ្វើស្រូវស្រ ឬធ្វើស្រូវចំការ",
                "code_attribute"       => "M2",
                "group"                => "32",
                "section"              => "5",
                "sort"                 => "32",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរធ្វើស្រូវស្រ ឬធ្វើស្រូវចំការ",
                "code_attribute"       => "F1",
                "group"                => "32",
                "section"              => "5",
                "sort"                 => "32",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរធ្វើស្រូវស្រ ឬធ្វើស្រូវចំការ",
                "code_attribute"       => "F2",
                "group"                => "32",
                "section"              => "5",
                "sort"                 => "32",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលវែង",
                "code_attribute"       => "M1",
                "group"                => "33",
                "section"              => "5",
                "sort"                 => "33",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលវែង",
                "code_attribute"       => "M2",
                "group"                => "33",
                "section"              => "5",
                "sort"                 => "33",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលវែង",
                "code_attribute"       => "F1",
                "group"                => "33",
                "section"              => "5",
                "sort"                 => "33",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលវែង",
                "code_attribute"       => "F2",
                "group"                => "33",
                "section"              => "5",
                "sort"                 => "33",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលខ្លី",
                "code_attribute"       => "M1",
                "group"                => "34",
                "section"              => "5",
                "sort"                 => "34",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលខ្លី",
                "code_attribute"       => "M2",
                "group"                => "34",
                "section"              => "5",
                "sort"                 => "34",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលខ្លី",
                "code_attribute"       => "F1",
                "group"                => "34",
                "section"              => "5",
                "sort"                 => "34",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំចំការរយៈពេលខ្លី",
                "code_attribute"       => "F2",
                "group"                => "34",
                "section"              => "5",
                "sort"                 => "34",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំបន្លែ",
                "code_attribute"       => "M1",
                "group"                => "35",
                "section"              => "5",
                "sort"                 => "35",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំបន្លែ",
                "code_attribute"       => "M2",
                "group"                => "35",
                "section"              => "5",
                "sort"                 => "35",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំបន្លែ",
                "code_attribute"       => "F1",
                "group"                => "35",
                "section"              => "5",
                "sort"                 => "35",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដំាដំណាំបន្លែ",
                "code_attribute"       => "F2",
                "group"                => "35",
                "section"              => "5",
                "sort"                 => "35",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើស្រែ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរនេសាទ",
                "code_attribute"       => "M1",
                "group"                => "36",
                "section"              => "5",
                "sort"                 => "36",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរនេសាទ",
                "code_attribute"       => "M2",
                "group"                => "36",
                "section"              => "5",
                "sort"                 => "36",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរនេសាទ",
                "code_attribute"       => "F1",
                "group"                => "36",
                "section"              => "5",
                "sort"                 => "36",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរនេសាទ",
                "code_attribute"       => "F2",
                "group"                => "36",
                "section"              => "5",
                "sort"                 => "36",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរចិញ្ចឹមសត្វ",
                "code_attribute"       => "M1",
                "group"                => "37",
                "section"              => "5",
                "sort"                 => "37",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរចិញ្ចឹមសត្វ",
                "code_attribute"       => "M2",
                "group"                => "37",
                "section"              => "5",
                "sort"                 => "37",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរចិញ្ចឹមសត្វ",
                "code_attribute"       => "F1",
                "group"                => "37",
                "section"              => "5",
                "sort"                 => "37",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរចិញ្ចឹមសត្វ",
                "code_attribute"       => "F2",
                "group"                => "37",
                "section"              => "5",
                "sort"                 => "37",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរពីអនុផលព្រៃឈឺ",
                "code_attribute"       => "M1",
                "group"                => "38",
                "section"              => "5",
                "sort"                 => "38",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរពីអនុផលព្រៃឈឺ",
                "code_attribute"       => "M2",
                "group"                => "38",
                "section"              => "5",
                "sort"                 => "38",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរពីអនុផលព្រៃឈឺ",
                "code_attribute"       => "F1",
                "group"                => "38",
                "section"              => "5",
                "sort"                 => "38",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរពីអនុផលព្រៃឈឺ",
                "code_attribute"       => "F2",
                "group"                => "38",
                "section"              => "5",
                "sort"                 => "38",
                "visible"              => true,
                "category"             => "មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មត្បាញវវៃ (ក្រម៉ា ហូល ភាមួងសារុង កន្ទេល)",
                "code_attribute"       => "M1",
                "group"                => "39",
                "section"              => "5",
                "sort"                 => "39",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មត្បាញវវៃ (ក្រម៉ា ហូល ភាមួងសារុង កន្ទេល)",
                "code_attribute"       => "M2",
                "group"                => "39",
                "section"              => "5",
                "sort"                 => "39",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មត្បាញវវៃ (ក្រម៉ា ហូល ភាមួងសារុង កន្ទេល)",
                "code_attribute"       => "F1",
                "group"                => "39",
                "section"              => "5",
                "sort"                 => "39",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មត្បាញវវៃ (ក្រម៉ា ហូល ភាមួងសារុង កន្ទេល)",
                "code_attribute"       => "F2",
                "group"                => "39",
                "section"              => "5",
                "sort"                 => "39",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីផ្តៅ វល្លិ៍ ល្ពាក់ ឬស្សី  (កន្រ្តកផ្កាអង្រុត...)",
                "code_attribute"       => "M1",
                "group"                => "40",
                "section"              => "5",
                "sort"                 => "40",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីផ្តៅ វល្លិ៍ ល្ពាក់ ឬស្សី  (កន្រ្តកផ្កាអង្រុត...)",
                "code_attribute"       => "M2",
                "group"                => "40",
                "section"              => "5",
                "sort"                 => "40",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីផ្តៅ វល្លិ៍ ល្ពាក់ ឬស្សី  (កន្រ្តកផ្កាអង្រុត...)",
                "code_attribute"       => "F1",
                "group"                => "40",
                "section"              => "5",
                "sort"                 => "40",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីផ្តៅ វល្លិ៍ ល្ពាក់ ឬស្សី  (កន្រ្តកផ្កាអង្រុត...)",
                "code_attribute"       => "F2",
                "group"                => "40",
                "section"              => "5",
                "sort"                 => "40",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតគ្រឿងសង្ហារឹមពីឈើ (តុ ទូ កៅអី គ្រែ...)",
                "code_attribute"       => "M1",
                "group"                => "41",
                "section"              => "5",
                "sort"                 => "41",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតគ្រឿងសង្ហារឹមពីឈើ (តុ ទូ កៅអី គ្រែ...)",
                "code_attribute"       => "M2",
                "group"                => "41",
                "section"              => "5",
                "sort"                 => "41",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតគ្រឿងសង្ហារឹមពីឈើ (តុ ទូ កៅអី គ្រែ...)",
                "code_attribute"       => "F1",
                "group"                => "41",
                "section"              => "5",
                "sort"                 => "41",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតគ្រឿងសង្ហារឹមពីឈើ (តុ ទូ កៅអី គ្រែ...)",
                "code_attribute"       => "F2",
                "group"                => "41",
                "section"              => "5",
                "sort"                 => "41",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មចម្លាក់ធ្វើពិថ្ម ស្ពាន់ ស្បែក",
                "code_attribute"       => "M1",
                "group"                => "42",
                "section"              => "5",
                "sort"                 => "42",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មចម្លាក់ធ្វើពិថ្ម ស្ពាន់ ស្បែក",
                "code_attribute"       => "M2",
                "group"                => "42",
                "section"              => "5",
                "sort"                 => "42",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មចម្លាក់ធ្វើពិថ្ម ស្ពាន់ ស្បែក",
                "code_attribute"       => "F1",
                "group"                => "42",
                "section"              => "5",
                "sort"                 => "42",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មចម្លាក់ធ្វើពិថ្ម ស្ពាន់ ស្បែក",
                "code_attribute"       => "F2",
                "group"                => "42",
                "section"              => "5",
                "sort"                 => "42",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីដែក អាលុយមីញូម កញ្ចក់",
                "code_attribute"       => "M1",
                "group"                => "43",
                "section"              => "5",
                "sort"                 => "43",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីដែក អាលុយមីញូម កញ្ចក់",
                "code_attribute"       => "M2",
                "group"                => "43",
                "section"              => "5",
                "sort"                 => "43",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីដែក អាលុយមីញូម កញ្ចក់",
                "code_attribute"       => "F1",
                "group"                => "43",
                "section"              => "5",
                "sort"                 => "43",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពីដែក អាលុយមីញូម កញ្ចក់",
                "code_attribute"       => "F2",
                "group"                => "43",
                "section"              => "5",
                "sort"                 => "43",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពី ជ័រផ្លាស្ទីក ធុងទឹក ទុយោ គ្រឿងជ័រ",
                "code_attribute"       => "M1",
                "group"                => "44",
                "section"              => "5",
                "sort"                 => "44",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពី ជ័រផ្លាស្ទីក ធុងទឹក ទុយោ គ្រឿងជ័រ",
                "code_attribute"       => "M2",
                "group"                => "44",
                "section"              => "5",
                "sort"                 => "44",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពី ជ័រផ្លាស្ទីក ធុងទឹក ទុយោ គ្រឿងជ័រ",
                "code_attribute"       => "F1",
                "group"                => "44",
                "section"              => "5",
                "sort"                 => "44",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្មផលិតពី ជ័រផ្លាស្ទីក ធុងទឹក ទុយោ គ្រឿងជ័រ",
                "code_attribute"       => "F2",
                "group"                => "44",
                "section"              => "5",
                "sort"                 => "44",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម កែឆ្នែឬ វិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកកស៊ីអ៊ីវ ទឹកផ្លែឈើ'",
                "code_attribute"       => "M1",
                "group"                => "45",
                "section"              => "5",
                "sort"                 => "45",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម កែឆ្នែឬ វិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកកស៊ីអ៊ីវ ទឹកផ្លែឈើ'",
                "code_attribute"       => "M2",
                "group"                => "45",
                "section"              => "5",
                "sort"                 => "45",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម កែឆ្នែឬ វិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកកស៊ីអ៊ីវ ទឹកផ្លែឈើ'",
                "code_attribute"       => "F1",
                "group"                => "45",
                "section"              => "5",
                "sort"                 => "45",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម កែឆ្នែឬ វិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកកស៊ីអ៊ីវ ទឹកផ្លែឈើ'",
                "code_attribute"       => "F2",
                "group"                => "45",
                "section"              => "5",
                "sort"                 => "45",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម ផលិតផ្សេងៗ ដែលគ្មានឈ្មោះខាងលើ",
                "code_attribute"       => "M1",
                "group"                => "46",
                "section"              => "5",
                "sort"                 => "46",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម ផលិតផ្សេងៗ ដែលគ្មានឈ្មោះខាងលើ",
                "code_attribute"       => "M2",
                "group"                => "46",
                "section"              => "5",
                "sort"                 => "46",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម ផលិតផ្សេងៗ ដែលគ្មានឈ្មោះខាងលើ",
                "code_attribute"       => "F1",
                "group"                => "46",
                "section"              => "5",
                "sort"                 => "46",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរសិប្បកម្ម ផលិតផ្សេងៗ ដែលគ្មានឈ្មោះខាងលើ",
                "code_attribute"       => "F2",
                "group"                => "46",
                "section"              => "5",
                "sort"                 => "46",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរលក់ដូរនិងធ្វើជំនួញ",
                "code_attribute"       => "M1",
                "group"                => "47",
                "section"              => "5",
                "sort"                 => "47",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរលក់ដូរនិងធ្វើជំនួញ",
                "code_attribute"       => "M2",
                "group"                => "47",
                "section"              => "5",
                "sort"                 => "47",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរលក់ដូរនិងធ្វើជំនួញ",
                "code_attribute"       => "F1",
                "group"                => "47",
                "section"              => "5",
                "sort"                 => "47",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរលក់ដូរនិងធ្វើជំនួញ",
                "code_attribute"       => "F2",
                "group"                => "47",
                "section"              => "5",
                "sort"                 => "47",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរជាជាងជួសជុល",
                "code_attribute"       => "M1",
                "group"                => "48",
                "section"              => "5",
                "sort"                 => "48",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរជាជាងជួសជុល",
                "code_attribute"       => "M2",
                "group"                => "48",
                "section"              => "5",
                "sort"                 => "48",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរជាជាងជួសជុល",
                "code_attribute"       => "F1",
                "group"                => "48",
                "section"              => "5",
                "sort"                 => "48",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរជាជាងជួសជុល",
                "code_attribute"       => "F2",
                "group"                => "48",
                "section"              => "5",
                "sort"                 => "48",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខក្នុងវិស័យដឹកជញ្ជូន (តាក់ស៊ី ម៉ូតូឌុប បើកកាណូត ទូកដរ...",
                "code_attribute"       => "M1",
                "group"                => "49",
                "section"              => "5",
                "sort"                 => "49",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខក្នុងវិស័យដឹកជញ្ជូន (តាក់ស៊ី ម៉ូតូឌុប បើកកាណូត ទូកដរ...",
                "code_attribute"       => "M2",
                "group"                => "49",
                "section"              => "5",
                "sort"                 => "49",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខក្នុងវិស័យដឹកជញ្ជូន (តាក់ស៊ី ម៉ូតូឌុប បើកកាណូត ទូកដរ...",
                "code_attribute"       => "F1",
                "group"                => "49",
                "section"              => "5",
                "sort"                 => "49",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខក្នុងវិស័យដឹកជញ្ជូន (តាក់ស៊ី ម៉ូតូឌុប បើកកាណូត ទូកដរ...",
                "code_attribute"       => "F2",
                "group"                => "49",
                "section"              => "5",
                "sort"                 => "49",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដើរស៊ីឈ្នួល ក្នុងវិស័យកសិកម្ម កម្មករសំណង់...",
                "code_attribute"       => "M1",
                "group"                => "50",
                "section"              => "5",
                "sort"                 => "50",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដើរស៊ីឈ្នួល ក្នុងវិស័យកសិកម្ម កម្មករសំណង់...",
                "code_attribute"       => "M2",
                "group"                => "50",
                "section"              => "5",
                "sort"                 => "50",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដើរស៊ីឈ្នួល ក្នុងវិស័យកសិកម្ម កម្មករសំណង់...",
                "code_attribute"       => "F1",
                "group"                => "50",
                "section"              => "5",
                "sort"                 => "50",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរដើរស៊ីឈ្នួល ក្នុងវិស័យកសិកម្ម កម្មករសំណង់...",
                "code_attribute"       => "F2",
                "group"                => "50",
                "section"              => "5",
                "sort"                 => "50",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរក្នុងវិស័យឯកជន (បុគ្គលិក កម្មកររោងចក្រ) និងអង្គការ NGO",
                "code_attribute"       => "M1",
                "group"                => "51",
                "section"              => "5",
                "sort"                 => "51",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរក្នុងវិស័យឯកជន (បុគ្គលិក កម្មកររោងចក្រ) និងអង្គការ NGO",
                "code_attribute"       => "M2",
                "group"                => "51",
                "section"              => "5",
                "sort"                 => "51",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរក្នុងវិស័យឯកជន (បុគ្គលិក កម្មកររោងចក្រ) និងអង្គការ NGO",
                "code_attribute"       => "F1",
                "group"                => "51",
                "section"              => "5",
                "sort"                 => "51",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរក្នុងវិស័យឯកជន (បុគ្គលិក កម្មកររោងចក្រ) និងអង្គការ NGO",
                "code_attribute"       => "F2",
                "group"                => "51",
                "section"              => "5",
                "sort"                 => "51",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            //
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរជាមន្រ្តីរាជការស៊ីវិល ប៉ូលីស ទាហាន ប៉េអឹម",
                "code_attribute"       => "M1",
                "group"                => "52",
                "section"              => "5",
                "sort"                 => "52",
                "visible"              => true,
                "category"             => "មុខរបរធ្វើសិប្បកម្ម"
            ],
            [
                "name_attribute"       => "",
                "name_attribute_khmer" => "ចំនួនមនុស្សមានមុខរបរជាមន្រ្តីរាជការស៊ីវិល ប៉ូលីស ទាហាន ប៉េអឹម",
                "code_attribute"       => "F1",
                "group"                => "52",
                "section"              => "5",
                "sort"                 => "52",
                "visible"              => true,
                "category"             => "មមុខរបរធ្វើសិប្បកម្ម"
            ],
        ];
    }
}


