<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use App\Models\WelcomeTwo;
use App\Models\WelcomeTwoElement;
use App\Models\WelcomeTwoSkill;
use Illuminate\Http\Request;

class WelcomeTwoController extends Controller
{
    public function index()
    {
        $WelcomeTwo = WelcomeTwo::latest()->first();
        $WelcomeTwoElements = WelcomeTwoElement::all();
        $WelcomeTwoSkills = WelcomeTwoSkill::all();
        return view("admins.all_sections.welcome_two", compact('WelcomeTwo','WelcomeTwoElements','WelcomeTwoSkills'));
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
            'button_text' => 'required',
            'button_text_ar' => 'required',
            'button_url' => 'required',
            'experience_year' => 'required',
        ]);
        $WelcomeTwo = WelcomeTwo::latest()->first();

        if ($request->hasFile('photo1')) {
            $uploadedPhoto1 = $request->file('photo1');
            $photoPath1 = time() . '_' . $uploadedPhoto1->getClientOriginalName();
            $uploadedPhoto1->move(public_path('assets/uploads/All_Sections/welcome_two/'), $photoPath1);
            $WelcomeTwo->photo1 = $photoPath1;
        }

        if ($request->hasFile('photo2')) {
            $uploadedPhoto2 = $request->file('photo2');
            $photoPath2 = time() . '_' . $uploadedPhoto2->getClientOriginalName();
            $uploadedPhoto2->move(public_path('assets/uploads/All_Sections/welcome_two/'), $photoPath2);
            $WelcomeTwo->photo2 = $photoPath2;
        }
        $WelcomeTwo->heading = $validatedData['heading'];
        $WelcomeTwo->heading_ar = $validatedData['heading_ar'];
        $WelcomeTwo->sub_heading = $validatedData['subheading'];
        $WelcomeTwo->sub_heading_ar = $validatedData['subheading_ar'];
        $WelcomeTwo->text = $validatedData['text'];
        $WelcomeTwo->text_ar = $validatedData['text_ar'];
        $WelcomeTwo->btn_text = $validatedData['button_text'];
        $WelcomeTwo->btn_text_ar = $validatedData['button_text_ar'];
        $WelcomeTwo->btn_url = $validatedData['button_url'];
        $WelcomeTwo->experience_year = $validatedData['experience_year'];
        $WelcomeTwo->save();

        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_update_success'));    
    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
            'welcome_two_id' => 'required',
        ]);
        $WelcomeTwoElement= new WelcomeTwoElement();
        $WelcomeTwoElement->heading = $validatedData['heading'];
        $WelcomeTwoElement->heading_ar = $validatedData['heading_ar'];
        $WelcomeTwoElement->text = $validatedData['text'];
        $WelcomeTwoElement->text_ar = $validatedData['text_ar'];
        $WelcomeTwoElement->welcome_two_id = $validatedData['welcome_two_id'];
       
        $WelcomeTwoElement->save();

        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_elemenet_create_success'));    
    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
            'id' => 'required',
        ]);
        $WelcomeTwoElement = WelcomeTwoElement::where('id', $validatedData['id'])->first();
        $WelcomeTwoElement->heading = $validatedData['heading'];
        $WelcomeTwoElement->heading_ar = $validatedData['heading_ar'];
        $WelcomeTwoElement->text = $validatedData['text'];
        $WelcomeTwoElement->text_ar = $validatedData['text_ar'];
        $WelcomeTwoElement->save();

        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_elemenet_update_success'));    

    }
    public function destroyElement(Request $request, $id)
    {
        $WelcomeTwoElement = WelcomeTwoElement::where('id', $id)->first();
        $WelcomeTwoElement->delete();
        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_elemenet_delete_success'));    
    }

    public function storeSkill(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
            'percentage' => 'required|numeric|between:0,100',
            'welcome_id' => 'required',
        ]);
        $WelcomeTwoSkill= new WelcomeTwoSkill();
        $WelcomeTwoSkill->name = $validatedData['name'];
        $WelcomeTwoSkill->name_ar = $validatedData['name_ar'];
        $WelcomeTwoSkill->percentage = $validatedData['percentage'];
        $WelcomeTwoSkill->welcome_two_id= $validatedData['welcome_id'];
       
        $WelcomeTwoSkill->save();

        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_skill_create_success'));    
    }

    public function updateSkill(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
            'percentage' => 'required|numeric|between:0,100',
            'welcome' => 'required',
        ]);
        $WelcomeTwoSkill = WelcomeTwoSkill::where('id', $validatedData['welcome'])->first();
        $WelcomeTwoSkill->name = $validatedData['name'];
        $WelcomeTwoSkill->name_ar = $validatedData['name_ar'];
        $WelcomeTwoSkill->percentage = $validatedData['percentage'];
        $WelcomeTwoSkill->save();

        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_skill_update_success'));    

    }
    public function destroySkill(Request $request, $id)
    {
        $WelcomeTwoSkill = WelcomeTwoSkill::where('id', $id)->first();
        $WelcomeTwoSkill->delete();
        return redirect()->route('dash.welcome.two.index')->with('success', trans('web_trans.welcome_two_skill_delete_success'));    
    }
}
