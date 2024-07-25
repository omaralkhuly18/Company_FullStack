<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPageTestimonial;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $Testimonials = Testimonial::all();
        return view('admins.testimonial.index', compact('Testimonials'));
    }

    public function create()
    {
        return view('admins.testimonial.create_testimonial');
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
            'designation.required' => trans('web_trans.designation_required'),
            'designation_ar.required' => trans('web_trans.designation_ar_required'),
            'comment.required' => trans('web_trans.comment_required'),
            'comment_ar.required' => trans('web_trans.comment_ar_required'),

        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'designation' => 'required',
            'designation_ar' => 'required',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required',
            'comment_ar' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],$customMessages);
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/testimonials'), $photoPath);
            $Testimonials = new Testimonial();
            $Testimonials->name = $validatedData['name'];
            $Testimonials->name_ar = $validatedData['name_ar'];
            $Testimonials->designation = $validatedData['designation'];
            $Testimonials->designation_ar = $validatedData['designation_ar'];
            $Testimonials->rating = $validatedData['rating'];
            $Testimonials->comment = $validatedData['comment'];
            $Testimonials->comment_ar = $validatedData['comment_ar'];
            $Testimonials->photo = $photoPath;
            $Testimonials->save();
            return redirect()->route('dash.testimonial.index')->with('success', trans('web_trans.testimonial_created_success'));
        }

    }

    public function show($id)
    {
        $Testimonial = Testimonial::where('id', $id)->first();
        return view('admins.testimonial.update_testimonial', compact('Testimonial'));
    }

    public function update(Request $request)
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
            'designation.required' => trans('web_trans.designation_required'),
            'designation_ar.required' => trans('web_trans.designation_ar_required'),
            'comment.required' => trans('web_trans.comment_required'),
            'comment_ar.required' => trans('web_trans.comment_ar_required'),

        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'designation' => 'required',
            'designation_ar' => 'required',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required',
            'comment_ar' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required',
        ],$customMessages);

        $Testimonial = Testimonial::find($validatedData['id']);

        if (!$Testimonial) {
            return redirect()->route('dash.testimonial.index')->with('error', 'Testimonial not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/testimonials/' . $Testimonial->photo))) {
                unlink(public_path('assets/uploads/testimonials/' . $Testimonial->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/testimonials'), $photoPath);
            $Testimonial->photo = $photoPath;
        }

        $Testimonial->name = $validatedData['name'];
        $Testimonial->name_ar = $validatedData['name_ar'];
        $Testimonial->designation = $validatedData['designation'];
        $Testimonial->designation_ar = $validatedData['designation_ar'];
        $Testimonial->rating = $validatedData['rating'];
        $Testimonial->comment = $validatedData['comment'];
        $Testimonial->comment_ar = $validatedData['comment_ar'];
        $Testimonial->save();

        return redirect()->route('dash.testimonial.index')->with('success',  trans('web_trans.testimonial_updated_success'));
    }

    public function destroy(Request $request, $id)
    {
        $Testimonial = Testimonial::find($id);
        if (file_exists(public_path('assets/uploads/testimonials/' . $Testimonial->photo))) {
            unlink(public_path('assets/uploads/testimonials/' . $Testimonial->photo));
        }
        $Testimonial->delete();
        return redirect()->route('dash.testimonial.index')->with('success',  trans('web_trans.testimonial_deleted_success'));
    }

    public function siteTestimonial()
    {
        $testimonialHeader= OtherPageTestimonial::latest()->first();
        $Testimonials=Testimonial::all();
        return view('home.testimonial',compact('testimonialHeader','Testimonials'));

    }
}
