<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $Sliders = Slider::all();
        return view('admins.sliders.index', compact('Sliders'));
    }

    public function create()
    {
        return view('admins.sliders.create_slider');
    }

    public function store(Request $request)
    {
        $customMessages = [
            'photo.required' => trans('web_trans.client_photo_required'),
            'photo.image' => trans('web_trans.client_photo_image'),
            'photo.mimes' => trans('web_trans.client_photo_mimes'),
            'photo.max' => trans('web_trans.client_photo_max'),
        ];
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $customMessages);

        $Slider = new Slider();

        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/sliders'), $photoPath);
            $Slider->photo = $photoPath;
        }

        $Slider->text = $request->text;
        $Slider->text_ar = $request->text_ar;
        $Slider->btn_text = $request->button_text;
        $Slider->btn_text_ar = $request->button_text_ar;
        $Slider->btn_url = $request->button_url;
        $Slider->save();

        return redirect()->route('dash.slider.index')->with('success', trans('web_trans.slider_created_success') );
    }

    public function show($id)
    {
        $Slider = Slider::where('id', $id)->first();
        return view('admins.sliders.update_slider', compact('Slider'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'photo.required' => trans('web_trans.client_photo_required'),
            'photo.image' => trans('web_trans.client_photo_image'),
            'photo.mimes' => trans('web_trans.client_photo_mimes'),
            'photo.max' => trans('web_trans.client_photo_max'),
        ];
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required',
        ],$customMessages);

        $Slider = Slider::find($validatedData['id']);

        if (!$Slider) {
            return redirect()->route('dash.slider.index')->with('error', 'Slider not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/sliders/' . $Slider->photo))) {
                unlink(public_path('assets/uploads/sliders/' . $Slider->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/sliders/'), $photoPath);
            $Slider->photo = $photoPath;
        }

        $Slider->text = $request->text;
        $Slider->text_ar = $request->text_ar;
        $Slider->btn_text = $request->button_text;
        $Slider->btn_text_ar = $request->button_text_ar;
        $Slider->btn_url = $request->button_url;
        $Slider->save();

        return redirect()->route('dash.slider.index')->with('success', trans('web_trans.slider_updated_success') );
    }

    public function destroy(Request $request, $id)
    {
        $Slider = Slider::find($id);

        if (file_exists(public_path('assets/uploads/sliders/' . $Slider->photo))) {
            unlink(public_path('assets/uploads/sliders/' . $Slider->photo));
        }

        $Slider->delete();
        return redirect()->route('dash.slider.index')->with('success', trans('web_trans.slider_deleted_success') );
    }
}
