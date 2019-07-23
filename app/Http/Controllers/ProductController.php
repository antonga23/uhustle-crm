<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::get();
         return array('success' => true, 'products' => $products);
    }

    public function getActive()
    {
         $products = Product::where(['status' => 0])->get();
         return array('success' => true, 'products' => $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();
        $name = $data['name'];
        $description = $data['description'];
        $price = $data['price'];
        $status = $data['status'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $product = Product::create([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'status' => $status,
            ]);

            DB::commit();
            return array('success' => true, 'product' => $product);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();
        $id = $data['id'];
        $name = $data['name'];
        $description = $data['description'];
        $price = $data['price'];
        $status = $data['status'];

        try{
            DB::beginTransaction();

            $product = Product::where(['id' => $id])->update([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'status' => $status,
            ]);

            $product = Product::where(['id' => $id])->get();

            DB::commit();
            return array('success' => true, 'product' => Product::find($id));

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product = Product::where(['id' => $id])->delete();
         return array('success' => true, 'product' => $product);
    }
}
