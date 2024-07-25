<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPagePricing;
use Illuminate\Http\Request;
use App\Models\PricingPlan;
use App\Models\PricingOption;


class PricingPlanController extends Controller
{
    public function index()
    {
        $PricingPlans = PricingPlan::all();
        return view('admins.pricing_plans.index', compact('PricingPlans'));
    }

    public function create()
    {
        return view('admins.pricing_plans.create_pricing');
    }

    public function store(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
            'photo.required' => trans('web_trans.photo_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
            'price.required' => trans('web_trans.price_required'),
            'price.numeric' => trans('web_trans.price_numeric'),
            'period.required' => trans('web_trans.period_required'),
            'button_text.required' => trans('web_trans.btn_text_required'),
            'button_text.max' => trans('web_trans.btn_text_max'),
            'button_text_ar.required' => trans('web_trans.btn_text_ar_required'),
            'button_text_ar.max' => trans('web_trans.btn_text_ar_max'),
            'button_url.required' => trans('web_trans.btn_url_required'),
            'button_url.max' => trans('web_trans.btn_url_max'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'period' => 'required',
            'button_text' => 'required|max:255',
            'button_text_ar' => 'required|max:255',
            'button_url' => 'required|max:255',
        ], $customMessages);
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/pricingPlans'), $photoPath);
            $PricingPlan = new PricingPlan();
            $PricingPlan->name = $validatedData['name'];
            $PricingPlan->name_ar = $validatedData['name_ar'];
            $PricingPlan->price = $validatedData['price'];
            $PricingPlan->period = $validatedData['period'];
            $PricingPlan->btn_text = $validatedData['button_text'];
            $PricingPlan->btn_text_ar = $validatedData['button_text_ar'];
            $PricingPlan->btn_url = $validatedData['button_url'];
            $PricingPlan->photo = $photoPath;
            $PricingPlan->save();
        }
        return redirect()->route('dash.price.index')->with('success', trans('web_trans.pricing_created_success'));
    }

    public function show($id)
    {
        $PricingPlan = PricingPlan::where('id', $id)->first();
        return view('admins.pricing_plans.update_pricing', compact('PricingPlan'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
            'photo.required' => trans('web_trans.photo_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
            'price.required' => trans('web_trans.price_required'),
            'price.numeric' => trans('web_trans.price_numeric'),
            'period.required' => trans('web_trans.period_required'),
            'button_text.required' => trans('web_trans.btn_text_required'),
            'button_text.max' => trans('web_trans.btn_text_max'),
            'button_text_ar.required' => trans('web_trans.btn_text_ar_required'),
            'button_text_ar.max' => trans('web_trans.btn_text_ar_max'),
            'button_url.required' => trans('web_trans.btn_url_required'),
            'button_url.max' => trans('web_trans.btn_url_max'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'period' => 'required',
            'button_text' => 'required|max:255',
            'button_text_ar' => 'required|max:255',
            'button_url' => 'required|max:255',
            'id' => 'required',
        ], $customMessages);

        $PricingPlan = PricingPlan::find($validatedData['id']);

        if (!$PricingPlan) {
            return redirect()->route('dash.price.index')->with('error', 'Pricing Plan not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/pricingPlans/' . $PricingPlan->photo))) {
                unlink(public_path('assets/uploads/pricingPlans/' . $PricingPlan->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/PricingPlans'), $photoPath);
            $PricingPlan->photo = $photoPath;
        }

        $PricingPlan->name = $validatedData['name'];
        $PricingPlan->name_ar = $validatedData['name_ar'];
        $PricingPlan->price = $validatedData['price'];
        $PricingPlan->period = $validatedData['period'];
        $PricingPlan->btn_text = $validatedData['button_text'];
        $PricingPlan->btn_text_ar = $validatedData['button_text_ar'];
        $PricingPlan->btn_url = $validatedData['button_url'];
        $PricingPlan->save();

        return redirect()->route('dash.price.index')->with('success', trans('web_trans.pricing_updated_success'));
    }

    public function destroy(Request $request, $id)
    {
        $PricingPlan = PricingPlan::find($id);
        if (file_exists(public_path('assets/uploads/PricingPlans/' . $PricingPlan->photo))) {
            unlink(public_path('assets/uploads/PricingPlans/' . $PricingPlan->photo));
        }
        $PricingOptions = PricingOption::where('pricing_id', 'id')->get();
        foreach ($PricingOptions as $PricingOption) {
            $PricingOption->delete();
        }
        $PricingPlan->delete();
        return redirect()->route('dash.price.index')->with('success', trans('web_trans.pricing_deleted_success'));
    }

    public function createOption($id)
    {
        $pricingName = PricingPlan::where('id', $id)->value('name');
        $PricingOptions = PricingOption::where('pricing_id', $id)->get();
        return view('admins.pricing_plans.createOption', compact('id', 'PricingOptions', 'pricingName'));
    }

    public function storeOption(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'add_id' => 'required',
        ], $customMessages);
        $PricingOption = new PricingOption();
        $PricingOption->name = $validatedData['name'];
        $PricingOption->name_ar = $validatedData['name_ar'];
        $PricingOption->pricing_id = $validatedData['add_id'];
        $PricingOption->save();
        return redirect()->back()->with('success', trans('web_trans.pricing_option_created_success'));
    }

    public function updateOption(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'id' => 'required',
        ]);
        $PricingOption = PricingOption::where('id', $validatedData['id'])->first();
        $PricingOption->name = $validatedData['name'];
        $PricingOption->name_ar = $validatedData['name_ar'];
        $PricingOption->save();
        return redirect()->back()->with('success', trans('web_trans.pricing_option_updated_success'));
    }

    public function destroyOption(Request $request, $id)
    {
        $PricingOption = PricingOption::where('id', $id)->first();
        $PricingOption->delete();
        return redirect()->back()->with('success', trans('web_trans.pricing_option_deleted_success'));
    }


    public function sitePricing()
    {
        $PricingHeader = OtherPagePricing::latest()->first();
        $PricingPlans = PricingPlan::with('pricingOptions')->get();

        return view('home.pricing', compact('PricingHeader', 'PricingPlans'));
    }


}


