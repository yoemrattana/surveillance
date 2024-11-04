<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\VillageQuestion;

class VillageQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/seeders/data/village_question_v2.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) 
        {
            if (!$firstline) 
            {
                VillageQuestion::create(["no" => $data['0'],
                                         "short_code" => $data['1'],
                                         "question_en" => $data['2'],
                                         "question_kh" => $data['3'],
                                         "description" => $data['4'],
                                         "unit_en" => $data['5'],
                                         "unit_kh" => $data['6'],
                                         "group_en" => $data['7'],
                                         "group_kh" => $data['8'],
                                         "sub_group_en" => "",
                                         "sub_group_kh" => ""
                                        ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
?>