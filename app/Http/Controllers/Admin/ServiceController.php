<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPageService;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFAQ;

class ServiceController extends Controller
{
    public function index()
    {
        $Services = Service::all();
        return view('admins.services.index', compact('Services'));
    }

    public function create()
    {
        return view('admins.services.create_service');
    }

    public function store(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
            'slug.required' => trans('web_trans.slug_required'),
            'slug_ar.required' => trans('web_trans.slug_ar_required'),
            'slug.max' => trans('web_trans.slug_max'),
            'slug_ar.max' => trans('web_trans.slug_ar_max'),
            'photo.required' => trans('web_trans.photo_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
            'banner.image' => trans('web_trans.photo_image'),
            'banner.mimes' => trans('web_trans.photo_mimes'),
            'banner.max' => trans('web_trans.photo_max'),
            'pdf.image' => trans('web_trans.pdf_image'),
            'pdf.mimes' => trans('web_trans.pdf_mimes'),
            'pdf.max' => trans('web_trans.pdf_max'),
            'description.required' => trans('web_trans.description_required'),
            'description_ar.required' => trans('web_trans.description_ar_required'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'short_description' => 'required',
            'short_description_ar' => 'required',
            'description' => 'required',
            'description_ar' => 'required',
            'icon' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ],$customMessages);
        $Service = new Service();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/services/photos'), $photoPath);
            $Service->photo = $photoPath;
        }

        if ($request->hasFile('banner')) {
            $uploadedBanner = $request->file('banner');
            $bannerPath = time() . '_' . $uploadedBanner->getClientOriginalName();
            $uploadedBanner->move(public_path('assets/uploads/services/banners'), $bannerPath);
            $Service->banner = $bannerPath;
        }

        if ($request->hasFile('pdf')) {
            $uploadedPDF = $request->file('pdf');
            $pdfPath = time() . '_' . $uploadedPDF->getClientOriginalName();
            $uploadedPDF->move(public_path('assets/uploads/services/pdfs'), $pdfPath);
            $Service->pdf = $pdfPath;
        }

        
        $Service->name = $validatedData['name'];
        $Service->name_ar = $validatedData['name_ar'];
        $Service->slug = $validatedData['slug'];
        $Service->slug_ar = $validatedData['slug_ar'];
        $Service->short_descr = $validatedData['short_description'];
        $Service->short_descr_ar = $validatedData['short_description_ar'];
        $Service->descr = $validatedData['description'];
        $Service->descr_ar = $validatedData['description_ar'];
        $Service->icon = $validatedData['icon'];
        $Service->phone = $request->phone;
        $Service->seo_title = $request->seo_title;
        $Service->seo_title_ar = $request->seo_title_ar;
        $Service->seo_descr = $request->seo_meta_description;
        $Service->seo_descr_ar = $request->seo_meta_description_ar;
        $Service->save();

        return redirect()->route('dash.service.index')->with('success', trans('web_trans.service_created_success'));
    }

    public function show($id)
    {
        $Service = Service::where('id', $id)->first();
        return view('admins.services.update_service', compact('Service'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
            'slug.required' => trans('web_trans.slug_required'),
            'slug_ar.required' => trans('web_trans.slug_ar_required'),
            'slug.max' => trans('web_trans.slug_max'),
            'slug_ar.max' => trans('web_trans.slug_ar_max'),
            'photo.required' => trans('web_trans.photo_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
            'banner.image' => trans('web_trans.photo_image'),
            'banner.mimes' => trans('web_trans.photo_mimes'),
            'banner.max' => trans('web_trans.photo_max'),
            'pdf.image' => trans('web_trans.pdf_image'),
            'pdf.mimes' => trans('web_trans.pdf_mimes'),
            'pdf.max' => trans('web_trans.pdf_max'),
            'description.required' => trans('web_trans.description_required'),
            'description_ar.required' => trans('web_trans.description_ar_required'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'short_description' => 'required',
            'short_description_ar' => 'required',
            'description' => 'required',
            'description_ar' => 'required',
            'icon' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
            'id' => 'required',
        ],$customMessages);


        $Service = Service::find($validatedData['id']);

        if (!$Service) {
            return redirect()->route('dash.service.index')->with('error', 'Service not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/services/photos/' . $Service->photo))) {
                unlink(public_path('assets/uploads/services/photos/' . $Service->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/services/photos/'), $photoPath);
            $Service->photo = $photoPath;
        }

        if ($request->hasFile('banner')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/services/banners/' . $Service->banner))) {
                unlink(public_path('assets/uploads/services/banners/' . $Service->banner));
            }

            // Upload and save the new photo
            $uploadedBanner = $request->file('banner');
            $bannerPath = time() . '_' . $uploadedBanner->getClientOriginalName();
            $uploadedBanner->move(public_path('assets/uploads/services/banners/'), $bannerPath);
            $Service->banner = $bannerPath;
        }

        if ($request->hasFile('pdf')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/services/pdfs/' . $Service->pdf))) {
                unlink(public_path('assets/uploads/services/pdfs/' . $Service->pdf));
            }

            // Upload and save the new photo
            $uploadedPdf = $request->file('pdf');
            $pdfPath = time() . '_' . $uploadedPdf->getClientOriginalName();
            $uploadedPdf->move(public_path('assets/uploads/services/pdfs/'), $pdfPath);
            $Service->pdf = $pdfPath;
        }

        $Service->name = $validatedData['name'];
        $Service->name_ar = $validatedData['name_ar'];
        $Service->slug = $validatedData['slug'];
        $Service->slug_ar = $validatedData['slug_ar'];
        $Service->short_descr = $validatedData['short_description'];
        $Service->short_descr_ar = $validatedData['short_description_ar'];
        $Service->descr = $validatedData['description'];
        $Service->descr_ar = $validatedData['description_ar'];
        $Service->icon = $validatedData['icon'];
        $Service->phone = $request->phone;
        $Service->seo_title = $request->seo_title;
        $Service->seo_title_ar = $request->seo_title_ar;
        $Service->seo_descr = $request->seo_meta_description;
        $Service->seo_descr_ar = $request->seo_meta_description_ar;
        $Service->save();

        return redirect()->route('dash.service.index')->with('success', trans('web_trans.service_updated_success'));
    }
    public function destroy(Request $request, $id)
    {
        $ServiceFAQs = ServiceFAQ::where('service_id', $id)->get();
        foreach($ServiceFAQs as $ServiceFAQ)
        {
            $ServiceFAQ->delete();
        }
        $Service = Service::find($id);
        
        if (file_exists(public_path('assets/uploads/services/photos/' . $Service->photo))) {
            unlink(public_path('assets/uploads/services/photos/' . $Service->photo));
        }
        if (file_exists(public_path('assets/uploads/services/banners/' . $Service->banner)&&$Service->banner)) {
            unlink(public_path('assets/uploads/services/banners/' . $Service->banner));
        }
        if (file_exists(public_path('assets/uploads/services/pdfs/' . $Service->pdf)&&$Service->pdf)) {
            unlink(public_path('assets/uploads/services/pdfs/' . $Service->pdf));
        }
        $Service->delete();
        return redirect()->route('dash.service.index')->with('success', trans('web_trans.service_deleted_success'));


    }

    public function createFAQ($id)
    {
        $ServiceFAQs = ServiceFAQ::where('service_id', $id)->get();
        return view('admins.services.create_FAQ', compact('id', 'ServiceFAQs', 'id'));
    }

    public function storeFAQ(Request $request)
    {
        $customMessages = [
            'question.required' => trans('web_trans.question_required'),
            'question_ar.required' => trans('web_trans.question_ar_required'),
            'question.max' => trans('web_trans.question_max'),
            'question_ar.max' => trans('web_trans.name_ar_max'),
            'answer.required' => trans('web_trans.name_required'),
            'answer_ar.required' => trans('web_trans.name_ar_required'),
        ];
        $validatedData = $request->validate([
            'question' => 'required|max:255',
            'question_ar' => 'required|max:255',            
            'answer' => 'required',
            'answer_ar' => 'required',
            'add_id' => 'required',
        ],$customMessages);
        $ServiceFAQ = new ServiceFAQ();
        $ServiceFAQ->question = $validatedData['question'];
        $ServiceFAQ->question_ar = $validatedData['question_ar'];
        $ServiceFAQ->answer = $validatedData['answer'];
        $ServiceFAQ->answer_ar = $validatedData['answer_ar'];
        $ServiceFAQ->service_id = $validatedData['add_id'];
        $ServiceFAQ->save();
        return redirect()->back()->with('success', trans('web_trans.service_faqs_created_success'));
    }

    public function updateFAQ(Request $request)
    {
        $customMessages = [
            'question.required' => trans('web_trans.question_required'),
            'question_ar.required' => trans('web_trans.question_ar_required'),
            'question.max' => trans('web_trans.question_max'),
            'question_ar.max' => trans('web_trans.name_ar_max'),
            'answer.required' => trans('web_trans.name_required'),
            'answer_ar.required' => trans('web_trans.name_ar_required'),
        ];
        $validatedData = $request->validate([
            'question' => 'required|max:255',
            'question_ar' => 'required|max:255',            
            'answer' => 'required',
            'answer_ar' => 'required',
            'id' => 'required',
        ],$customMessages);
        $ServiceFAQ = ServiceFAQ::where('id', $validatedData['id'])->first();
        $ServiceFAQ->question = $validatedData['question'];
        $ServiceFAQ->question_ar = $validatedData['question_ar'];
        $ServiceFAQ->answer = $validatedData['answer'];
        $ServiceFAQ->answer_ar = $validatedData['answer_ar'];
        $ServiceFAQ->save();
        return redirect()->back()->with('success', trans('web_trans.service_faqs_updated_success') );
    }

    public function destroyFAQ(Request $request,$id)
    {
        $ServiceFAQ = ServiceFAQ::where('id',$id)->first();
        $ServiceFAQ->delete();
        return redirect()->back()->with('success', trans('web_trans.service_faqs_deleted_success') );
    }
    public function siteService()
    {
        $ServiceHeading= OtherPageService::latest()->first();
        $Services = Service::all();
        
        return view('home.service',compact('ServiceHeading','Services'));
    }

    public function siteCustomService(Request $request, $slug)
    {
        $AllServices = Service::all();

        $Service = Service::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->first();
        $FAQs = ServiceFAQ::where('service_id',$Service->id)->get();
        return view('home.customService', compact('AllServices','Service','FAQs'));
    }
    
}
