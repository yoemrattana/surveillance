<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VillageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = base_path('public/data/Village/v_kchnang_2023.csv');
        
        // Check if the file exists
        if (!file_exists($filePath) || !is_readable($filePath)) {
            Log::info('+++++++++++++++ file not exist ++++++++++++++=');
            return;
        }

        // Open the CSV file
        if (($handle = fopen($filePath, 'r')) !== false) {
            $header = null;

            while (($row = fgetcsv($handle)) !== false) {
                if (!$header) {
                    $header = $row; // First row is the header
                } else {
                    // Combine header with row data
                    $data = array_combine($header, $row);
                    $vl_code = '';
                    $year = 2023;
                    $village_response = [];

                    foreach ($data as $key => $value) {
                        if($key == 'Year'){
                            $year = $value;
                        }else if($key == 'VillGis'){
                            $vl_code = str_pad($value, 8, '0', STR_PAD_LEFT);
                            $vl_code = str_pad($vl_code, 10, '0', STR_PAD_RIGHT);
                        }else{
                            $q_code = explode('-', $key);
                            $q_id = null;
                            if(count($q_code) > 1){
                                $q_code = preg_replace('/^\d+-/', '', $key);
                                $ref_q = DB::table('village_question')->where('short_code', $q_code)->first();
                                if($ref_q){
                                    $q_id = $ref_q->id;
                                    $q_value_txt = '';
                                    $q_value = null;
                                    //one question with string value
                                    if($q_code == 'Nam_Health-Frequ'){
                                        $q_value_txt = $value;
                                    }else{
                                        $q_value = $value == '' ? null : $value ;
                                    }
                                    
                                    $response = [];
                                    $response['question_id'] = $q_id;
                                    $response['value'] = $q_value;
                                    $response['value_txt'] = $q_value_txt;
                                    $village_response[] = $response;
                                }else{
                                    Log::info('no question '.$q_code.' value '.$value);
                                }
                            }
                        }

                    }
                    if($vl_code && $year){
                        $id = DB::table('village_data')->insertGetId([
                                                    'vl_code' => $vl_code,
                                                    'year' => $year,
                                                    'commune_leader' => '',
                                                    'phone_commune' => '',
                                                    'phone' => ''
                                                ]);
                        $insertData = array_map(function ($item) use ($id) {
                            return [
                                'question_id' => $item['question_id'],
                                'value' => $item['value'],
                                'value_txt' => $item['value_txt'],
                                'parent_id' => $id,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ];
                        }, $village_response);
                        
                        if($id){

                            Log::info($village_response);
                            DB::table('village_response')->insert($insertData);                      
                        }
                    }
                }
            }
            fclose($handle);
        }
    } 

}
?>