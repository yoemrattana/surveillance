<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CommuneQuestion;

class CommuneQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommuneQuestion::truncate();
        $csvFile = fopen(base_path("database/seeders/data/commune_question.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) 
        {
            if (!$firstline) 
            {
                CommuneQuestion::create(["no" => $data['0'],
                                         "group_en" => $data['1'],
                                         "group_kh" => $data['2'],
                                         "sub_group_en" => $data['3'],
                                         "sub_group_kh" => $data['4'],
                                         "question_en" => $data['5'],
                                         "question_kh" => $data['6'],
                                         "unit_en" => $data['7'],
                                         "unit_kh" => $data['8'],
                                        ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
?>