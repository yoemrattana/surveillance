<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillSection42Seeder extends Seeder
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
                    "name_attribute_khmer" => "ព្នង",
                    "code_attribute"       => "family",
                    "group"                => 207,
                    "section"              => "42",
                    "sort"                 => "207",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្នង",
                    "code_attribute"       => "total",
                    "group"                => 207,
                    "section"              => "42",
                    "sort"                 => "207",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្នង",
                    "code_attribute"       => "female",
                    "group"                => 207,
                    "section"              => "42",
                    "sort"                 => "207",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្នង",
                    "code_attribute"       => "total6-11",
                    "group"                => 207,
                    "section"              => "42",
                    "sort"                 => "207",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្នង",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 207,
                    "section"              => "42",
                    "sort"                 => "207",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្មួយ",
                    "code_attribute"       => "family",
                    "group"                => 208,
                    "section"              => "42",
                    "sort"                 => "208",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្មួយ",
                    "code_attribute"       => "total",
                    "group"                => 208,
                    "section"              => "42",
                    "sort"                 => "208",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្មួយ",
                    "code_attribute"       => "female",
                    "group"                => 208,
                    "section"              => "42",
                    "sort"                 => "208",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្មួយ",
                    "code_attribute"       => "total6-11",
                    "group"                => 208,
                    "section"              => "42",
                    "sort"                 => "208",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្មួយ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 208,
                    "section"              => "42",
                    "sort"                 => "208",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្ទៀង",
                    "code_attribute"       => "family",
                    "group"                => 209,
                    "section"              => "42",
                    "sort"                 => "209",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្ទៀង",
                    "code_attribute"       => "total",
                    "group"                => 209,
                    "section"              => "42",
                    "sort"                 => "209",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្ទៀង",
                    "code_attribute"       => "female",
                    "group"                => 209,
                    "section"              => "42",
                    "sort"                 => "209",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្ទៀង",
                    "code_attribute"       => "total6-11",
                    "group"                => 209,
                    "section"              => "42",
                    "sort"                 => "209",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្ទៀង",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 209,
                    "section"              => "42",
                    "sort"                 => "209",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "មិល",
                    "code_attribute"       => "family",
                    "group"                => 210,
                    "section"              => "42",
                    "sort"                 => "210",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "មិល",
                    "code_attribute"       => "total",
                    "group"                => 210,
                    "section"              => "42",
                    "sort"                 => "210",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "មិល",
                    "code_attribute"       => "female",
                    "group"                => 210,
                    "section"              => "42",
                    "sort"                 => "210",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "មិល",
                    "code_attribute"       => "total6-11",
                    "group"                => 210,
                    "section"              => "42",
                    "sort"                 => "210",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "មិល",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 210,
                    "section"              => "42",
                    "sort"                 => "210",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្រោល",
                    "code_attribute"       => "family",
                    "group"                => 211,
                    "section"              => "42",
                    "sort"                 => "211",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្រោល",
                    "code_attribute"       => "total",
                    "group"                => 211,
                    "section"              => "42",
                    "sort"                 => "211",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្រោល",
                    "code_attribute"       => "female",
                    "group"                => 211,
                    "section"              => "42",
                    "sort"                 => "211",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្រោល",
                    "code_attribute"       => "total6-11",
                    "group"                => 211,
                    "section"              => "42",
                    "sort"                 => "211",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ក្រោល",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 211,
                    "section"              => "42",
                    "sort"                 => "211",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ថ្មន",
                    "code_attribute"       => "family",
                    "group"                => 212,
                    "section"              => "42",
                    "sort"                 => "212",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ថ្មន",
                    "code_attribute"       => "total",
                    "group"                => 212,
                    "section"              => "42",
                    "sort"                 => "212",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ថ្មន",
                    "code_attribute"       => "female",
                    "group"                => 212,
                    "section"              => "42",
                    "sort"                 => "212",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ថ្មន",
                    "code_attribute"       => "total6-11",
                    "group"                => 212,
                    "section"              => "42",
                    "sort"                 => "212",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ថ្មន",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 212,
                    "section"              => "42",
                    "sort"                 => "212",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ខោញ",
                    "code_attribute"       => "family",
                    "group"                => 213,
                    "section"              => "42",
                    "sort"                 => "213",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ខោញ",
                    "code_attribute"       => "total",
                    "group"                => 213,
                    "section"              => "42",
                    "sort"                 => "213",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ខោញ",
                    "code_attribute"       => "female",
                    "group"                => 213,
                    "section"              => "42",
                    "sort"                 => "213",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ខោញ",
                    "code_attribute"       => "total6-11",
                    "group"                => 213,
                    "section"              => "42",
                    "sort"                 => "213",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ខោញ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 213,
                    "section"              => "42",
                    "sort"                 => "213",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទំពូន",
                    "code_attribute"       => "family",
                    "group"                => 214,
                    "section"              => "42",
                    "sort"                 => "214",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទំពូន",
                    "code_attribute"       => "total",
                    "group"                => 214,
                    "section"              => "42",
                    "sort"                 => "214",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទំពូន",
                    "code_attribute"       => "female",
                    "group"                => 214,
                    "section"              => "42",
                    "sort"                 => "214",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទំពូន",
                    "code_attribute"       => "total6-11",
                    "group"                => 214,
                    "section"              => "42",
                    "sort"                 => "214",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ទំពូន",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 214,
                    "section"              => "42",
                    "sort"                 => "214",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចារាយ",
                    "code_attribute"       => "family",
                    "group"                => 215,
                    "section"              => "42",
                    "sort"                 => "215",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចារាយ",
                    "code_attribute"       => "total",
                    "group"                => 215,
                    "section"              => "42",
                    "sort"                 => "215",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចារាយ",
                    "code_attribute"       => "female",
                    "group"                => 215,
                    "section"              => "42",
                    "sort"                 => "215",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចារាយ",
                    "code_attribute"       => "total6-11",
                    "group"                => 215,
                    "section"              => "42",
                    "sort"                 => "215",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ចារាយ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 215,
                    "section"              => "42",
                    "sort"                 => "215",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រឹង",
                    "code_attribute"       => "family",
                    "group"                => 216,
                    "section"              => "42",
                    "sort"                 => "216",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រឹង",
                    "code_attribute"       => "total",
                    "group"                => 216,
                    "section"              => "42",
                    "sort"                 => "216",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រឹង",
                    "code_attribute"       => "female",
                    "group"                => 216,
                    "section"              => "42",
                    "sort"                 => "216",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រឹង",
                    "code_attribute"       => "total6-11",
                    "group"                => 216,
                    "section"              => "42",
                    "sort"                 => "216",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "គ្រឹង",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 216,
                    "section"              => "42",
                    "sort"                 => "216",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាវ៉ែត",
                    "code_attribute"       => "family",
                    "group"                => 217,
                    "section"              => "42",
                    "sort"                 => "217",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាវ៉ែត",
                    "code_attribute"       => "total",
                    "group"                => 217,
                    "section"              => "42",
                    "sort"                 => "217",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាវ៉ែត",
                    "code_attribute"       => "female",
                    "group"                => 217,
                    "section"              => "42",
                    "sort"                 => "217",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាវ៉ែត",
                    "code_attribute"       => "total6-11",
                    "group"                => 217,
                    "section"              => "42",
                    "sort"                 => "217",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាវ៉ែត",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 217,
                    "section"              => "42",
                    "sort"                 => "217",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្អូច",
                    "code_attribute"       => "family",
                    "group"                => 218,
                    "section"              => "42",
                    "sort"                 => "218",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្អូច",
                    "code_attribute"       => "total",
                    "group"                => 218,
                    "section"              => "42",
                    "sort"                 => "218",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្អូច",
                    "code_attribute"       => "female",
                    "group"                => 218,
                    "section"              => "42",
                    "sort"                 => "218",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្អូច",
                    "code_attribute"       => "total6-11",
                    "group"                => 218,
                    "section"              => "42",
                    "sort"                 => "218",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ស្អូច",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 218,
                    "section"              => "42",
                    "sort"                 => "218",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "លន់",
                    "code_attribute"       => "family",
                    "group"                => 219,
                    "section"              => "42",
                    "sort"                 => "219",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "លន់",
                    "code_attribute"       => "total",
                    "group"                => 219,
                    "section"              => "42",
                    "sort"                 => "219",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "លន់",
                    "code_attribute"       => "female",
                    "group"                => 219,
                    "section"              => "42",
                    "sort"                 => "219",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "លន់",
                    "code_attribute"       => "total6-11",
                    "group"                => 219,
                    "section"              => "42",
                    "sort"                 => "219",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "លន់",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 219,
                    "section"              => "42",
                    "sort"                 => "219",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាចក់",
                    "code_attribute"       => "family",
                    "group"                => 220,
                    "section"              => "42",
                    "sort"                 => "220",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាចក់",
                    "code_attribute"       => "total",
                    "group"                => 220,
                    "section"              => "42",
                    "sort"                 => "220",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាចក់",
                    "code_attribute"       => "female",
                    "group"                => 220,
                    "section"              => "42",
                    "sort"                 => "220",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាចក់",
                    "code_attribute"       => "total6-11",
                    "group"                => 220,
                    "section"              => "42",
                    "sort"                 => "220",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "កាចក់",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 220,
                    "section"              => "42",
                    "sort"                 => "220",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្រៅ",
                    "code_attribute"       => "family",
                    "group"                => 221,
                    "section"              => "42",
                    "sort"                 => "221",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្រៅ",
                    "code_attribute"       => "total",
                    "group"                => 221,
                    "section"              => "42",
                    "sort"                 => "221",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្រៅ",
                    "code_attribute"       => "female",
                    "group"                => 221,
                    "section"              => "42",
                    "sort"                 => "221",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្រៅ",
                    "code_attribute"       => "total6-11",
                    "group"                => 221,
                    "section"              => "42",
                    "sort"                 => "221",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព្រៅ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 221,
                    "section"              => "42",
                    "sort"                 => "221",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រដៃ",
                    "code_attribute"       => "family",
                    "group"                => 222,
                    "section"              => "42",
                    "sort"                 => "22",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រដៃ",
                    "code_attribute"       => "total",
                    "group"                => 222,
                    "section"              => "42",
                    "sort"                 => "22",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រដៃ",
                    "code_attribute"       => "female",
                    "group"                => 222,
                    "section"              => "42",
                    "sort"                 => "22",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រដៃ",
                    "code_attribute"       => "total6-11",
                    "group"                => 222,
                    "section"              => "42",
                    "sort"                 => "22",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រដៃ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 222,
                    "section"              => "42",
                    "sort"                 => "22",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជង",
                    "code_attribute"       => "family",
                    "group"                => 223,
                    "section"              => "42",
                    "sort"                 => "223",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជង",
                    "code_attribute"       => "total",
                    "group"                => 223,
                    "section"              => "42",
                    "sort"                 => "223",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជង",
                    "code_attribute"       => "female",
                    "group"                => 223,
                    "section"              => "42",
                    "sort"                 => "223",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជង",
                    "code_attribute"       => "total6-11",
                    "group"                => 223,
                    "section"              => "42",
                    "sort"                 => "223",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជង",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 223,
                    "section"              => "42",
                    "sort"                 => "223",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព័រ",
                    "code_attribute"       => "family",
                    "group"                => 224,
                    "section"              => "42",
                    "sort"                 => "224",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព័រ",
                    "code_attribute"       => "total",
                    "group"                => 224,
                    "section"              => "42",
                    "sort"                 => "224",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព័រ",
                    "code_attribute"       => "female",
                    "group"                => 224,
                    "section"              => "42",
                    "sort"                 => "224",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព័រ",
                    "code_attribute"       => "total6-11",
                    "group"                => 224,
                    "section"              => "42",
                    "sort"                 => "224",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ព័រ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 224,
                    "section"              => "42",
                    "sort"                 => "224",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សួយ",
                    "code_attribute"       => "family",
                    "group"                => 225,
                    "section"              => "42",
                    "sort"                 => "225",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សួយ",
                    "code_attribute"       => "total",
                    "group"                => 225,
                    "section"              => "42",
                    "sort"                 => "225",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សួយ",
                    "code_attribute"       => "female",
                    "group"                => 225,
                    "section"              => "42",
                    "sort"                 => "225",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សួយ",
                    "code_attribute"       => "total6-11",
                    "group"                => 225,
                    "section"              => "42",
                    "sort"                 => "225",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សួយ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 225,
                    "section"              => "42",
                    "sort"                 => "225",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រអ៊ូង",
                    "code_attribute"       => "family",
                    "group"                => 226,
                    "section"              => "42",
                    "sort"                 => "226",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រអ៊ូង",
                    "code_attribute"       => "total",
                    "group"                => 226,
                    "section"              => "42",
                    "sort"                 => "226",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រអ៊ូង",
                    "code_attribute"       => "female",
                    "group"                => 226,
                    "section"              => "42",
                    "sort"                 => "226",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រអ៊ូង",
                    "code_attribute"       => "total6-11",
                    "group"                => 226,
                    "section"              => "42",
                    "sort"                 => "226",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "រអ៊ូង",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 226,
                    "section"              => "42",
                    "sort"                 => "226",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជនជាតិដើម ភាគតិចដែលគ្មានឈោ្មះខាង លើ",
                    "code_attribute"       => "family",
                    "group"                => 227,
                    "section"              => "42",
                    "sort"                 => "227",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជនជាតិដើម ភាគតិចដែលគ្មានឈោ្មះខាង លើ",
                    "code_attribute"       => "total",
                    "group"                => 227,
                    "section"              => "42",
                    "sort"                 => "227",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជនជាតិដើម ភាគតិចដែលគ្មានឈោ្មះខាង លើ",
                    "code_attribute"       => "female",
                    "group"                => 227,
                    "section"              => "42",
                    "sort"                 => "227",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជនជាតិដើម ភាគតិចដែលគ្មានឈោ្មះខាង លើ",
                    "code_attribute"       => "total6-11",
                    "group"                => 227,
                    "section"              => "42",
                    "sort"                 => "227",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "ជនជាតិដើម ភាគតិចដែលគ្មានឈោ្មះខាង លើ",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 227,
                    "section"              => "42",
                    "sort"                 => "227",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "family",
                    "group"                => 228,
                    "section"              => "42",
                    "sort"                 => "228",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "total",
                    "group"                => 228,
                    "section"              => "42",
                    "sort"                 => "228",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "female",
                    "group"                => 228,
                    "section"              => "42",
                    "sort"                 => "228",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "total6-11",
                    "group"                => 228,
                    "section"              => "42",
                    "sort"                 => "228",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                [
                    "name_attribute"       => "",
                    "name_attribute_khmer" => "សរុប",
                    "code_attribute"       => "total6-11Female",
                    "group"                => 228,
                    "section"              => "42",
                    "sort"                 => "228",
                    "visible"              => true,
                    "category"             => "Minorities"
                ],
                //


            ];
    }
}
