<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductOrderController extends Controller
{
    public function index()
    {
        $Orders = ProductOrder::with('product')
            ->orderBy('created_at', 'desc')
            ->get();
        return view("admins.product_orders.index", compact("Orders"));
    }

    public function store(Request $request)
    {
        $productOrder = new ProductOrder();
        $productOrder->name = $request->input('name');
        $productOrder->email = $request->input('email');
        $productOrder->phone = $request->input('phone');
        $productOrder->quantity = $request->input('quantity');
        $productOrder->product_id = $request->input('product_id');
        $productOrder->approved = false;
        $productOrder->save();
        return response()->json(['success' => trans('web_trans.order_sent_success')]);
    }

    public function approved(Request $request, $id)
    {
        $ProductOrder = ProductOrder::where('id', $id)->first();
        if ($ProductOrder->approved == 0) {
            $ProductOrder->approved = 1;
            $Product = Product::find($ProductOrder->product_id);
            $Product->amount = $Product->amount - $ProductOrder->quantity;
            $ProductOrder->save();
            $Product->save();
        }
        return redirect()->route('dash.product.order.index')->with('success', trans('web_trans.order_approve_success'));
    }

    public function destroy(Request $request, $id)
    {
        $ProductOrder = ProductOrder::where('id', $id)->first();
        $ProductOrder->delete();
        return redirect()->route('dash.product.order.index')->with('success', trans('web_trans.order_delete_success'));
    }
}
