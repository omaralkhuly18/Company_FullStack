<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WelcomeOne;
use App\Models\WelcomeOneElement;

class WelcomeOneController extends Controller
{
    public function index()
    {
        $WelcomeOne = WelcomeOne::latest()->first();
        $WelcomeOneElements = WelcomeOneElement::all();

        return view("admins.all_sections.welcome_one", compact('WelcomeOne','WelcomeOneElements'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'heading.required' => trans('web_trans.heading_required'),
            'heading_ar.required' => trans('web_trans.heading_ar_required'),
            'heading.max' => trans('web_trans.heading_max'),
            'heading_ar.max' => trans('web_trans.heading_ar_max'),
            'subheading.required' => trans('web_trans.sub_heading_required'),
            'subheading_ar.required' => trans('web_trans.sub_heading_ar_required'),
            'subheading.max' => trans('web_trans.sub_heading_max'),
            'subheading_ar.max' => trans('web_trans.sub_heading_ar_max'),
            'person_photo.image' => trans('web_trans.client_photo_image'),
            'person_photo.mimes' => trans('web_trans.client_photo_mimes'),
            'person_photo.max' => trans('web_trans.client_photo_max'),
            'photo1.image' => trans('web_trans.client_photo_image'),
            'photo1.mimes' => trans('web_trans.client_photo_mimes'),
            'photo1.max' => trans('web_trans.client_photo_max'),
            'photo2.image' => trans('web_trans.client_photo_image'),
            'photo2.mimes' => trans('web_trans.client_photo_mimes'),
            'photo2.max' => trans('web_trans.client_photo_max'),
            'button_text.required' => trans('web_trans.btn_text_required'),
            'button_text.max' => trans('web_trans.btn_text_max'),
            'button_text_ar.required' => trans('web_trans.btn_text_ar_required'),
            'button_text_ar.max' => trans('web_trans.btn_text_ar_max'),
            'button_url.required' => trans('web_trans.btn_url_required'),
            'button_url.max' => trans('web_trans.btn_url_max'),
            'text.required'=>trans('web_trans.text_required'),
            'text_ar.required' => trans('web_trans.text_ar_required'),
        ];
        $validatedData = $request->validate([
            'heading' => 'required|max:255',
            'heading_ar' => 'required|max:255',
            'subheading' => 'required|max:255',
            'subheading_ar' => 'required|max:255',
            'text' => 'required',
            'text_ar' => 'required',
            'button_text' => 'required|max:255',
            'button_text_ar' => 'required|max:255',
            'button_url' => 'required|max:255',
            'experience_year' => 'required',
            'person_name' => 'required|max:255',
            'person_name_ar' => 'required|max:255',
            'person_designation' => 'required|max:255',
            'person_designation_ar' => 'required|max:255',
        ],$customMessages);
        $WelcomeOne = WelcomeOne::latest()->first();
        if ($request->hasFile('person_photo')) {
            $uploadedPersonPhoto = $request->file('person_photo');
            $PersonPhotoPath = time() . '_' . $uploadedPersonPhoto->getClientOriginalName();
            $uploadedPersonPhoto->move(public_path('assets/uploads/All_Sections/welcome_one/'), $PersonPhotoPath);
            $WelcomeOne->person_photo = $PersonPhotoPath;
        }

        if ($request->hasFile('photo1')) {
            $uploadedPhoto1 = $request->file('photo1');
            $photoPath1 = time() . '_' . $uploadedPhoto1->getClientOriginalName();
            $uploadedPhoto1->move(public_path('assets/uploads/All_Sections/welcome_one/'), $photoPath1);
            $WelcomeOne->photo1 = $photoPath1;
        }

        if ($request->hasFile('photo2')) {
            $uploadedPhoto2 = $request->file('photo2');
            $photoPath2 = time() . '_' . $uploadedPhoto2->getClientOriginalName();
            $uploadedPhoto2->move(public_path('assets/uploads/All_Sections/welcome_one/'), $photoPath2);
            $WelcomeOne->photo2 = $photoPath2;
        }
        $WelcomeOne->heading = $validatedData['heading'];
        $WelcomeOne->heading_ar = $validatedData['heading_ar'];
        $WelcomeOne->sub_heading = $validatedData['subheading'];
        $WelcomeOne->sub_heading_ar = $validatedData['subheading_ar'];
        $WelcomeOne->text = $validatedData['text'];
        $WelcomeOne->text_ar = $validatedData['text_ar'];
        $WelcomeOne->btn_text = $validatedData['button_text'];
        $WelcomeOne->btn_text_ar = $validatedData['button_text_ar'];
        $WelcomeOne->btn_url = $validatedData['button_url'];
        $WelcomeOne->experience_year = $validatedData['experience_year'];
        $WelcomeOne->person_name = $validatedData['person_name'];
        $WelcomeOne->person_name_ar = $validatedData['person_name_ar'];
        $WelcomeOne->person_designation = $validatedData['person_designation'];
        $WelcomeOne->person_designation_ar = $validatedData['person_designation_ar'];
        $WelcomeOne->save();

        return redirect()->route('dash.welcome.one.index')->with('success', trans('web_trans.welcome_one_update_success'));
    }

    public function storeElement(Request $request)
    {
        $customMessages = [
            'heading.required' => trans('web_trans.heading_required'),
            'heading_ar.required' => trans('web_trans.heading_ar_required'),
            'heading.max' => trans('web_trans.heading_max'),
            'heading_ar.max' => trans('web_trans.heading_ar_max'),
            'text.required'=>trans('web_trans.text_required'),
            'text_ar.required' => trans('web_trans.text_ar_required'),
        ];
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
            'icon' => 'required',
            'welcome_one_id' => 'required',
        ],$customMessages);
        $WelcomeOneElement= new WelcomeOneElement();
        $WelcomeOneElement->heading = $validatedData['heading'];
        $WelcomeOneElement->heading_ar = $validatedData['heading_ar'];
        $WelcomeOneElement->text = $validatedData['text'];
        $WelcomeOneElement->text_ar = $validatedData['text_ar'];
        $WelcomeOneElement->icon = $validatedData['icon'];
        $WelcomeOneElement->welcome_one_id = $validatedData['welcome_one_id'];
       
        $WelcomeOneElement->save();

        return redirect()->route('dash.welcome.one.index')->with('success', trans('web_trans.welcome_one_element_create_success'));
    }

    public function updateElement(Request $request)
    {
        $customMessages = [
            'heading.required' => trans('web_trans.heading_required'),
            'heading_ar.required' => trans('web_trans.heading_ar_required'),
            'heading.max' => trans('web_trans.heading_max'),
            'heading_ar.max' => trans('web_trans.heading_ar_max'),
            'text.required'=>trans('web_trans.text_required'),
            'text_ar.required' => trans('web_trans.text_ar_required'),
        ];
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'text' => 'required',
            'text_ar' => 'required',
            'icon' => 'required',
            'id' => 'required',
        ],$customMessages);
        $WelcomeOneElement = WelcomeOneElement::where('id', $validatedData['id'])->first();
        $WelcomeOneElement->heading = $validatedData['heading'];
        $WelcomeOneElement->heading_ar = $validatedData['heading_ar'];
        $WelcomeOneElement->text = $validatedData['text'];
        $WelcomeOneElement->text_ar = $validatedData['text_ar'];
        $WelcomeOneElement->icon = $validatedData['icon'];
        $WelcomeOneElement->save();

        return redirect()->route('dash.welcome.one.index')->with('success', trans('web_trans.welcome_one_element_update_success'));

    }
    public function destroyElement(Request $request, $id)
    {
        $WelcomeOneElement = WelcomeOneElement::where('id', $id)->first();
        $WelcomeOneElement->delete();
        return redirect()->route('dash.welcome.one.index')->with('success', trans('web_trans.welcome_one_element_delete_success'));
    }
}
