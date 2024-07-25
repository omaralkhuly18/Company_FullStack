<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {

        $Setting = Setting::latest()->first();
        return view('admins.settings.index', compact('Setting'));
    }

    
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_sticky' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            '404' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            'banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            'login_page_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            'home_show' => 'required',
            'home_seo_title' => 'required',
            'home_seo_title_ar' => 'required',
            'home_seo_meta_description' => 'required',
            'home_seo_meta_description_ar' => 'required',

            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
            'instagram'=>'required',
            'youtube'=>'required',
            'pinterest'=>'required',

            'top_bar_email'=>'required',
            'top_bar_address'=>'required',
            'top_bar_address_ar'=>'required',
            'top_bar_phone'=>'required',

            'footer_email'=>'required',
            'footer_phone'=>'required',
            'footer_address'=>'required',
            'footer_copyright'=>'required',
            'footer_text'=>'required',
            'footer_links_heading'=>'required',
            'footer_subscriber_heading'=>'required',
            'footer_subscriber_text'=>'required',
            'footer_address_ar'=>'required',
            'footer_copyright_ar'=>'required',
            'footer_text_ar'=>'required',
            'footer_links_heading_ar'=>'required',
            'footer_subscriber_heading_ar'=>'required',
            'footer_subscriber_text_ar'=>'required',

            'map'=>'required',

            'cookie_consent_message'=>'required',
            'cookie_consent_text_color'=>'required',
            'cookie_consent_bg_color'=>'required',
            'cookie_consent_button_text_color'=>'required',
            'cookie_consent_button_bg_color'=>'required',
            'cookie_consent_button_text'=>'required',
            'cookie_consent_status'=>'required',

            'google_analytic_id'=>'required',
            'google_analytic_status'=>'required',

            'google_recaptcha_site_key'=>'required',
            'google_recaptcha_status'=>'required',

            'tawk_live_chat_property_id'=>'required',
            'tawk_live_chat_status'=>'required',

            'sticky_header'=>'required',
            'preloader'=>'required',
            'layout_direction'=>'required',
            'language'=>'required',
            'theme_color'=>'required',
        ]);
        $Setting = Setting::latest()->first();
        if ($request->hasFile('logo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/settings/logo/' . $Setting->logo))) {
                unlink(public_path('assets/uploads/settings/logo/' . $Setting->logo));
            }

            // Upload and save the new photo
            $uploadedLogo = $request->file('logo');
            $logoPath = 'logo'. $uploadedLogo->getClientOriginalName();
            $uploadedLogo->move(public_path('assets/uploads/settings/logo/'), $logoPath);
            $Setting->logo = $logoPath;
        }

        if ($request->hasFile('logo_sticky')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/settings/logo/' . $Setting->sticky))) {
                unlink(public_path('assets/uploads/settings/logo/' . $Setting->sticky));
            }

            // Upload and save the new photo
            $uploadedSticky = $request->file('logo_sticky');
            $stickyPath = 'sticky' . $uploadedSticky->getClientOriginalName();
            $uploadedSticky->move(public_path('assets/uploads/settings/logo/'), $stickyPath);
            $Setting->sticky = $stickyPath;
        }

        if ($request->hasFile('favicon')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/settings/logo/' . $Setting->favicon))) {
                unlink(public_path('assets/uploads/settings/logo/' . $Setting->favicon));
            }

            // Upload and save the new photo
            $uploadedFavicon = $request->file('favicon');
            $faviconPath = 'favicon' . $uploadedFavicon->getClientOriginalName();
            $uploadedFavicon->move(public_path('assets/uploads/settings/logo/'), $faviconPath);
            $Setting->favicon = $faviconPath;
        }

        if ($request->hasFile('image_404')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/settings/404/' . $Setting->page404))) {
                unlink(public_path('assets/uploads/settings/404/' . $Setting->page404));
            }

            $uploaded404 = $request->file('image_404');
            $page404Path = '404' . $uploaded404->getClientOriginalName();
            $uploaded404->move(public_path('assets/uploads/settings/404/'), $page404Path);
            $Setting->page404 = $page404Path;
        }

        if ($request->hasFile('banner')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/settings/banner/' . $Setting->banner))) {
                unlink(public_path('assets/uploads/settings/banner/' . $Setting->banner));
            }

            $uploadedBanner = $request->file('banner');
            $BannerPath = 'banner' . $uploadedBanner->getClientOriginalName();
            $uploadedBanner->move(public_path('assets/uploads/settings/banner/'), $BannerPath);
            $Setting->banner = $BannerPath;
        }

        if ($request->hasFile('login_page_photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/settings/login/' . $Setting->login))) {
                unlink(public_path('assets/uploads/settings/login/' . $Setting->login));
            }

            $uploadedLogin = $request->file('login_page_photo');
            $LoginPath = 'login.' . $uploadedLogin->getClientOriginalExtension();
            $uploadedLogin->move(public_path('assets/uploads/settings/login/'), $LoginPath);
            $Setting->login = $LoginPath;
        }
        $Setting->home_shown = $validatedData['home_show'];
        $Setting->home_seo_title = $validatedData['home_seo_title'];
        $Setting->home_seo_title_ar = $validatedData['home_seo_title_ar'];
        $Setting->home_seo_descr = $validatedData['home_seo_meta_description'];
        $Setting->home_seo_descr_ar = $validatedData['home_seo_meta_description_ar'];

        $Setting->facebook = $validatedData['facebook'];
        $Setting->twitter = $validatedData['twitter'];
        $Setting->linkedin = $validatedData['linkedin'];
        $Setting->instagram = $validatedData['instagram'];
        $Setting->youtube = $validatedData['youtube'];
        $Setting->pintrest = $validatedData['pinterest'];

        $Setting->top_email = $validatedData['top_bar_email'];
        $Setting->top_address = $validatedData['top_bar_address'];
        $Setting->top_address_ar = $validatedData['top_bar_address_ar'];
        $Setting->top_phone = $validatedData['top_bar_phone'];

        $Setting->footer_email = $validatedData['footer_email'];
        $Setting->footer_address = $validatedData['footer_address'];
        $Setting->footer_address_ar = $validatedData['footer_address_ar'];
        $Setting->footer_phone = $validatedData['footer_phone'];
        $Setting->footer_copyright = $validatedData['footer_copyright'];
        $Setting->footer_copyright_ar = $validatedData['footer_copyright_ar'];
        $Setting->footer_text = $validatedData['footer_text'];
        $Setting->footer_text_ar = $validatedData['footer_text_ar'];
        $Setting->footer_links = $validatedData['footer_links_heading'];
        $Setting->footer_links_ar = $validatedData['footer_links_heading_ar'];
        $Setting->footer_subscriber = $validatedData['footer_subscriber_heading'];
        $Setting->footer_subscriber_ar = $validatedData['footer_subscriber_heading_ar'];
        $Setting->footer_subscriber_text = $validatedData['footer_subscriber_text'];
        $Setting->footer_subscriber_text_ar = $validatedData['footer_subscriber_text_ar'];

        $Setting->map = $validatedData['map'];

        $Setting->cookie_message = $validatedData['cookie_consent_message'];
        $Setting->cookie_text_color = '#' .$validatedData['cookie_consent_text_color'];
        $Setting->cookie_bg_color = '#' .$validatedData['cookie_consent_bg_color'];
        $Setting->cookie_btn_text_color = '#' .$validatedData['cookie_consent_button_text_color'];
        $Setting->cookie_btn_bg_color = '#' .$validatedData['cookie_consent_button_bg_color'];
        $Setting->cookie_btn_text = $validatedData['cookie_consent_button_text'];
        $Setting->cookie_status = ($validatedData['cookie_consent_status'] === 'Show') ? 1 : 0;
        
        $Setting->google_code = $validatedData['google_analytic_id'];
        $Setting->google_status = ($validatedData['google_analytic_status'] === 'Show') ? 1 : 0;

        $Setting->google_recabtcha = $validatedData['google_recaptcha_site_key'];
        $Setting->google_recabtcha_status = ($validatedData['google_recaptcha_status'] === 'Show') ? 1 : 0;

        $Setting->livewire_id = $validatedData['tawk_live_chat_property_id'];
        $Setting->livewire_status = ($validatedData['tawk_live_chat_status'] === 'Show') ? 1 : 0;

        $Setting->sticky_header = ($validatedData['sticky_header'] === 'Show') ? 1 : 0;
        $Setting->preloader = ($validatedData['preloader'] === 'Show') ? 1 : 0;
        $Setting->layout_direction = $validatedData['layout_direction'] ;
        $Setting->theme_color = '#' .$validatedData['theme_color'];
        $Setting->language = $validatedData['language'];

        $Setting->save();

        // return response()->json(['success' => trans('web_trans.setting_updated_success')]);
        return redirect()->route('dash.setting.index')->with('success', trans('web_trans.setting_updated_success'));

    }

}
