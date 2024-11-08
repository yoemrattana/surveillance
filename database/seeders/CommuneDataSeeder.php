<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use \stdClass;

class CommuneDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = base_path('public/data/Commune/c_kchnang_2023.csv');
        // $questions = DB::table('commune_question');
        
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
                    $ds_code = '';
                    $cm_code = '';
                    $year = 2023;
                    $commune_response = [];

                    foreach ($data as $key => $value) {
                        if($key == 'Year'){
                            $year = $value;
                        }else if($key == 'CommGis'){
                            $cm_code = str_pad($value, 6, '0', STR_PAD_LEFT);
                            $ds_code = substr($cm_code, 0, 4);
                        }else{
                            $q_code = explode('-', $key);
                            $q_id = null;
                            if(count($q_code) > 1){
                                $q_code = preg_replace('/^\d+-/', '', $key);
                                $ref_q = DB::table('commune_question')->where('short_code', $q_code)->first();
                                if($ref_q){
                                    $q_id = $ref_q->id;
                                    $q_value = $value == '' ? null : $value ;
                                    $response = [];
                                    if(in_array($q_code, $this->commune_response_cols())){
                                        $response['question_id'] = $q_id;
                                        $response['value'] = $q_value;
                                        $commune_response[] = $response;
                                    }
                                }else{
                                    Log::info('no question '.$q_code.' value '.$value);
                                }
                            }
                        }

                    }
                    if($cm_code && $year){
                        $id = DB::table('commune_parent')->insertGetId([
                                                    'ds_code' => $ds_code,
                                                    'cm_code' => $cm_code,
                                                    'year' => $year,
                                                    'recorded_by' => 'Admin'
                                                ]);
                 
                        $insertData = array_map(function ($item) use ($id) {
                            return [
                                'question_id' => $item['question_id'],
                                'value' => $item['value'],
                                'parent_id' => $id,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ];
                        }, $commune_response);
                        
                        if($id){

                            Log::info($commune_response);
                            DB::table('commune_response')->insert($insertData);                      
                        }
                    }
                }
            }
            fclose($handle);
        }
    }

    public function commune_response_cols(){
        return ($this->base_profile_cols() +$this->agriculture_cols() +
                $this->production_cols() + $this->transportation_cols() +
                $this->education_cols() + $this->natural_resource_cols() +
                $this->disaster_cols()
                );
    }

    public function base_profile_cols(){
        return array("Com_Counci", "Fcom_Counci", "Vill_Chief",  "Fvill_Chief", 
                "Micro_Instit", "Banks_Com", "Loans_Rec", "TOT_Area_Com", 
                "Area_Reside","Area_Rice", "Dry_area", "Wet_area", "Area_Chamkar",
                "Area_Short_Crop", "Area_Long_Crop", "Area_Other",  "Area_Salt",  
                "Aver_Salt_T/Ha");

    }    
    public function agriculture_cols(){
        return array("DRY_IRRI_full", "Dry_cult_ha", "Dry_yield_annual", 
            "WET _IRRI_full",  "T_Wet_cult_ha",  "Wet_yield_annual", "IRS_area_1", 
            "IRS_yield_1", "IRS_area_2", "IRS_yield_2", "Up_rice_ha", 
            "Up_rice_yield", "WET_PADDY", "DRY_PADDY");

    }

    public function production_cols() {
        return array(
            "Corn_ha", "Corn_yield", "Soya_ha", "Soya_yield",
            "Mungb_ha", "Mungb_yield", "Peanut_ha", "Peanut_yield",
            "Cassa_ha", "Cassa_yield", "SwPot_ha", "SwPot_yield",
            "Sesam_ha", "Sesam_yield", "Culti_Sugar_Cane", "Aver_Sugar_T/Ha",
            "Area_Cult_Rub", "Area_Rub_Har", "Aver_Rub_T/Ha", "Es_Rub_T",
            "Area_Cult_Poil", "Area_Poil_Har", "Aver_Poil_T/Ha", "Es_Poil_T",
            "Area_Cult_Pep", "Area_Pep_Har", "Aver_Pep_T/Ha", "Es_Pep_T",
            "Area_Cult_Cashew", "Area_Cashew_Har", "Aver_Cashew_T/Ha", "Es_Cashew_T",
            "Area_Cult_Mango", "Area_Mango_Har", "Aver_Mango_T/Ha", "Es_Mango_T",
            "Area_Cult_Durian", "Area_Durian_Har", "Aver_Durian_T/Ha", "Es_Durain_T",
            "Area_Cult_Rambu", "Area_Rambu_Har", "Aver_Rambu_T/Ha", "Es_Rambu_T",
            "Area_Cult_Msteem", "Area_Msteem_Har", "Aver_Msteem_T/Ha", "Es_Msteem_T",
            "Area_Cult_Dragon"
        );
    }

    public function transportation_cols() {
        return array(
            "Area_Dragon_Har", "Aver_Dragon_T/Ha", "Es_Dragon_T", "Area_Cult_Plongan",
            "Area_Plongan_Har", "Aver_Plongan_T/Ha", "Es_Plongan_T", "Area_Cult_PurO",
            "Area_PurO_Har", "Aver_PurO_T/Ha", "Es_PurO_T"
        );
    }

    public function education_cols() {
        return array(
            "R_Mini_Contr", "R_Prov_Contr", "Line_Com_Contr", "T_Leng_Com_Contr",
            "Rd_Bitum_m", "Rd_DBST_m", "Rd_MAKM_m", "Rd_Cemt_m",
            "Rd_latt_m", "Rd_earth_m", "Rd_raw_m", "Playsch_house",
            "Teacher_playsch_house", "Child_playsch_house", "Kid_SCH_comty", "Kid_PreSCH_comty",
            "FEM_PreSCH_comty", "Kid_tch_comty", "Kid_Ftch_comty", "Kid_SCH_gov",
            "CROOM_K", "Kid_class", "Kid_PreSCH_Pub", "FEM_PreSCH_Pub",
            "non_ttch_Pub", "non_Fttch_Pub", "TEACH_K", "Kid_Ftch_gov",
            "Pri_PreSCH", "Pri_PreSCH_Clsroms", "Pri_PreSCH_Classes", "Kid_Pri_PreSCH",
            "Fkid_Pri_PreSCH", "OfSta_Pri_PreSCH", "FOfSta_Pri_PreSCH", "Tcher_Pri_PreSCH",
            "Ftcher_Pri_PreSCH", "Pri_SCH", "CROOM_P", "Pri_class",
            "Kid_PrimSCH_Pub", "Fkid_PrimSCH-Pub", "OfSta_PrimSCH_Pub", "FOfSta_PrimSCH_Pub",
            "TEACH_P", "Pri_Ftch", "Pri_PrimSCH", "Pri_PrimSCH_Clsroms",
            "Pri_PrimSCH_Classes", "ST_Pri_PrimSCH", "Fkid_Pri_PrimSCH", "OfSta_Pri_PrimSCH",
            "FOfSta_Pri_PrimSCH", "Tcher_Pri_PrimSCH", "Ftcher_Pri_PrimSCH",
            "PrimSCH_Clean_Wat", "PrimSCH_Tap_Wat", "PrimSCH_DriWel_Wat", "PrimSCH_ProDug_Wwat",
            "PrimSCH_Toilets", "PrimSCH_Im_Toi", "PrimSCH_Im_Ftoilets", "PrimSCH_UnIm_Toilets",
            "PrimSCH_UnIm_Ftoilets", "LoSec_SCH", "LoSec_room", "LoSec_class",
            "ST_SecSCH_Pub", "FSt_SecSCH_Pub", "OfSta_SecSCH_Pub", "FOfSta_SecSCH_Pub",
            "LoSec_tch", "LoSec_Ftch", "Pri_SecSCH", "Pri_SecSCH_Clsroms",
            "Pri_SecSCH_Classes", "ST_Pri_SecSCH", "FSt_Pri_SecSCH", "OfSta_Pri_SecSCH",
            "FOfSta_Pri_SecSCH", "Tcher_Pri_SecSCH", "Ftcher_Pri_SecSCH",
            "SecSCH_Clean_Wat", "SecSCH_Tap_Wat", "SecSCH_DriWel_Wat", "SecSCH_ProDug_Wwat",
            "SecSCH_Toilets", "SecSCH_Im_Toi", "SecSCH_Im_Ftoilets", "SecSCH_UnIm_Toilets",
            "SecSCH_UnIm_Ftoilets", "UpSec_SCH", "UpSec_room", "UpSeci_class",
            "ST_HigSCH_Pub", "FSt_HigSCH_Pub", "OfSta_HigSCH_Pub", "FOfSta_HigSCH_Pub",
            "UpSec_tch", "UpSec_Ftch", "Pri_HigSCH", "Pri_HigSCH_Clsroms",
            "Pri_HigSCH_Classes", "ST_Pri_HigSCH", "FSt_Pri_HigSCH", "OfSta_Pri_HigSCH",
            "FOfSta_Pri_HigSCH", "Tcher_Pri_HigSCH", "Ftcher_Pri_HigSCH",
            "HigSCH_Clean_Wat", "HigSCH_Tap_Wat", "HigSCH_DriWel_Wat", "HigSCH_ProDug_Wwat",
            "HigSCH_Toilets", "HigSCH_Im_Toi", "HigSCH_Im_Ftoilets", "HigSCH_UnIm_Toilets"
        );
    }

    public function natural_resource_cols() {
        return array(
            "HigSCH_UnIm_Ftoilets", "Ongo_Liter_Class", "Ongo_Liter_Tcher", "Ongo_Liter_Ftcher",
            "Ongo_Liter_Stu", "Ongo_Liter_Fstu", "Comp_Liter_Class", "Comp_Liter_Tcher",
            "Comp_Liter_Ftcher", "Comp_Liter_Stu", "Comp_Liter_Fstu", "Fostr_Comty",
            "Area_Fostr_ComtyMa", "Fam_Fostr_comty", "No_Fish_Comty"
        );
    }

    public function disaster_cols() {
        return array(
            "Area_Fish_ComtyMa", "Fam_Fish_comty", "NREM_Comty", "Area_NREM_ComtyMa",
            "Fam_NREM_comty", "Irri_ComtyMa", "Area_Irri_ComtyMa", "Fam_Irri_comty",
            "Touri_Comty", "Area_Touri_ComtyMa", "Tour_comty", "Area_Affec_Floods",
            "Ric_area_Floods", "Area_crops_Flood", "LengRod_Flood", "Bridge_Flood",
            "Ric_Drought", "Ric_Affect_Pest", "Seri_Fires", "Safety_Hill",
            "Area_Replan_Tree", "Nborn_regis_30d", "0-1_birth_cert", "0-5_birth_cert",
            "Marig_Licen", "Marig_Register", "Death_Register", "Fami_Land_Title",
            "Cases_Mine_Explod", "Vic_MinExpl_L18", "Vic_MinExpl_Ov18", "Death_MinExpl_L18",
            "Death_MinnExpl_Ov18", "Cases_ERW_Explod", "Vic_ERW_L18", "Vic_ERW_Ov18",
            "Death_ERW_L18", "Death_ERW_Ov18", "Susp_Area_Min/ERW", "Area_Min/ERW",
            "AreaClea_Min/ERW", "Fami_Getland_Min/ERW", "Act_Health_Officers",
            "VHV_Com", "Issue_Letter_ODF", "V_Cert_No_ODF", "Latrine_Shop",
            "Fa_Social_Assist"
        );
    }

}
?>