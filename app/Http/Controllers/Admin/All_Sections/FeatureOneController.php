<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeatureOne;
use App\Models\FeatureOneElement;

class FeatureOneController extends Controller
{
    public function index()
    {
        $FeatureOne = FeatureOne::latest()->first();
        $FeatureOneElements = FeatureOneElement::all();

        return view("admins.all_sections.feature_one", compact('FeatureOne','FeatureOneElements'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required',
            'text_ar' => 'required',
        ]);
        $FeatureOne = FeatureOne::latest()->first();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $PhotoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/All_Sections/feature_one/'), $PhotoPath);
            $FeatureOne->photo = $PhotoPath;
        }     
        $FeatureOne->text = $validatedData['text'];
        $FeatureOne->text_ar = $validatedData['text_ar'];
        $FeatureOne->save();

        return redirect()->route('dash.feature.one.index')->with('success',trans('web_trans.feature_one_updated_success'));
    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
            'icon' => 'required',
            'add_id' => 'required',
        ]);
        $FeatureOneElement= new FeatureOneElement();
        $FeatureOneElement->heading = $validatedData['heading'];
        $FeatureOneElement->heading_ar = $validatedData['heading_ar'];
        $FeatureOneElement->text = $validatedData['text'];
        $FeatureOneElement->text_ar = $validatedData['text_ar'];
        $FeatureOneElement->icon = $validatedData['icon'];
        $FeatureOneElement->feature_one_id = $validatedData['add_id'];
       
        $FeatureOneElement->save();

        return redirect()->route('dash.feature.one.index')->with('success', trans('web_trans.feature_one_element_create_success'));
    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
            'icon' => 'required',
            'update_id' => 'required',
        ]);
        $FeatureOneElement = FeatureOneElement::where('id', $validatedData['update_id'])->first();
        $FeatureOneElement->heading = $validatedData['heading'];
        $FeatureOneElement->heading_ar = $validatedData['heading_ar'];
        $FeatureOneElement->text = $validatedData['text'];
        $FeatureOneElement->text_ar = $validatedData['text_ar'];
        $FeatureOneElement->icon = $validatedData['icon'];
        $FeatureOneElement->save();

        return redirect()->route('dash.feature.one.index')->with('success', trans('web_trans.feature_one_element_updated_success'));

    }
    public function destroyElement(Request $request, $id)
    {
        $FeatureOneElement = FeatureOneElement::where('id', $id)->first();
        $FeatureOneElement->delete();
        return redirect()->route('dash.feature.one.index')->with('success', trans('web_trans.feature_one_element_deleted_success'));
    }
}
