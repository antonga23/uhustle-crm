<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Commission;
use App\CommissionAttributes;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comm_structures = Commission::with('attributes')->get();
      return ['success' => true, 'comm_structures' => $comm_structures];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commission  $commission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $data = $request->all();
      
      try{
          DB::beginTransaction();

          foreach ($data as $key => $value) {

            $check = Commission::where(['commision_structure' => $key])->count();
            
            if($check == 0){

              $commission = Commission::create(['commision_structure' => $key]);

              foreach($value as $index => $item){

                foreach ($item as $i => $attribute) {
                  
                  CommissionAttributes::create([
                    "comm_structure_id" => $commission->id,
                    "key" => $i,
                    "value" => $attribute['value'],
                    "display_name" => ' '
                  ]);
                  
                }
              }
              // if($key == 'structure_a'){
                
              //   foreach($value as $index => $item){

              //     foreach ($item as $i => $attribute) {
  
              //       CommissionAttributes::create([
              //         "comm_structure_id" => $commission->id,
              //         "key" => $i,
              //         "value" => $attribute['value'],\
              //       ]);
                    
              //     }
              //   }

              // }else if($key == 'structure_b'){


              //   foreach($value as $index => $item){

              //     foreach ($item as $i => $attribute) {
  
              //       CommissionAttributes::create([
              //         "comm_structure_id" => $commission->id,
              //         "key" => $i,
              //         "value" => $attribute['value']
              //       ]);
                    
              //     }
              //   }

              // }else if($key == 'structure_c'){

              //   foreach ($value as $i => $structure_c) {
                  
              //     CommissionAttributes::create([
              //       "comm_structure_id" => $commission->id,
              //       "key" => 'min_amount',
              //       "value" => $structure_c['min_amount'],
              //       "display_name" => 'Minimum Volume',
              //     ]);
                  
              //     CommissionAttributes::create([
              //       "comm_structure_id" => $commission->id,
              //       "key" => 'max_amount',
              //       "value" => $structure_c['max_amount'],
              //       "display_name" => 'Maximum Volume',
              //     ]);

              //     CommissionAttributes::create([
              //       "comm_structure_id" => $commission->id,
              //       "key" => 'percentage',
              //       "value" => $structure_c['percentage'],
              //       "display_name" => 'Percentage',
              //     ]);

              //     CommissionAttributes::create([
              //       "comm_structure_id" => $commission->id,
              //       "key" => 'status',
              //       "value" => $structure_c['status'],
              //       "display_name" => 'Status',
              //     ]);
                  
              //   }
              // }
            }else{

              $commistion_structure = Commission::where(['commision_structure' => $key])->first();


              CommissionAttributes::where([ 'comm_structure_id' => $commistion_structure['id'] ])->delete();

              foreach($value as $index => $item){

                foreach ($item as $i => $attribute) {

                  CommissionAttributes::create([
                    "comm_structure_id" => $commistion_structure['id'],
                    "key" => $i,
                    "value" => $attribute['value'],
                    "display_name" => ' '
                  ]);
                }
              }
            }
          }

          DB::commit();

          return array('success' => true, 'message' => 'Commission structures updated successfully');

      }catch(\QueryException $e){
          DB::rollback();
          return array('success' =>false, 'message' => $e->getMessage());
      }
    }

    public function getCommStructures(){

      $structure_a = Commission::with('attributes')->where(['commision_structure' => 'structure_a'])->first();
      $structure_b = Commission::with('attributes')->where(['commision_structure' => 'structure_b'])->first();
      $structure_c = Commission::with('attributes')->where(['commision_structure' => 'structure_c'])->first();
      
      $structure_a_data = [];
      
      if(is_null($structure_a)){
       
        $structure_a_temp = [
              'percentage' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'status' => [ 
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
            ];

        // array_push($structure_a_data,$structure_a_temp);
      }else{
        foreach($structure_a->attributes as $i => $attr){

            $structure_a_temp[$attr['key']] = [
              'comm_structure_id' => $attr['comm_structure_id'],
              'field_id' => $attr['id'],
              'value' =>  $attr['value']
            ];
        }

        array_push($structure_a_data,$structure_a_temp);
      }

      $structure_b_data = [];

      if(is_null($structure_b)){
        
        $structure_b_temp = [
              'min_sales' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'max_sales' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'percentage' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'status' => [ 
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
            ];
            array_push($structure_b_data,$structure_b_temp);
      }else{

        foreach($structure_b->attributes as $k => $b_attr){
                  
            $structure_b_temp[$b_attr['key']] = [
                'comm_structure_id' => $attr['comm_structure_id'],
                'field_id' => $b_attr['id'],
                'value' => $b_attr['value'] 
              ];

        }

        array_push($structure_b_data,$structure_b_temp);
      }

      $structure_c_data = [];      

      if(is_null($structure_c)){
        
        $structure_c_temp = [
              'min_amount' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'max_amount' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'percentage' => [
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
              'status' => [ 
                'comm_structure_id' => '',
                'field_id' => '',
                'value' => 0
              ],
            ];
            array_push($structure_c_data,$structure_c_temp);
      }else{

        foreach($structure_c->attributes as $j => $c_attr){
          $structure_c_temp[$c_attr['key']] = [
            'comm_structure_id' => $attr['comm_structure_id'],
            'field_id' => $c_attr['id'],
            'value' => $c_attr['value'] 
          ];
        }
        array_push($structure_c_data,$structure_c_temp);
      }

      return [ 
        'structure_a' => $structure_a_data,
        'structure_b' => $structure_b_data,
        'structure_c' => $structure_c_data
      ];
    }

}
