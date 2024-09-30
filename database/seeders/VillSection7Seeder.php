<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection7Seeder extends Seeder
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
                    "name_attribute_khmer" => "សរុបចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវមធ្យមនិងធំ",
                    "code_attribute"       => "location",
                    "group"                => 55,
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុបចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវមធ្យមនិងធំ",
                    "code_attribute"       => "total",
                    "group"                => 55,
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុបចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវមធ្យមនិងធំ",
                    "code_attribute"       => "female",
                    "group"                => 55,
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "55.1 ចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវខ្នាតមធ្យម",
                    "code_attribute"       => "location",
                    "group"                => "55.1",
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "55.1 ចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវខ្នាតមធ្យម",
                    "code_attribute"       => "total",
                    "group"                => "55.1",
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "55.1 ចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវខ្នាតមធ្យម",
                    "code_attribute"       => "female",
                    "group"                => "55.1",
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "55.2 ចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវខ្នាតធុនធំ",
                    "code_attribute"       => "location",
                    "group"                => "55.2",
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "55.2 ចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវខ្នាតធុនធំ",
                    "code_attribute"       => "total",
                    "group"                => "55.2",
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "55.2 ចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវខ្នាតធុនធំ",
                    "code_attribute"       => "female",
                    "group"                => "55.2",
                    "section"              => "7",
                    "sort"                 => "55",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំងម៉ាស៊ីនភ្លើងសំរាប់ធ្វើអាជីវកម្មផ្តល់ថាមពលអគ្គីសនី",
                    "code_attribute"       => "location",
                    "group"                => 56,
                    "section"              => "7",
                    "sort"                 => "56",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំងម៉ាស៊ីនភ្លើងសំរាប់ធ្វើអាជីវកម្មផ្តល់ថាមពលអគ្គីសនី",
                    "code_attribute"       => "total",
                    "group"                => 56,
                    "section"              => "7",
                    "sort"                 => "56",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំងម៉ាស៊ីនភ្លើងសំរាប់ធ្វើអាជីវកម្មផ្តល់ថាមពលអគ្គីសនី",
                    "code_attribute"       => "female",
                    "group"                => 56,
                    "section"              => "7",
                    "sort"                 => "56",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មឡអិដ្ឋ",
                    "code_attribute"       => "location",
                    "group"                => 57,
                    "section"              => "7",
                    "sort"                 => "57",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មឡអិដ្ឋ",
                    "code_attribute"       => "total",
                    "group"                => 57,
                    "section"              => "7",
                    "sort"                 => "57",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មឡអិដ្ឋ",
                    "code_attribute"       => "female",
                    "group"                => 57,
                    "section"              => "7",
                    "sort"                 => "57",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផលិតអំបិល",
                    "code_attribute"       => "location",
                    "group"                => 58,
                    "section"              => "7",
                    "sort"                 => "58",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផលិតអំបិល",
                    "code_attribute"       => "total",
                    "group"                => 58,
                    "section"              => "7",
                    "sort"                 => "58",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ផលិតអំបិល",
                    "code_attribute"       => "female",
                    "group"                => 58,
                    "section"              => "7",
                    "sort"                 => "58",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ត្បាញក្រម៉ា ហូល ផាមួង",
                    "code_attribute"       => "location",
                    "group"                => 59,
                    "section"              => "7",
                    "sort"                 => "59",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ត្បាញក្រម៉ា ហូល ផាមួង",
                    "code_attribute"       => "total",
                    "group"                => 59,
                    "section"              => "7",
                    "sort"                 => "59",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង ត្បាញក្រម៉ា ហូល ផាមួង",
                    "code_attribute"       => "female",
                    "group"                => 59,
                    "section"              => "7",
                    "sort"                 => "59",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីផ្តៅ វល្លិ៍ រពាក់ ឬស្សី",
                    "code_attribute"       => "location",
                    "group"                => 60,
                    "section"              => "7",
                    "sort"                 => "60",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីផ្តៅ វល្លិ៍ រពាក់ ឬស្សី",
                    "code_attribute"       => "total",
                    "group"                => 60,
                    "section"              => "7",
                    "sort"                 => "60",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីផ្តៅ វល្លិ៍ រពាក់ ឬស្សី",
                    "code_attribute"       => "female",
                    "group"                => 60,
                    "section"              => "7",
                    "sort"                 => "60",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត គ្រឿងសង្ហារឹមពីឈើ",
                    "code_attribute"       => "location",
                    "group"                => 61,
                    "section"              => "7",
                    "sort"                 => "61",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត គ្រឿងសង្ហារឹមពីឈើ",
                    "code_attribute"       => "total",
                    "group"                => 61,
                    "section"              => "7",
                    "sort"                 => "61",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត គ្រឿងសង្ហារឹមពីឈើ",
                    "code_attribute"       => "female",
                    "group"                => 61,
                    "section"              => "7",
                    "sort"                 => "61",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ចម្លាក់ធ្វើពីថ្ម ស្ពាន់ ស្បែក",
                    "code_attribute"       => "location",
                    "group"                => 62,
                    "section"              => "7",
                    "sort"                 => "62",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ចម្លាក់ធ្វើពីថ្ម ស្ពាន់ ស្បែក",
                    "code_attribute"       => "total",
                    "group"                => 62,
                    "section"              => "7",
                    "sort"                 => "62",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ចម្លាក់ធ្វើពីថ្ម ស្ពាន់ ស្បែក",
                    "code_attribute"       => "female",
                    "group"                => 62,
                    "section"              => "7",
                    "sort"                 => "62",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីដែក អាលុយមីញូម កញ្ចក់",
                    "code_attribute"       => "location",
                    "group"                => 63,
                    "section"              => "7",
                    "sort"                 => "63",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីដែក អាលុយមីញូម កញ្ចក់",
                    "code_attribute"       => "total",
                    "group"                => 63,
                    "section"              => "7",
                    "sort"                 => "63",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីដែក អាលុយមីញូម កញ្ចក់",
                    "code_attribute"       => "female",
                    "group"                => 63,
                    "section"              => "7",
                    "sort"                 => "63",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីជ័រ (ធុងទឹក ទុយោ ដប...)",
                    "code_attribute"       => "location",
                    "group"                => 64,
                    "section"              => "7",
                    "sort"                 => "64",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីជ័រ (ធុងទឹក ទុយោ ដប...)",
                    "code_attribute"       => "total",
                    "group"                => 64,
                    "section"              => "7",
                    "sort"                 => "64",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ពីជ័រ (ធុងទឹក ទុយោ ដប...)",
                    "code_attribute"       => "female",
                    "group"                => 64,
                    "section"              => "7",
                    "sort"                 => "64",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //

                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ទឹកសុទ្ធ",
                    "code_attribute"       => "location",
                    "group"                => 65,
                    "section"              => "7",
                    "sort"                 => "65",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ទឹកសុទ្ធ",
                    "code_attribute"       => "total",
                    "group"                => 65,
                    "section"              => "7",
                    "sort"                 => "65",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មផលិត ទឹកសុទ្ធ",
                    "code_attribute"       => "female",
                    "group"                => 65,
                    "section"              => "7",
                    "sort"                 => "65",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មកែឆ្នៃ ឬវិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកស៊ីអ៊ីវ ទឹកផ្លែឈើ...)",
                    "code_attribute"       => "location",
                    "group"                => 66,
                    "section"              => "7",
                    "sort"                 => "66",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មកែឆ្នៃ ឬវិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកស៊ីអ៊ីវ ទឹកផ្លែឈើ...)",
                    "code_attribute"       => "total",
                    "group"                => 66,
                    "section"              => "7",
                    "sort"                 => "66",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មកែឆ្នៃ ឬវិចខ្ជប់គ្រាប់ធញ្ញជាតិ (នំ គុយទាវ មី ទឹកស៊ីអ៊ីវ ទឹកផ្លែឈើ...)",
                    "code_attribute"       => "female",
                    "group"                => 66,
                    "section"              => "7",
                    "sort"                 => "66",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មកែឆ្នៃ វិចខ្ជប់ផលនេសាទ (ទឹកត្រី ប្រហុក ត្រីងៀត...)",
                    "code_attribute"       => "location",
                    "group"                => 67,
                    "section"              => "7",
                    "sort"                 => "67",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មកែឆ្នៃ វិចខ្ជប់ផលនេសាទ (ទឹកត្រី ប្រហុក ត្រីងៀត...)",
                    "code_attribute"       => "total",
                    "group"                => 67,
                    "section"              => "7",
                    "sort"                 => "67",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្មកែឆ្នៃ វិចខ្ជប់ផលនេសាទ (ទឹកត្រី ប្រហុក ត្រីងៀត...)",
                    "code_attribute"       => "female",
                    "group"                => 67,
                    "section"              => "7",
                    "sort"                 => "67",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្ម ផ្សេងៗដ៏ទៃទៀត ដែលគ្មានឈ្មោះខាងលើ",
                    "code_attribute"       => "location",
                    "group"                => 68,
                    "section"              => "7",
                    "sort"                 => "68",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្ម ផ្សេងៗដ៏ទៃទៀត ដែលគ្មានឈ្មោះខាងលើ",
                    "code_attribute"       => "total",
                    "group"                => 68,
                    "section"              => "7",
                    "sort"                 => "68",
                    "visible"              => true,
                    "category"             => "production-service"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចំនួនទីតាំង សិប្បកម្ម ផ្សេងៗដ៏ទៃទៀត ដែលគ្មានឈ្មោះខាងលើ",
                    "code_attribute"       => "female",
                    "group"                => 68,
                    "section"              => "7",
                    "sort"                 => "68",
                    "visible"              => true,
                    "category"             => "production-service"
                ],

            ];
    }
}
