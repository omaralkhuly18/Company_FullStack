<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseTwo;
use App\Models\WhyChooseTwoElement;

class WhyChooseTwoController extends Controller
{
    public function index()
    {
        $WhyChooseTwo = WhyChooseTwo::latest()->first();
        $WhyChooseTwoElements = WhyChooseTwoElement::all();

        return view("admins.all_sections.why_choose_two", compact('WhyChooseTwo','WhyChooseTwoElements'));
    }

    public function update(Request $request)
    {
       
         $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'subheading' => 'required',
            'subheading_ar' => 'required',
            'photo_over_text'=> 'required',
            'photo_over_text_ar'=> 'required',
            'photo_over_heading'=> 'required',
            'photo_over_heading_ar'=> 'required',
        ]); 
       
        $WhyChooseTwo = WhyChooseTwo::latest()->first();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $PhotoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/All_Sections/choose_two/'), $PhotoPath);
            $WhyChooseTwo->photo = $PhotoPath;
        }     
        $WhyChooseTwo->heading = $validatedData['heading'];
        $WhyChooseTwo->heading_ar = $validatedData['heading_ar'];
        $WhyChooseTwo->subheading = $validatedData['subheading'];
        $WhyChooseTwo->subheading_ar = $validatedData['subheading_ar'];
        $WhyChooseTwo->photo_over_text = $validatedData['photo_over_text'];
        $WhyChooseTwo->photo_over_text_ar = $validatedData['photo_over_text_ar'];
        $WhyChooseTwo->photo_over_heading = $validatedData['photo_over_heading'];
        $WhyChooseTwo->photo_over_heading_ar = $validatedData['photo_over_heading_ar'];
        $WhyChooseTwo->save();

        return redirect()->route('dash.choose.two.index')->with('success', trans('web_trans.choose_two_update_success'));
    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'icon' => 'required',
            'add_id' => 'required',
        ]);
        $WhyChooseTwoElement= new WhyChooseTwoElement();
        $WhyChooseTwoElement->heading = $validatedData['heading'];
        $WhyChooseTwoElement->heading_ar = $validatedData['heading_ar'];
        $WhyChooseTwoElement->icon = $validatedData['icon'];
        $WhyChooseTwoElement->choose_two_id = $validatedData['add_id'];
       
        $WhyChooseTwoElement->save();

        return redirect()->route('dash.choose.two.index')->with('success', trans('web_trans.choosee_two_elemenet_create_success'));  
    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'icon' => 'required',
            'update_id' => 'required',
        ]);
        $WhyChooseTwoElement = WhyChooseTwoElement::where('id', $validatedData['update_id'])->first();
        $WhyChooseTwoElement->heading = $validatedData['heading'];
        $WhyChooseTwoElement->heading_ar = $validatedData['heading_ar'];
        $WhyChooseTwoElement->icon = $validatedData['icon'];
        $WhyChooseTwoElement->save();

        return redirect()->route('dash.choose.two.index')->with('success', trans('web_trans.choose_two_elemenet_update_success'));    

    }
    public function destroyElement(Request $request, $id)
    {
        $WhyChooseTwoElement = WhyChooseTwoElement::where('id', $id)->first();
        $WhyChooseTwoElement->delete();
        return redirect()->route('dash.choose.two.index')->with('success', trans('web_trans.choose_two_elemenet_delete_success'));    
    }
}
