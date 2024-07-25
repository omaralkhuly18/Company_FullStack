<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeOne;
use App\Models\HomeTwo;
use App\Models\HomeThree;
use App\Models\HomeFour;
class HomePageController extends Controller
{
    public function indexHomeOne()
    {
        $HomeOne = HomeOne::latest()->first();
        return view("admins.home_pages.home_one", compact("HomeOne"));
    }
    public function updateHomeOne(Request $request)
    {
        $validatedData = $request->validate([
            'service_on_slider_how_many' => 'required|numeric', 
            'service_on_slider_status' => 'required', 
            'welcome_status' => 'required',
            'service_heading' => 'required',
            'service_subheading' => 'required',
            'service_heading_ar' => 'required',
            'service_subheading_ar' => 'required',
            'service_how_many' => 'required|numeric',
            'service_status' => 'required',
            'video_one_status' => 'required',
            'fun_fact_status' => 'required',
            'portfolio_heading' => 'required',
            'portfolio_subheading' => 'required',
            'portfolio_heading_ar' => 'required',
            'portfolio_subheading_ar' => 'required',
            'portfolio_how_many' => 'required|numeric',
            'portfolio_status' => 'required',
            'contact_heading' => 'required',
            'contact_subheading' => 'required',
            'contact_heading_ar' => 'required',
            'contact_subheading_ar' => 'required',
            'contact_status' => 'required',
            'blog_heading' => 'required',
            'blog_subheading' => 'required',
            'blog_heading_ar' => 'required',
            'blog_subheading_ar' => 'required',
            'blog_how_many' => 'required|numeric',
            'blog_status' => 'required',
            'video_two_status' => 'required',
            'feature_status' => 'required',
            'testimonial_heading' => 'required',
            'testimonial_subheading' => 'required',
            'testimonial_text' => 'required',
            'testimonial_heading_ar' => 'required',
            'testimonial_subheading_ar' => 'required',
            'testimonial_text_ar' => 'required',
            'testimonial_status' => 'required',
            'why_choose_status' => 'required',
            'client_status' => 'required',
        ]);

        $HomeOne = HomeOne::latest()->first();
        $HomeOne->update([
            'how_many_service_slider' => $validatedData['service_on_slider_how_many'],
            'service_slider_status' => $validatedData['service_on_slider_status'],
            'welcome_one_status' => $validatedData['welcome_status'],
            'service_heading' => $validatedData['service_heading'],
            'service_subheading' => $validatedData['service_subheading'],
            'service_heading_ar' => $validatedData['service_heading_ar'],
            'service_subheading_ar' => $validatedData['service_subheading_ar'],
            'how_many_service' => $validatedData['service_how_many'],
            'service_status' => $validatedData['service_status'],
            'video_one_status' => $validatedData['video_one_status'],
            'funfact_status' => $validatedData['fun_fact_status'],
            'portfolio_heading' => $validatedData['portfolio_heading'],
            'portfolio_subheading' => $validatedData['portfolio_subheading'],
            'portfolio_heading_ar' => $validatedData['portfolio_heading_ar'],
            'portfolio_subheading_ar' => $validatedData['portfolio_subheading_ar'],
            'how_many_portfolio' => $validatedData['portfolio_how_many'],
            'portfolio_status' => $validatedData['portfolio_status'],
            'contact_heading' => $validatedData['contact_heading'],
            'contact_subheading' => $validatedData['contact_subheading'],
            'contact_heading_ar' => $validatedData['contact_heading_ar'],
            'contact_subheading_ar' => $validatedData['contact_subheading_ar'],
            'contact_status' => $validatedData['contact_status'],
            'blog_heading' => $validatedData['blog_heading'],
            'blog_subheading' => $validatedData['blog_subheading'],
            'blog_heading_ar' => $validatedData['blog_heading_ar'],
            'blog_subheading_ar' => $validatedData['blog_subheading_ar'],
            'how_many_blog' => $validatedData['blog_how_many'],
            'blog_status' => $validatedData['blog_status'],
            'video_two_status' => $validatedData['video_two_status'],
            'feature_one_status' => $validatedData['feature_status'],
            'testimonial_heading' => $validatedData['testimonial_heading'],
            'testimonial_subheading' => $validatedData['testimonial_subheading'],
            'testimonial_text' => $validatedData['testimonial_text'],
            'testimonial_heading_ar' => $validatedData['testimonial_heading_ar'],
            'testimonial_subheading_ar' => $validatedData['testimonial_subheading_ar'],
            'testimonial_text_ar' => $validatedData['testimonial_text_ar'],
            'testimonial_status' => $validatedData['testimonial_status'],
            'choose_one_status' => $validatedData['why_choose_status'],
            'client_status' => $validatedData['client_status'],
        ]);
        return redirect()->route('dash.home.one.index')->with('success',trans('web_trans.home_one_updated_success'));

    }





    public function indexHomeTwo()
    {
        $HomeTwo = HomeTwo::latest()->first();
        return view("admins.home_pages.home_two", compact("HomeTwo"));
    }
    public function updateHomeTwo(Request $request)
    {
        $validatedData = $request->validate([
            'service_heading' => 'required',
            'service_subheading' => 'required',
            'service_heading_ar' => 'required',
            'service_subheading_ar' => 'required',
            'service_how_many' => 'required|numeric',
            'service_status' => 'required',
            'marquee_status' => 'required',
            'welcome_status' => 'required',
            'portfolio_heading' => 'required',
            'portfolio_subheading' => 'required',
            'portfolio_heading_ar' => 'required',
            'portfolio_subheading_ar' => 'required',
            'portfolio_how_many' => 'required|numeric',
            'portfolio_status' => 'required',
            'why_choose_status' => 'required',
            'testimonial_heading' => 'required',
            'testimonial_subheading' => 'required',
            'testimonial_text' => 'required',
            'testimonial_heading_ar' => 'required',
            'testimonial_subheading_ar' => 'required',
            'testimonial_text_ar' => 'required',
            'testimonial_status' => 'required',
            'team_member_heading' => 'required',
            'team_member_subheading' => 'required',
            'team_member_heading_ar' => 'required',
            'team_member_subheading_ar' => 'required',
            'team_member_how_many'=>'required|numeric',
            'team_member_status' => 'required',
            'contact_heading' => 'required',
            'contact_subheading' => 'required',
            'contact_heading_ar' => 'required',
            'contact_subheading_ar' => 'required',
            'contact_status' => 'required',
            'client_status' => 'required',
            'blog_heading' => 'required',
            'blog_subheading' => 'required',
            'blog_heading_ar' => 'required',
            'blog_subheading_ar' => 'required',
            'blog_how_many' => 'required|numeric',
            'blog_status' => 'required',
            'map_status' => 'required',            
        ]);

        $HomeTwo = HomeTwo::latest()->first();
        $HomeTwo->update([
            'welcome_two_status' => $validatedData['welcome_status'],
            'service_heading' => $validatedData['service_heading'],
            'service_subheading' => $validatedData['service_subheading'],
            'service_heading_ar' => $validatedData['service_heading_ar'],
            'service_subheading_ar' => $validatedData['service_subheading_ar'],
            'how_many_service' => $validatedData['service_how_many'],
            'service_status' => $validatedData['service_status'],
            'marquee_status' => $validatedData['marquee_status'],
            'portfolio_heading' => $validatedData['portfolio_heading'],
            'portfolio_subheading' => $validatedData['portfolio_subheading'],
            'portfolio_heading_ar' => $validatedData['portfolio_heading_ar'],
            'portfolio_subheading_ar' => $validatedData['portfolio_subheading_ar'],
            'how_many_portfolio' => $validatedData['portfolio_how_many'],
            'portfolio_status' => $validatedData['portfolio_status'],
            'contact_heading' => $validatedData['contact_heading'],
            'contact_subheading' => $validatedData['contact_subheading'],
            'contact_heading_ar' => $validatedData['contact_heading_ar'],
            'contact_subheading_ar' => $validatedData['contact_subheading_ar'],
            'contact_status' => $validatedData['contact_status'],
            'blog_heading' => $validatedData['blog_heading'],
            'blog_subheading' => $validatedData['blog_subheading'],
            'blog_heading_ar' => $validatedData['blog_heading_ar'],
            'blog_subheading_ar' => $validatedData['blog_subheading_ar'],
            'how_many_blog' => $validatedData['blog_how_many'],
            'blog_status' => $validatedData['blog_status'],
            'testimonial_heading' => $validatedData['testimonial_heading'],
            'testimonial_subheading' => $validatedData['testimonial_subheading'],
            'testimonial_text' => $validatedData['testimonial_text'],
            'testimonial_heading_ar' => $validatedData['testimonial_heading_ar'],
            'testimonial_subheading_ar' => $validatedData['testimonial_subheading_ar'],
            'testimonial_text_ar' => $validatedData['testimonial_text_ar'],
            'testimonial_status' => $validatedData['testimonial_status'],
            'team_member_heading' => $validatedData['team_member_heading'],
            'team_member_subheading' => $validatedData['team_member_subheading'],
            'team_member_heading_ar' => $validatedData['team_member_heading_ar'],
            'team_member_subheading_ar' => $validatedData['team_member_subheading_ar'],
            'how_many_team_member' => $validatedData['team_member_how_many'],
            'team_member_status' => $validatedData['team_member_status'],
            'choose_two_status' => $validatedData['why_choose_status'],
            'client_status' => $validatedData['client_status'],
        ]);
        return redirect()->route('dash.home.two.index')->with('success', trans('web_trans.home_two_updated_success'));

    }


    public function indexHomeThree()
    {
        $HomeThree = HomeThree::latest()->first();
        return view("admins.home_pages.home_three", compact("HomeThree"));
    }
    public function updateHomeThree(Request $request)
    {
        /* $validatedData = $request->validate([
            'service_how_many' => 'required|integer',
            'service_status' => 'required',
            'welcome_status' => 'required',
            'portfolio_heading' => 'required',
            'portfolio_subheading' => 'required',
            'portfolio_how_many' => 'required|integer',
            'portfolio_status' => 'required',
            'why_choose_status' => 'required',
            'testimonial_heading' => 'required',
            'testimonial_subheading' => 'required',
            'testimonial_text' => 'required',
            'testimonial_status' => 'required',
            'team_member_heading' => 'required',
            'team_member_subheading' => 'required',
            'team_member_how_many' => 'required|integer',
            'team_member_status' => 'required',
            'contact_heading' => 'required',
            'contact_subheading' => 'required',
            'contact_status' => 'required',
            'client_status' => 'required',
            'blog_heading' => 'required',
            'blog_subheading' => 'required',
            'blog_how_many' => 'required|integer',
            'blog_status' => 'required',
            'map_status' => 'required',            
        ]); */
        
    
        $HomeThree = HomeThree::latest()->first();
    
       /*  $HomeThree->update([
            'welcome_two_status' => $validatedData['welcome_status'],
            'service_heading' => $validatedData['service_heading'],
            'service_subheading' => $validatedData['service_subheading'],
            'how_many_service' => $validatedData['service_how_many'],
            'service_status' => $validatedData['service_status'],
            'portfolio_heading' => $validatedData['portfolio_heading'],
            'portfolio_subheading' => $validatedData['portfolio_subheading'],
            'how_many_portfolio' => $validatedData['portfolio_how_many'],
            'portfolio_status' => $validatedData['portfolio_status'],
            'contact_heading' => $validatedData['contact_heading'],
            'contact_subheading' => $validatedData['contact_subheading'],
            'contact_status' => $validatedData['contact_status'],
            'blog_heading' => $validatedData['blog_heading'],
            'blog_subheading' => $validatedData['blog_subheading'],
            'how_many_blog' => $validatedData['blog_how_many'],
            'blog_status' => $validatedData['blog_status'],
            'testimonial_heading' => $validatedData['testimonial_heading'],
            'testimonial_subheading' => $validatedData['testimonial_subheading'],
            'testimonial_text' => $validatedData['testimonial_text'],
            'testimonial_status' => $validatedData['testimonial_status'],
            'team_member_heading' => $validatedData['team_member_heading'],
            'team_member_subheading' => $validatedData['team_member_subheading'],
            'how_many_team_member' => $validatedData['team_member_how_many'],
            'team_member_status' => $validatedData['team_member_status'],
            'choose_two_status' => $validatedData['why_choose_status'],
            'client_status' => $validatedData['client_status'],
            'map_status' => $validatedData['map_status'],
        ]); */

        $HomeThree->update([
            'welcome_two_status' => $request->input('welcome_status'),
            'how_many_service' => $request->input('service_how_many'),
            'service_status' => $request->input('service_status'),
            'offer_status' => $request->input('offer_status'),
            'portfolio_heading' => $request->input('portfolio_heading'),
            'portfolio_heading_ar' => $request->input('portfolio_heading_ar'),
            'portfolio_subheading' => $request->input('portfolio_subheading'),
            'portfolio_subheading_ar' => $request->input('portfolio_subheading_ar'),
            'portfolio_text' => $request->input('portfolio_text'),
            'portfolio_text_ar' => $request->input('portfolio_text_ar'),
            'how_many_portfolio' => $request->input('portfolio_how_many'),
            'portfolio_status' => $request->input('portfolio_status'),
            'contact_heading' => $request->input('contact_heading'),
            'contact_heading_ar' => $request->input('contact_heading_ar'),
            'contact_subheading' => $request->input('contact_subheading'),
            'contact_subheading_ar' => $request->input('contact_subheading_ar'),
            'contact_status' => $request->input('contact_status'),
            'blog_heading' => $request->input('blog_heading'),
            'blog_heading_ar' => $request->input('blog_heading_ar'),
            'blog_subheading' => $request->input('blog_subheading'),
            'blog_subheading_ar' => $request->input('blog_subheading_ar'),
            'how_many_blog' => $request->input('blog_how_many'),
            'blog_status' => $request->input('blog_status'),
            'testimonial_heading' => $request->input('testimonial_heading'),
            'testimonial_heading_ar' => $request->input('testimonial_heading_ar'),
            'testimonial_subheading' => $request->input('testimonial_subheading'),
            'testimonial_subheading_ar' => $request->input('testimonial_subheading_ar'),
            'testimonial_text' => $request->input('testimonial_text'),
            'testimonial_text_ar' => $request->input('testimonial_text_ar'),
            'testimonial_status' => $request->input('testimonial_status'),
            'team_member_heading' => $request->input('team_member_heading'),
            'team_member_heading_ar' => $request->input('team_member_heading_ar'),
            'team_member_subheading' => $request->input('team_member_subheading'),
            'team_member_subheading_ar' => $request->input('team_member_subheading_ar'),
            'how_many_team_member' => $request->input('team_member_how_many'),
            'team_member_status' => $request->input('team_member_status'),
            'choose_two_status' => $request->input('why_choose_status'),
            'client_status' => $request->input('client_status'),
            'map_status' => $request->input('map_status'),
        ]);
        
        return redirect()->route('dash.home.three.index')->with('success', trans('web_trans.home_three_updated_success'));

    }



    public function indexHomeFour()
    {
        $HomeFour = HomeFour::latest()->first();
        return view("admins.home_pages.home_four", compact("HomeFour"));
    }

    public function updateHomeFour(Request $request)
    {
        /* $validatedData = $request->validate([
            'service_heading' => 'required',
            'service_subheading' => 'required',
            'service_how_many' => 'required|numeric',
            'service_status' => 'required',
            'marquee_status' => 'required',
            'welcome_status' => 'required',
            'portfolio_heading' => 'required',
            'portfolio_subheading' => 'required',
            'portfolio_how_many' => 'required|numeric',
            'portfolio_status' => 'required',
            'why_choose_status' => 'required',
            'testimonial_heading' => 'required',
            'testimonial_subheading' => 'required',
            'testimonial_text' => 'required',
            'testimonial_status' => 'required',
            'team_member_heading' => 'required',
            'team_member_subheading' => 'required',
            'team_member_how_many'=>'required|numeric',
            'team_member_status' => 'required',
            'contact_heading' => 'required',
            'contact_subheading' => 'required',
            'contact_status' => 'required',
            'client_status' => 'required',
            'blog_heading' => 'required',
            'blog_subheading' => 'required',
            'blog_how_many' => 'required|numeric',
            'blog_status' => 'required',
            'map_status' => 'required',            
        ]); */

        $HomeFour = HomeFour::latest()->first();
       /*  $HomeFour->update([
            'welcome_two_status' => $validatedData['welcome_status'],
            'service_heading' => $validatedData['service_heading'],
            'service_subheading' => $validatedData['service_subheading'],
            'how_many_service' => $validatedData['service_how_many'],
            'service_status' => $validatedData['service_status'],
            'marquee_status' => $validatedData['marquee_status'],
            'portfolio_heading' => $validatedData['portfolio_heading'],
            'portfolio_subheading' => $validatedData['portfolio_subheading'],
            'how_many_portfolio' => $validatedData['portfolio_how_many'],
            'portfolio_status' => $validatedData['portfolio_status'],
            'contact_heading' => $validatedData['contact_heading'],
            'contact_subheading' => $validatedData['contact_subheading'],
            'contact_status' => $validatedData['contact_status'],
            'blog_heading' => $validatedData['blog_heading'],
            'blog_subheading' => $validatedData['blog_subheading'],
            'how_many_blog' => $validatedData['blog_how_many'],
            'blog_status' => $validatedData['blog_status'],
            'testimonial_heading' => $validatedData['testimonial_heading'],
            'testimonial_subheading' => $validatedData['testimonial_subheading'],
            'testimonial_text' => $validatedData['testimonial_text'],
            'testimonial_status' => $validatedData['testimonial_status'],
            'team_member_heading' => $validatedData['team_member_heading'],
            'team_member_subheading' => $validatedData['team_member_subheading'],
            'how_many_team_member' => $validatedData['team_member_how_many'],
            'team_member_status' => $validatedData['team_member_status'],
            'choose_two_status' => $validatedData['why_choose_status'],
            'client_status' => $validatedData['client_status'],
        ]); */
        $HomeFour->update([
            'service_heading' => $request->input('service_heading'),
            'service_heading_ar' => $request->input('service_heading_ar'),
            'service_subheading' => $request->input('service_subheading'),
            'service_subheading_ar' => $request->input('service_subheading_ar'),
            'how_many_service' => $request->input('service_how_many'),
            'service_status' => $request->input('service_status'),
            'marquee_status' => $request->input('marquee_status'),
            'welcome_status' => $request->input('welcome_status'),
            'portfolio_heading' => $request->input('portfolio_heading'),
            'portfolio_heading_ar' => $request->input('portfolio_heading_ar'),
            'portfolio_subheading' => $request->input('portfolio_subheading'),
            'portfolio_subheading_ar' => $request->input('portfolio_subheading_ar'),
            'how_many_portfolio' => $request->input('portfolio_how_many'),
            'portfolio_status' => $request->input('portfolio_status'),
            'choose_two_status' => $request->input('why_choose_status'),
            'testimonial_heading' => $request->input('testimonial_heading'),
            'testimonial_heading_ar' => $request->input('testimonial_heading_ar'),
            'testimonial_subheading' => $request->input('testimonial_subheading'),
            'testimonial_subheading_ar' => $request->input('testimonial_subheading_ar'),
            'testimonial_text' => $request->input('testimonial_text'),
            'testimonial_text_ar' => $request->input('testimonial_text_ar'),
            'testimonial_status' => $request->input('testimonial_status'),
            'team_member_heading' => $request->input('team_member_heading'),
            'team_member_heading_ar' => $request->input('team_member_heading_ar'),
            'team_member_subheading' => $request->input('team_member_subheading'),
            'team_member_subheading_ar' => $request->input('team_member_subheading_ar'),
            'how_many_team_member' => $request->input('team_member_how_many'),
            'team_member_status' => $request->input('team_member_status'),
            'client_status' => $request->input('client_status'),
            'contact_heading' => $request->input('contact_heading'),
            'contact_heading_ar' => $request->input('contact_heading_ar'),
            'contact_subheading' => $request->input('contact_subheading'),
            'contact_subheading_ar' => $request->input('contact_subheading_ar'),
            'contact_status' => $request->input('contact_status'),
            'blog_heading' => $request->input('blog_heading'),
            'blog_heading_ar' => $request->input('blog_heading_ar'),
            'blog_subheading' => $request->input('blog_subheading'),
            'blog_subheading_ar' => $request->input('blog_subheading_ar'),
            'how_many_blog' => $request->input('blog_how_many'),
            'blog_status' => $request->input('blog_status'),
            'map_status' => $request->input('map_status'),
        ]);
        return redirect()->route('dash.home.four.index')->with('success', trans('web_trans.home_four_updated_success'));

    }
    public function indexHomeContactPhoto()
    {
        $HomePhotoOne = HomeOne::latest()->value('photo_home_one');
        $HomePhotoTwo = HomeTwo::latest()->value('photo_home_two');
        $HomePhotoThree = HomeThree::latest()->value('photo_home_three');
        $HomeFourPhoto = HomeFour::latest()->value('photo_home_four');

        return view("admins.home_pages.contact_photo", compact("HomePhotoOne",'HomePhotoTwo','HomePhotoThree','HomeFourPhoto'));
    }
    public function updateHomeContactPhoto(Request $request)
    {
        $HomeOne = HomeOne::latest()->first();
        $HomeTwo = HomeTwo::latest()->first();
        $HomeThree = HomeThree::latest()->first();
        $HomeFour = HomeFour::latest()->first();

        if ($request->hasFile('home_1_contact_photo')) {
            if (file_exists(public_path('assets/uploads/home_pages/' . $HomeOne->photo_home_one))) {
                unlink(public_path('assets/uploads/home_pages/' . $HomeOne->photo_home_one));
            }
            $uploadedHomeOnePhoto = $request->file('home_1_contact_photo');
            $HomeOnePhotoPath = time() . '_' . $uploadedHomeOnePhoto->getClientOriginalName();
            $uploadedHomeOnePhoto->move(public_path('assets/uploads/home_pages/'), $HomeOnePhotoPath);
            $HomeOne->photo_home_one = $HomeOnePhotoPath;
        }    
        
        if ($request->hasFile('home_2_contact_photo')) {
            if (file_exists(public_path('assets/uploads/home_pages/' . $HomeTwo->photo_home_two))) {
                unlink(public_path('assets/uploads/home_pages/' . $HomeTwo->photo_home_two));
            }
            $uploadedHomeTwoPhoto = $request->file('home_2_contact_photo');
            $HomeTwoPhotoPath = time() . '_' . $uploadedHomeTwoPhoto->getClientOriginalName();
            $uploadedHomeTwoPhoto->move(public_path('assets/uploads/home_pages/'), $HomeTwoPhotoPath);
            $HomeTwo->photo_home_two = $HomeTwoPhotoPath;
        }   

        if ($request->hasFile('home_3_contact_photo')) {
            if (file_exists(public_path('assets/uploads/home_pages/' . $HomeThree->photo_home_three))) {
                unlink(public_path('assets/uploads/home_pages/' . $HomeThree->photo_home_three));
            }
            $uploadedHomeThreePhoto = $request->file('home_3_contact_photo');
            $HomeThreePhotoPath = time() . '_' . $uploadedHomeThreePhoto->getClientOriginalName();
            $uploadedHomeThreePhoto->move(public_path('assets/uploads/home_pages/'), $HomeThreePhotoPath);
            $HomeThree->photo_home_three = $HomeThreePhotoPath;
        }   

        if ($request->hasFile('home_4_contact_photo')) {
            if (file_exists(public_path('assets/uploads/home_pages/' . $HomeFour->photo_home_four))) {
                unlink(public_path('assets/uploads/home_pages/' . $HomeFour->photo_home_four));
            }
            $uploadedHomeFourPhoto = $request->file('home_4_contact_photo');
            $HomeFourPhotoPath = time() . '_' . $uploadedHomeFourPhoto->getClientOriginalName();
            $uploadedHomeFourPhoto->move(public_path('assets/uploads/home_pages/'), $HomeFourPhotoPath);
            $HomeFour->photo_home_four = $HomeFourPhotoPath;
        } 
        $HomeOne->save();
        $HomeTwo->save();
        $HomeThree->save();
        $HomeFour->save();

        return redirect()->route('dash.home.contact.photo.index')->with('success','Photo Updated succssesfully');

    }

}
