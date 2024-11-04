<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DistrictQuestion;

class DistrictQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/seeders/data/district_question_v2.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) 
        {
            if (!$firstline) 
            {
                DistrictQuestion::create(["no" => $data['0'],
                                         "short_code" => $data['1'],
                                         "question_en" => $data['2'],
                                         "question_kh" => $data['3'],
                                         "description" => $data['4'],
                                         "unit_en" => $data['5'],
                                         "unit_kh" => $data['6'],
                                         "group_en" => $data['7'],
                                         "group_kh" => $data['8'],
                                        ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
?>