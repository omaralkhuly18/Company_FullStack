<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeatureTwo;
use App\Models\FeatureTwoElement;

class FeatureTwoController extends Controller
{
    public function index()
    {
        $FeatureTwo = FeatureTwo::latest()->first();
        $FeatureTwoElements = FeatureTwoElement::all();

        return view("admins.all_sections.feature_two", compact('FeatureTwo','FeatureTwoElements'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'subheading' => 'required',
            'text' => 'required',
            'heading_ar' => 'required',
            'subheading_ar' => 'required',
            'text_ar' => 'required',
        ]);
        $FeatureTwo = FeatureTwo::latest()->first();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $PhotoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/All_Sections/feature_two/'), $PhotoPath);
            $FeatureTwo->photo = $PhotoPath;
        }     

        $FeatureTwo->heading = $validatedData['heading'];
        $FeatureTwo->subheading = $validatedData['subheading'];
        $FeatureTwo->text = $validatedData['text'];
        $FeatureTwo->heading_ar = $validatedData['heading_ar'];
        $FeatureTwo->subheading_ar = $validatedData['subheading_ar'];
        $FeatureTwo->text_ar = $validatedData['text_ar'];
        $FeatureTwo->save();

        return redirect()->route('dash.feature.two.index')->with('success', trans('web_trans.Feature_two_update_success'));
    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
            'add_id' => 'required',
        ]);
        $FeatureTwoElement= new FeatureTwoElement();
        $FeatureTwoElement->name = $validatedData['name'];
        $FeatureTwoElement->name_ar = $validatedData['name_ar'];
        $FeatureTwoElement->feature_two_id = $validatedData['add_id'];
       
        $FeatureTwoElement->save();

        return redirect()->route('dash.feature.two.index')->with('success', trans('web_trans.Feature_two_elemenet_create_success'));
    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
            'update_id' => 'required',
        ]);
        $FeatureTwoElement = FeatureTwoElement::where('id', $validatedData['update_id'])->first();
        $FeatureTwoElement->name = $validatedData['name'];
        $FeatureTwoElement->name_ar = $validatedData['name_ar'];
        $FeatureTwoElement->save();

        return redirect()->route('dash.feature.two.index')->with('success', trans('web_trans.Feature_two_elemenet_update_success'));

    }
    public function destroyElement(Request $request, $id)
    {
        $FeatureTwoElement = FeatureTwoElement::where('id', $id)->first();
        $FeatureTwoElement->delete();
        return redirect()->route('dash.feature.two.index')->with('success', trans('web_trans.Feature_two_elemenet_delete_success'));
    }
}
