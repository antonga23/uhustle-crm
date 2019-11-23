<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use App\ProductCategory;
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
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::with(['category','origin','supplier'])->get();
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
        $data = $request->all();

        unset($data['product']['available_stock']);

        try{
            DB::beginTransaction();

            $product = Product::create($data['product']);

            DB::commit();
            return array('success' => true, 'message' => 'Product created successfully','product' => $product);

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
        $data = $request->all();
        
        unset($data['product']['available_stock']);
        unset($data['product']['actions']);

        try{
            DB::beginTransaction();

            $product = Product::where(['id' =>$data['product']['id']])->update($data['product']);

            $products = Product::with(['category','origin','supplier'])->get();

            DB::commit();
            return array('success' => true, 'message' => 'Product update successfully', 'products' => $products);

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

    public function getCategories(){
        return ['categories' => ProductCategory::get() ];
    }

    public function getActiveCategories(){
      return ['categories' => ProductCategory::where(['status' => 1])->get() ];
    }

    public function updateCategory(Request $request){

      $data = $request->all();

      try{
          DB::beginTransaction();

          $category = ProductCategory::where([ 'id' => $data['category']['id'] ])->update($data['category']);

          DB::commit();
          return array('success' => true, 'message' => 'Product category updated successfully' ,'categories' => ProductCategory::get());

      }catch(\QueryException $e){
          DB::rollback();
          return array('success' =>false, 'message' => $e->getMessage());
      }
    }

    public function createCategory(Request $request){
      $data = $request->all();
      try{
          DB::beginTransaction();

          $category = ProductCategory::create($data['category']);

          DB::commit();

          return array('success' => true, 'message' => 'Product category has been created.', 'category' => $category );

      }catch(\QueryException $e){
          DB::rollback();
          return array('success' =>false, 'message' => $e->getMessage());
      }
    }
}
