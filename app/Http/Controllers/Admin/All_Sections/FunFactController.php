<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use App\Models\FunFact;
use App\Models\FunFactElement;
use Illuminate\Http\Request;

class FunFactController extends Controller
{
    public function index()
    {
        $FunFact = FunFact::first();
        $FunFactElements = FunFactElement::all();
        return view('admins.all_sections.funFact', compact('FunFact', 'FunFactElements'));
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
        $FunFact = FunFact::latest()->first();
        $FunFact->heading = $validatedData['heading'];
        $FunFact->sub_heading = $validatedData['subheading'];
        $FunFact->text = $validatedData['text'];
        $FunFact->heading_ar = $validatedData['heading_ar'];
        $FunFact->sub_heading_ar = $validatedData['subheading_ar'];
        $FunFact->text_ar = $validatedData['text_ar'];
        $FunFact->save();

        return redirect()->route('dash.funfact.index')->with('success', trans('web_trans.funfact_updated_success'));

    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
            'number' => 'required',
            'icon' => 'required',
            'fun_id'=>'required',
        ]);
        $FunFactElement = new FunFactElement();
        $FunFactElement->name = $validatedData['name'];
        $FunFactElement->name_ar = $validatedData['name_ar'];
        $FunFactElement->number = $validatedData['number'];
        $FunFactElement->icon = $validatedData['icon'];
        $FunFactElement->fun_id = $validatedData['fun_id'];
        $FunFactElement->save();

        return redirect()->route('dash.funfact.index')->with('success', trans('web_trans.funfact_element_create_success'));

    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
            'number' => 'required',
            'icon' => 'required',
            'id'=>'required',
        ]);
        $FunFactElement = FunFactElement::where('id', $validatedData['id'])->first();
        $FunFactElement->name = $validatedData['name'];
        $FunFactElement->name_ar = $validatedData['name_ar'];
        $FunFactElement->number = $validatedData['number'];
        $FunFactElement->icon = $validatedData['icon'];
        $FunFactElement->save();

        return redirect()->route('dash.funfact.index')->with('success', trans('web_trans.funfact_element_updated_success'));

    }
    public function destroyElement(Request $request,$id)
    {
        $FunFactElement = FunFactElement::where('id', $id)->first();
        $FunFactElement->delete();
        return redirect()->route('dash.funfact.index')->with('success', trans('web_trans.funfact_element_deleted_success'));
    }


}
