<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseOne;
use App\Models\WhyChooseOneElement;


class WhyChooseOneController extends Controller
{
    public function index()
    {
        $WhyChooseOne = WhyChooseOne::latest()->first();
        $WhyChooseOneElements = WhyChooseOneElement::all();

        return view("admins.all_sections.why_choose_one", compact('WhyChooseOne','WhyChooseOneElements'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'subheading' => 'required',
            'subheading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
        ]);
        $WhyChooseOne = WhyChooseOne::latest()->first();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $PhotoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/All_Sections/choose_one/'), $PhotoPath);
            $WhyChooseOne->photo = $PhotoPath;
        }     
        $WhyChooseOne->heading = $validatedData['heading'];
        $WhyChooseOne->heading_ar = $validatedData['heading_ar'];
        $WhyChooseOne->subheading = $validatedData['subheading'];
        $WhyChooseOne->subheading_ar = $validatedData['subheading_ar'];
        $WhyChooseOne->text = $validatedData['text'];
        $WhyChooseOne->text_ar = $validatedData['text_ar'];
        $WhyChooseOne->save();

        return redirect()->route('dash.choose.one.index')->with('success', trans('web_trans.choose_one_update_success'));
    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'icon' => 'required',
            'add_id' => 'required',
        ]);
        $WhyChooseOneElement= new WhyChooseOneElement();
        $WhyChooseOneElement->heading = $validatedData['heading'];
        $WhyChooseOneElement->heading_ar = $validatedData['heading_ar'];
        $WhyChooseOneElement->icon = $validatedData['icon'];
        $WhyChooseOneElement->choose_one_id = $validatedData['add_id'];
       
        $WhyChooseOneElement->save();

        return redirect()->route('dash.choose.one.index')->with('success', trans('web_trans.choose_one_element_create_success'));
    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'icon' => 'required',
            'update_id' => 'required',
        ]);
        $WhyChooseOneElement = WhyChooseOneElement::where('id', $validatedData['update_id'])->first();
        $WhyChooseOneElement->heading = $validatedData['heading'];
        $WhyChooseOneElement->heading_ar = $validatedData['heading_ar'];
        $WhyChooseOneElement->icon = $validatedData['icon'];
        $WhyChooseOneElement->save();

        return redirect()->route('dash.choose.one.index')->with('success', trans('web_trans.choose_one_element_update_success'));

    }
    public function destroyElement(Request $request, $id)
    {
        $WhyChooseOneElement = WhyChooseOneElement::where('id', $id)->first();
        $WhyChooseOneElement->delete();
        return redirect()->route('dash.choose.one.index')->with('success', trans('web_trans.choose_one_element_delete_success'));
    }
}
