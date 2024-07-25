<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPagePortfolio;
use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function index()
    {
        $Portfolios = Portfolio::all();
        return view('admins.portfolios.index', compact('Portfolios'));
    }

    public function create()
    {
        return view('admins.portfolios.create_portfolio');
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
            'banner.required' => trans('web_trans.photo_required'),
            'banner.image' => trans('web_trans.photo_image'),
            'banner.mimes' => trans('web_trans.photo_mimes'),
            'banner.max' => trans('web_trans.photo_max'),
            'description.required' => trans('web_trans.description_required'),
            'description_ar.required' => trans('web_trans.description_ar_required'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'description' => 'required',
            'description_ar' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $customMessages);

        $Portfolio = new Portfolio();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/portfolios/photos'), $photoPath);
            $Portfolio->photo = $photoPath;
        }

        if ($request->hasFile('banner')) {
            $uploadedBanner = $request->file('banner');
            $bannerPath = time() . '_' . $uploadedBanner->getClientOriginalName();
            $uploadedBanner->move(public_path('assets/uploads/portfolios/banners'), $bannerPath);
            $Portfolio->banner = $bannerPath;
        }

        $Portfolio->name = $validatedData['name'];
        $Portfolio->name_ar = $validatedData['name_ar'];
        $Portfolio->slug = $validatedData['slug'];
        $Portfolio->slug_ar = $validatedData['slug_ar'];
        $Portfolio->descr = $validatedData['description'];
        $Portfolio->descr_ar = $validatedData['description_ar'];
        $Portfolio->date = $request->date;
        $Portfolio->client = $request->client;
        $Portfolio->client_ar = $request->client_ar;
        $Portfolio->website = $request->website;
        $Portfolio->location = $request->location;
        $Portfolio->location_ar = $request->location_ar;
        $Portfolio->seo_title = $request->seo_title;
        $Portfolio->seo_title_ar = $request->seo_title_ar;
        $Portfolio->seo_descr = $request->seo_meta_description;
        $Portfolio->seo_descr_ar = $request->seo_meta_description_ar;
        $Portfolio->save();

        return redirect()->route('dash.portfolio.index')->with('success', trans('web_trans.portfolio_created_success'));
    }

    public function show($id)
    {
        $Portfolio = Portfolio::where('id', $id)->first();
        return view('admins.portfolios.update_portfolio', compact('Portfolio'));
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
            'banner.required' => trans('web_trans.photo_required'),
            'banner.image' => trans('web_trans.photo_image'),
            'banner.mimes' => trans('web_trans.photo_mimes'),
            'banner.max' => trans('web_trans.photo_max'),
            'description.required' => trans('web_trans.description_required'),
            'description_ar.required' => trans('web_trans.description_ar_required'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'description' => 'required',
            'description_ar' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required',
        ], $customMessages);

        $Portfolio = Portfolio::find($validatedData['id']);

        if (!$Portfolio) {
            return redirect()->route('dash.portfolio.index')->with('error', 'Portfolio not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/portfolios/photos/' . $Portfolio->photo))) {
                unlink(public_path('assets/uploads/portfolios/photos/' . $Portfolio->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/portfolios/photos/'), $photoPath);
            $Portfolio->photo = $photoPath;
        }

        if ($request->hasFile('banner')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/portfolios/banners/' . $Portfolio->banner))) {
                unlink(public_path('assets/uploads/portfolios/banners/' . $Portfolio->banner));
            }

            // Upload and save the new photo
            $uploadedBanner = $request->file('banner');
            $bannerPath = time() . '_' . $uploadedBanner->getClientOriginalName();
            $uploadedBanner->move(public_path('assets/uploads/portfolios/banners/'), $bannerPath);
            $Portfolio->banner = $bannerPath;
        }

        $Portfolio->name = $validatedData['name'];
        $Portfolio->name_ar = $validatedData['name_ar'];
        $Portfolio->slug = $validatedData['slug'];
        $Portfolio->slug_ar = $validatedData['slug_ar'];
        $Portfolio->descr = $validatedData['description'];
        $Portfolio->descr_ar = $validatedData['description_ar'];
        $Portfolio->date = $request->date;
        $Portfolio->client = $request->client;
        $Portfolio->client_ar = $request->client_ar;
        $Portfolio->website = $request->website;
        $Portfolio->location = $request->location;
        $Portfolio->location_ar = $request->location_ar;
        $Portfolio->seo_title = $request->seo_title;
        $Portfolio->seo_title_ar = $request->seo_title_ar;
        $Portfolio->seo_descr = $request->seo_meta_description;
        $Portfolio->seo_descr_ar = $request->seo_meta_description_ar;
        $Portfolio->save();

        return redirect()->route('dash.portfolio.index')->with('success', trans('web_trans.portfolio_updated_success'));
    }

    public function destroy(Request $request, $id)
    {
        $Portfolio = Portfolio::find($id);

        if (file_exists(public_path('assets/uploads/portfolios/photos/' . $Portfolio->photo))) {
            unlink(public_path('assets/uploads/portfolios/photos/' . $Portfolio->photo));
        }

        if (file_exists(public_path('assets/uploads/portfolios/banners/' . $Portfolio->banner))) {
            unlink(public_path('assets/uploads/portfolios/banners/' . $Portfolio->banner));
        }
        $Portfolio->delete();
        return redirect()->route('dash.portfolio.index')->with('success', trans('web_trans.portfolio_deleted_success'));
    }


    public function sitePortfolio()
    {
        $PortfolioHeading = OtherPagePortfolio::latest()->first();
        $Portfolios = Portfolio::all();

        return view('home.portfolio', compact('PortfolioHeading', 'Portfolios'));
    }

    public function siteCustomPortfolio(Request $request, $slug)
    {
        $Portfolio = Portfolio::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->first();
        $previousProject = Portfolio::where('id', '<', $Portfolio->id)->orderBy('id', 'desc')->first();
        $nextProject = Portfolio::where('id', '>', $Portfolio->id)->orderBy('id', 'asc')->first();

        return view('home.customPortfolio', compact('Portfolio','previousProject','nextProject'));
    }
    

}
