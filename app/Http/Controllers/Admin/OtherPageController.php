<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Team;
use App\Models\WelcomeOne;
use App\Models\WelcomeOneElement;
use App\Models\WelcomeTwo;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\OtherPageTeamMember;
use App\Models\OtherPageTestimonial;
use App\Models\OtherPagePricing;
use App\Models\OtherPageFAQ;
use App\Models\OtherPageService;
use App\Models\OtherPageBlog;
use App\Models\OtherPagePortfolio;
use App\Models\OtherPageContact;
use App\Models\OtherPageTerm;
use App\Models\OtherPagePrivacy;
use App\Models\OtherPageSearch;
use App\Models\OtherPageTag;
use App\Models\OtherPageCustomPage;


class OtherPageController extends Controller
{
    public function index()
    {
        $About = About::latest()->first();
        $TeamMember = OtherPageTeamMember::latest()->first();
        $Testimonial = OtherPageTestimonial::latest()->first();
        $Pricing = OtherPagePricing::latest()->first();
        $FAQ = OtherPageFAQ::latest()->first();
        $Service = OtherPageService::latest()->first();
        $Blog = OtherPageBlog::latest()->first();
        $Portfolio = OtherPagePortfolio::latest()->first();
        $Contact = OtherPageContact::latest()->first();
        $Term = OtherPageTerm::latest()->first();
        $Privacy = OtherPagePrivacy::latest()->first();
        $Search = OtherPageSearch::latest()->first();
        $Tag = OtherPageTag::latest()->first();
        $CustomPages = OtherPageCustomPage::all();
        return view(
            "admins.other_pages.index",
            compact(
                "About",
                "TeamMember",
                "Testimonial",
                "Pricing",
                "FAQ",
                "Service",
                "Blog",
                "Portfolio",
                "Contact",
                "Term",
                "Privacy",
                "Search",
                "Tag",
                "CustomPages"
            )
        );
    }

    public function updateAbout(Request $request)
    {
        $validatedData = $request->validate([
            'page_about_title' => 'required',
            'page_about_welcome_status' => 'required',
            'page_about_service_heading' => 'required',
            'page_about_service_subheading' => 'required',
            'page_about_service_text' => 'required',
            'page_about_title_ar' => 'required',
            'page_about_service_heading_ar' => 'required',
            'page_about_service_subheading_ar' => 'required',
            'page_about_service_text_ar' => 'required',
            'page_about_service_how_many' => 'required',
            'page_about_service_status' => 'required',
            'page_about_team_members_heading' => 'required',
            'page_about_team_members_subheading' => 'required',
            'page_about_team_members_heading_ar' => 'required',
            'page_about_team_members_subheading_ar' => 'required',
            'page_about_team_members_how_many' => 'required',
            'page_about_team_members_status' => 'required',
            'page_about_seo_title' => 'required',
            'page_about_seo_meta_description' => 'required',
            'page_about_seo_title_ar' => 'required',
            'page_about_seo_meta_description_ar' => 'required',
        ]);

        $About = About::latest()->first();
        $About->update([
            'title' => $validatedData['page_about_title'],
            'title_ar' => $validatedData['page_about_title_ar'],
            'welcome_one_status' => $validatedData['page_about_welcome_status'],
            'service_heading' => $validatedData['page_about_service_heading'],
            'service_heading_ar' => $validatedData['page_about_service_heading_ar'],
            'service_subheading' => $validatedData['page_about_service_subheading'],
            'service_subheading_ar' => $validatedData['page_about_service_subheading_ar'],
            'service_text' => $validatedData['page_about_service_text'],
            'service_text_ar' => $validatedData['page_about_service_text_ar'],
            'how_many_service' => $validatedData['page_about_service_how_many'],
            'service_status' => $validatedData['page_about_service_status'],
            'team_member_heading' => $validatedData['page_about_team_members_heading'],
            'team_member_heading_ar' => $validatedData['page_about_team_members_heading_ar'],
            'team_member_subheading' => $validatedData['page_about_team_members_subheading'],
            'team_member_subheading_ar' => $validatedData['page_about_team_members_subheading_ar'],
            'how_many_team_member' => $validatedData['page_about_team_members_how_many'],
            'team_member_status' => $validatedData['page_about_team_members_status'],
            'seo_title' => $validatedData['page_about_seo_title'],
            'seo_title_ar' => $validatedData['page_about_seo_title_ar'],
            'seo_descr' => $validatedData['page_about_seo_meta_description'],
            'seo_descr_ar' => $validatedData['page_about_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.about_updated_success')]);

    }

    public function updateTeamMember(Request $request)
    {
        $validatedData = $request->validate([
            'page_team_members_title' => 'required',
            'page_team_members_seo_title' => 'required',
            'page_team_members_seo_meta_description' => 'required',
            'page_team_members_title_ar' => 'required',
            'page_team_members_seo_title_ar' => 'required',
            'page_team_members_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageTeamMember = OtherPageTeamMember::latest()->first();
        $OtherPageTeamMember->update([
            'title' => $validatedData['page_team_members_title'],
            'seo_title' => $validatedData['page_team_members_seo_title'],
            'seo_descr' => $validatedData['page_team_members_seo_meta_description'],
            'title_ar' => $validatedData['page_team_members_title_ar'],
            'seo_title_ar' => $validatedData['page_team_members_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_team_members_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.team_updated_success')]);
    }

    public function updateTestimonial(Request $request)
    {
        $validatedData = $request->validate([
            'page_testimonials_title' => 'required',
            'page_testimonials_seo_title' => 'required',
            'page_testimonials_seo_meta_description' => 'required',
            'page_testimonials_title_ar' => 'required',
            'page_testimonials_seo_title_ar' => 'required',
            'page_testimonials_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageTestimonial = OtherPageTestimonial::latest()->first();
        $OtherPageTestimonial->update([
            'title' => $validatedData['page_testimonials_title'],
            'seo_title' => $validatedData['page_testimonials_seo_title'],
            'seo_descr' => $validatedData['page_testimonials_seo_meta_description'],
            'title_ar' => $validatedData['page_testimonials_title_ar'],
            'seo_title_ar' => $validatedData['page_testimonials_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_testimonials_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.testimonial_updated_success')]);

    }

    public function updatePricing(Request $request)
    {
        $validatedData = $request->validate([
            'page_pricing_title' => 'required',
            'page_pricing_seo_title' => 'required',
            'page_pricing_seo_meta_description' => 'required',
            'page_pricing_title_ar' => 'required',
            'page_pricing_seo_title_ar' => 'required',
            'page_pricing_seo_meta_description_ar' => 'required',
        ]);

        $OtherPagePricing = OtherPagePricing::latest()->first();
        $OtherPagePricing->update([
            'title' => $validatedData['page_pricing_title'],
            'seo_title' => $validatedData['page_pricing_seo_title'],
            'seo_descr' => $validatedData['page_pricing_seo_meta_description'],
            'title_ar' => $validatedData['page_pricing_title_ar'],
            'seo_title_ar' => $validatedData['page_pricing_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_pricing_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.pricing_updated_success')]);
    }

    public function updateFAQ(Request $request)
    {
        $validatedData = $request->validate([
            'page_faq_title' => 'required',
            'page_faq_seo_title' => 'required',
            'page_faq_seo_meta_description' => 'required',
            'page_faq_title_ar' => 'required',
            'page_faq_seo_title_ar' => 'required',
            'page_faq_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageFAQ = OtherPageFAQ::latest()->first();
        $OtherPageFAQ->update([
            'title' => $validatedData['page_faq_title'],
            'seo_title' => $validatedData['page_faq_seo_title'],
            'seo_descr' => $validatedData['page_faq_seo_meta_description'],
            'title_ar' => $validatedData['page_faq_title_ar'],
            'seo_title_ar' => $validatedData['page_faq_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_faq_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.faqs_updated_success')]);
    }

    public function updateService(Request $request)
    {
        $validatedData = $request->validate([
            'page_services_title' => 'required',
            'page_services_seo_title' => 'required',
            'page_services_seo_meta_description' => 'required',
            'page_services_title_ar' => 'required',
            'page_services_seo_title_ar' => 'required',
            'page_services_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageService = OtherPageService::latest()->first();
        $OtherPageService->update([
            'title' => $validatedData['page_services_title'],
            'seo_title' => $validatedData['page_services_seo_title'],
            'seo_descr' => $validatedData['page_services_seo_meta_description'],
            'title_ar' => $validatedData['page_services_title_ar'],
            'seo_title_ar' => $validatedData['page_services_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_services_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.service_updated_success')]);
    }

    public function updatePortfolio(Request $request)
    {
        $validatedData = $request->validate([
            'page_portfolios_title' => 'required',
            'page_portfolios_seo_title' => 'required',
            'page_portfolios_seo_meta_description' => 'required',
            'page_portfolios_title_ar' => 'required',
            'page_portfolios_seo_title_ar' => 'required',
            'page_portfolios_seo_meta_description_ar' => 'required',
        ]);

        $OtherPagePortfolio = OtherPagePortfolio::latest()->first();
        $OtherPagePortfolio->update([
            'title' => $validatedData['page_portfolios_title'],
            'seo_title' => $validatedData['page_portfolios_seo_title'],
            'seo_descr' => $validatedData['page_portfolios_seo_meta_description'],
            'title_ar' => $validatedData['page_portfolios_title_ar'],
            'seo_title_ar' => $validatedData['page_portfolios_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_portfolios_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.portfolio_updated_success')]);
    }

    public function updateBlog(Request $request)
    {
        $validatedData = $request->validate([
            'page_blog_title' => 'required',
            'page_blog_seo_title' => 'required',
            'page_blog_seo_meta_description' => 'required',
            'page_blog_title_ar' => 'required',
            'page_blog_seo_title_ar' => 'required',
            'page_blog_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageBlog = OtherPageBlog::latest()->first();
        $OtherPageBlog->update([
            'title' => $validatedData['page_blog_title'],
            'seo_title' => $validatedData['page_blog_seo_title'],
            'seo_descr' => $validatedData['page_blog_seo_meta_description'],
            'title_ar' => $validatedData['page_blog_title_ar'],
            'seo_title_ar' => $validatedData['page_blog_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_blog_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.blog_updated_success')]);
    }

    public function updateContact(Request $request)
    {
        $validatedData = $request->validate([
            'page_contact_title' => 'required',
            'page_contact_send_mail_heading' => 'required',
            'page_contact_send_mail_subheading' => 'required',
            'page_contact_info_heading' => 'required',
            'page_contact_info_subheading' => 'required',
            'page_contact_info_text' => 'required',
            'page_contact_info_phone_title' => 'required',
            'page_contact_title_ar' => 'required',
            'page_contact_send_mail_heading_ar' => 'required',
            'page_contact_send_mail_subheading_ar' => 'required',
            'page_contact_info_heading_ar' => 'required',
            'page_contact_info_subheading_ar' => 'required',
            'page_contact_info_text_ar' => 'required',
            'page_contact_info_phone_title_ar' => 'required',
            'page_contact_info_phone_value' => 'required',
            'page_contact_info_email_title' => 'required',
            'page_contact_info_email_title_ar' => 'required',
            'page_contact_info_email_value' => 'required',
            'page_contact_info_address_title' => 'required',
            'page_contact_info_address_title_ar' => 'required',
            'page_contact_info_address_value' => 'required',
            'page_contact_info_address_value_ar' => 'required',
            'page_contact_seo_title' => 'required',
            'page_contact_seo_meta_description' => 'required',
            'page_contact_seo_title_ar' => 'required',
            'page_contact_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageContact = OtherPageContact::latest()->first();
        $OtherPageContact->update([
            'title' => $validatedData['page_contact_title'],
            'title_ar' => $validatedData['page_contact_title_ar'],
            'send_mail_heading' => $validatedData['page_contact_send_mail_heading'],
            'send_mail_heading_ar' => $validatedData['page_contact_send_mail_heading_ar'],
            'send_mail_subheading' => $validatedData['page_contact_send_mail_subheading'],
            'send_mail_subheading_ar' => $validatedData['page_contact_send_mail_subheading_ar'],
            'information_heading' => $validatedData['page_contact_info_heading'],
            'information_heading_ar' => $validatedData['page_contact_info_heading_ar'],
            'information_subheading' => $validatedData['page_contact_info_subheading'],
            'information_subheading_ar' => $validatedData['page_contact_info_subheading_ar'],
            'information_text' => $validatedData['page_contact_info_text'],
            'information_text_ar' => $validatedData['page_contact_info_text_ar'],
            'information_phone_title' => $validatedData['page_contact_info_phone_title'],
            'information_phone_title_ar' => $validatedData['page_contact_info_phone_title_ar'],
            'information_phone_value' => $validatedData['page_contact_info_phone_value'],
            'information_email_title' => $validatedData['page_contact_info_email_title'],
            'information_email_title_ar' => $validatedData['page_contact_info_email_title_ar'],
            'information_email_value' => $validatedData['page_contact_info_email_value'],
            'information_address_title' => $validatedData['page_contact_info_address_title'],
            'information_address_title_ar' => $validatedData['page_contact_info_address_title_ar'],
            'information_address_value' => $validatedData['page_contact_info_address_value'],
            'information_address_value_ar' => $validatedData['page_contact_info_address_value_ar'],
            'seo_title' => $validatedData['page_contact_seo_title'],
            'seo_title_ar' => $validatedData['page_contact_seo_title_ar'],
            'seo_descr' => $validatedData['page_contact_seo_meta_description'],
            'seo_descr_ar' => $validatedData['page_contact_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.contact_updated_success')]);

    }

    public function updateTerm(Request $request)
    {
        $validatedData = $request->validate([
            'page_terms_title' => 'required',
            'page_terms_content' => 'required',
            'page_terms_seo_title' => 'required',
            'page_terms_seo_meta_description' => 'required',
            'page_terms_title_ar' => 'required',
            'page_terms_content_ar' => 'required',
            'page_terms_seo_title_ar' => 'required',
            'page_terms_seo_meta_description_ar' => 'required',

        ]);

        $OtherPageTerm = OtherPageTerm::latest()->first();
        $OtherPageTerm->update([
            'title' => $validatedData['page_terms_title'],
            'content' => $validatedData['page_terms_content'],
            'seo_title' => $validatedData['page_terms_seo_title'],
            'seo_descr' => $validatedData['page_terms_seo_meta_description'],
            'title_ar' => $validatedData['page_terms_title_ar'],
            'content_ar' => $validatedData['page_terms_content_ar'],
            'seo_title_ar' => $validatedData['page_terms_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_terms_seo_meta_description_ar'],

        ]);
        return response()->json(['success' => trans('web_trans.term_updated_success')]);
    }

    public function updatePrivacy(Request $request)
    {
        $validatedData = $request->validate([
            'page_privacy_title' => 'required',
            'page_privacy_content' => 'required',
            'page_privacy_seo_title' => 'required',
            'page_privacy_seo_meta_description' => 'required',
            'page_privacy_title_ar' => 'required',
            'page_privacy_content_ar' => 'required',
            'page_privacy_seo_title_ar' => 'required',
            'page_privacy_seo_meta_description_ar' => 'required',
        ]);

        $OtherPagePrivacy = OtherPagePrivacy::latest()->first();
        $OtherPagePrivacy->update([
            'title' => $validatedData['page_privacy_title'],
            'content' => $validatedData['page_privacy_content'],
            'seo_title' => $validatedData['page_privacy_seo_title'],
            'seo_descr' => $validatedData['page_privacy_seo_meta_description'],
            'title_ar' => $validatedData['page_privacy_title_ar'],
            'content_ar' => $validatedData['page_privacy_content_ar'],
            'seo_title_ar' => $validatedData['page_privacy_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_privacy_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.privacy_updated_success')]);
    }

    public function updateSearch(Request $request)
    {
        $validatedData = $request->validate([
            'page_search_seo_title' => 'required',
            'page_search_seo_meta_description' => 'required',
            'page_search_seo_title_ar' => 'required',
            'page_search_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageSearch = OtherPageSearch::latest()->first();
        $OtherPageSearch->update([
            'seo_title' => $validatedData['page_search_seo_title'],
            'seo_descr' => $validatedData['page_search_seo_meta_description'],
            'seo_title_ar' => $validatedData['page_search_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_search_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.search_updated_success')]);
    }

    public function updateTag(Request $request)
    {
        $validatedData = $request->validate([
            'page_tag_seo_title' => 'required',
            'page_tag_seo_meta_description' => 'required',
            'page_tag_seo_title_ar' => 'required',
            'page_tag_seo_meta_description_ar' => 'required',
        ]);

        $OtherPageTag = OtherPageTag::latest()->first();
        $OtherPageTag->update([
            'seo_title' => $validatedData['page_tag_seo_title'],
            'seo_descr' => $validatedData['page_tag_seo_meta_description'],
            'seo_title_ar' => $validatedData['page_tag_seo_title_ar'],
            'seo_descr_ar' => $validatedData['page_tag_seo_meta_description_ar'],
        ]);
        return response()->json(['success' => trans('web_trans.tag_updated_success')]);

    }

    public function storeCustom(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'name_ar' => 'required',
            'slug_ar' => 'required',
            'content_ar' => 'required',
        ]);
        OtherPageCustomPage::create([
            'name' => $validatedData['name'],
            'slug' => $validatedData['slug'],
            'content' => $validatedData['content'],
            'seo_title' => $request->seo_title,
            'seo_descr' => $request->seo_meta_description,
            'name_ar' => $validatedData['name_ar'],
            'slug_ar' => $validatedData['slug_ar'],
            'content_ar' => $validatedData['content_ar'],
            'seo_title_ar' => $request->seo_title_ar,
            'seo_descr_ar' => $request->seo_meta_description_ar,
        ]);
        return redirect()->route('dash.other.page.index')->with('success', trans('web_trans.custom_create_success'));
    }

    public function updateCustom(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'content_update' => 'required',
            'name_ar' => 'required',
            'slug_ar' => 'required',
            'content_update_ar' => 'required',
            'update_id' => 'required',
        ]);
        $customPage = OtherPageCustomPage::find($validatedData['update_id']);

        $customPage->name = $validatedData['name'];
        $customPage->slug = $validatedData['slug'];
        $customPage->content = $validatedData['content_update'];
        $customPage->seo_title = $request->seo_title;
        $customPage->seo_descr = $request->seo_meta_description;
        $customPage->name_ar = $validatedData['name_ar'];
        $customPage->slug_ar = $validatedData['slug_ar'];
        $customPage->content_ar = $validatedData['content_update_ar'];
        $customPage->seo_title_ar = $request->seo_title_ar;
        $customPage->seo_descr_ar = $request->seo_meta_description_ar;
        $customPage->save();
        return redirect()->route('dash.other.page.index')->with('success', trans('web_trans.custom_updated_success'));
    }
    public function deleteCustom(Request $request, $id)
    {
        $OtherPageCustomPage = OtherPageCustomPage::find($id);
        $OtherPageCustomPage->delete();
        return redirect()->route('dash.other.page.index')->with('success', trans('web_trans.custom_deleted_success'));
    }

    public function siteTerm()
    {
        $Term = OtherPageTerm::latest()->first();
        return view('home.term', compact('Term'));
    }

    public function sitePrivacy()
    {
        $Privacy = OtherPagePrivacy::latest()->first();
        return view('home.privacy', compact('Privacy'));
    }

    public function siteAbout()
    {
        $About = About::latest()->first();
        $WelcomeOne = WelcomeOne::latest()->first();
        $WelcomeOneElements = WelcomeOneElement::where('welcome_one_id', $WelcomeOne->id)->get();
        $Services = Service::latest()->take($About->how_many_service)->get();
        $Teams = Team::latest()->take($About->how_many_team_member)->get();
        return view('home.about', compact('About', 'WelcomeOne', 'WelcomeOneElements', 'Services', 'Teams'));
    }


    public function siteCustomPage(Request $request, $slug)
    {
        $CustomPage = OtherPageCustomPage::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->first();
        return view('home.customPage', compact('CustomPage'));

    }

}
