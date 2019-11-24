<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use PDF;
use Storage;
use App\Order;
use App\OrderItem;
use App\OrderClass;
use App\OrderType;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
      $orders = Order::with(['items', 'type', 'class'])
                ->where(['origin_id' => Auth::user()->company_id])
                ->orWhere(['requestor_company_id' => Auth::user()->company_id])
                ->orderBy('created_at', 'DESC')
                ->get();

      return ['orders' => $orders];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
          
        try{
            DB::beginTransaction();
          
            $data['order']['priority'] = 1;

            $data['order']['requestor_id'] = Auth::user()->id;

            $data['order']['requestor_company_id'] = Auth::user()->company_id;

            $data['order']['status'] = 'PENDING';
            
            $order = Order::create($data['order']);

            foreach ($data['order_items'] as $key => $item) {
              $product_id = $item['ProductId'] ;
              $item['order_id'] = $order->id;
               
              $item = OrderItem::create($item);

              Product::find($product_id)->decrement('current_stock', $item['Quantity']);
            }
  
            DB::commit();

            $order = Order::with(['items', 'type', 'class'])->find($order->id);

            $this->createInvoice($order);

            $this->sendInvoice($order->id);
  
            return array('success' => true, 'message' => 'Order has been saved.', 'order' => $order );
  
        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    public function createInvoice(Order $order){
      
      $time = time();

      $file_name = 'order_' . $order->id . '_' . $time . '.pdf';

      $data = [
        'order' => $order,
        'items' => $order->items,
        'requesting_company' => $order->requesting_company,
        'doc_ref' => $order->id . '_' . $time
      ];
      
      $pdf = PDF::loadView('pdf.purchase-order', $data);

      Storage::put('public/pdf/'.$file_name, $pdf->output());

      Order::find($order->id)->update([
        'purchase_order' => $file_name
      ]);
      
      return $pdf->download($file_name);
    }

    public function sendInvoice($order_id){

    }

    public function printPDF()
    {
       // This  $data array will be passed to our PDF blade
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'Hello from 99Points.info',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'        
        ];

      $pdf = PDF::loadView('pdf.purchase-order', $data);  
      return $pdf->download('medium.pdf');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function getTypes(){
      $order_clases = OrderClass::get();
      $order_types = OrderType::get();
      return [
        'order_clases' => $order_clases,
        'order_types' => $order_types
      ];
    }
}


