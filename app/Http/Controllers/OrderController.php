<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

use App\Models\Order;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Order::with('person')->get();
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
        $request->validate([
            'person_id'        => ['required', 'integer'],
            'order_date'        => ['required', 'date'],
            'products'      =>['required','array']
        ]);
        //if ($request->products)
        $order = Order::create($request->all());
        $new_producst_with_order_id = array();
        foreach ($request->products as $product) {
            $new_producst_with_order_id[] = array("id_order"=>$order->id, "id_product"=>$product['id_product'], "qty"=>$product['qty']);
        }
        OrderProduct::insert($new_producst_with_order_id);
        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
