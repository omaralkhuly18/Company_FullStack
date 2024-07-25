<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingOrder;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingOrderController extends Controller
{
    public function index()
    {
        $Orders = PricingOrder::with('pricing')
            ->orderBy('created_at', 'desc')
            ->get();
        return view("admins.pricing_orders.index", compact("Orders"));
    }

    public function store(Request $request)
    {
        $PricingOrder = new PricingOrder();
        $PricingOrder->name = $request->input('name');
        $PricingOrder->email = $request->input('email');
        $PricingOrder->phone = $request->input('phone');
        $PricingOrder->pricing_id = $request->input('pricing_id');
        $PricingOrder->approved = false;
        $PricingOrder->save();
        return response()->json(['success' => trans('web_trans.order_sent_success')]);
    }

    public function approved(Request $request, $id)
    {
        $PricingOrder = PricingOrder::where('id', $id)->first();
        if ($PricingOrder->approved == 0) {
            $PricingOrder->approved = 1;
            $PricingOrder->save();
        }
        return redirect()->route('dash.pricing.order.index')->with('success', trans('web_trans.order_approve_success'));
    }

    public function destroy(Request $request, $id)
    {
        $PricingOrder = PricingOrder::where('id', $id)->first();
        $PricingOrder->delete();
        return redirect()->route('dash.pricing.order.index')->with('success', trans('web_trans.order_delete_success'));
    }
}
