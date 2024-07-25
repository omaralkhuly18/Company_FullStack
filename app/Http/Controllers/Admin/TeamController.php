<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPageTeamMember;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TeamExperience;

class TeamController extends Controller
{
    public function index()
    {
        $Teams = Team::all();
        return view('admins.team_members.index',compact('Teams'));
    }

    public function create()
    {
        return view('admins.team_members.create_team');
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
            'designation.required' => trans('web_trans.designation_required'),
            'designation_ar.required' => trans('web_trans.designation_ar_required'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'designation' => 'required',
            'designation_ar' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],$customMessages);

        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/teams'), $photoPath);
        }

        $Team = new Team();
        $Team->name = $validatedData['name'];
        $Team->name_ar = $validatedData['name_ar'];
        $Team->slug = $validatedData['slug'];
        $Team->slug_ar = $validatedData['slug_ar'];
        $Team->designation = $validatedData['designation'];
        $Team->designation_ar = $validatedData['designation_ar'];
        $Team->tagline = $request->input('tagline');
        $Team->tagline_ar = $request->input('tagline_ar');
        $Team->email = $request->input('email');
        $Team->phone = $request->input('phone');
        $Team->website = $request->input('website');
        $Team->facebook = $request->input('facebook');
        $Team->twitter = $request->input('twitter');
        $Team->instagram = $request->input('instagram');
        $Team->linkedin = $request->input('linkedin');
        $Team->youtube = $request->input('youtube');
        $Team->pintrest = $request->input('pintrest');
        $Team->experience_text = $request->input('experience_text');
        $Team->experience_text_ar = $request->input('experience_text_ar');
        $Team->seo_title = $request->input('seo_title');
        $Team->seo_title_ar = $request->input('seo_title_ar');
        $Team->seo_descr = $request->input('seo_meta_description');
        $Team->seo_descr_ar = $request->input('seo_meta_description_ar');
        $Team->photo = $photoPath;     
        $Team->save();
        return redirect()->route('dash.team.index')->with('success', trans('web_trans.team_created_success'));
    }

    public function show($id)
    {
        $Team = Team::where('id',$id)->first();
        return view('admins.team_members.update_team',compact('Team'));
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
            'designation.required' => trans('web_trans.designation_required'),
            'designation_ar.required' => trans('web_trans.designation_ar_required'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'designation' => 'required',
            'designation_ar' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id'=>'required',
        ],$customMessages);

        $Team = Team::find($validatedData['id']);

        if (!$Team) {
            return redirect()->route('dash.team_members.index')->with('error', 'Team Member not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/teams/' . $Team->photo))) {
                unlink(public_path('assets/uploads/teams/' . $Team->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/teams'), $photoPath);
            $Team->photo = $photoPath;
        }

        $Team->name = $validatedData['name'];
        $Team->name_ar = $validatedData['name_ar'];
        $Team->slug = $validatedData['slug'];
        $Team->slug_ar = $validatedData['slug_ar'];
        $Team->designation = $validatedData['designation'];
        $Team->designation_ar = $validatedData['designation_ar'];
        $Team->tagline = $request->input('tagline');
        $Team->tagline_ar = $request->input('tagline_ar');
        $Team->email = $request->input('email');
        $Team->phone = $request->input('phone');
        $Team->website = $request->input('website');
        $Team->facebook = $request->input('facebook');
        $Team->twitter = $request->input('twitter');
        $Team->instagram = $request->input('instagram');
        $Team->linkedin = $request->input('linkedin');
        $Team->youtube = $request->input('youtube');
        $Team->pintrest = $request->input('pintrest');
        $Team->experience_text = $request->input('experience_text');
        $Team->experience_text_ar = $request->input('experience_text_ar');
        $Team->seo_title = $request->input('seo_title');
        $Team->seo_title_ar = $request->input('seo_title_ar');
        $Team->seo_descr = $request->input('seo_meta_description');
        $Team->seo_descr_ar = $request->input('seo_meta_description_ar');
        $Team->save();

        return redirect()->route('dash.team.index')->with('success', trans('web_trans.team_updated_success'));
    }

    public function destroy(Request $request,$id)
    {
        $Team = Team::find($id);
        if (file_exists(public_path('assets/uploads/teams/' . $Team->photo))) {
            unlink(public_path('assets/uploads/teams/' . $Team->photo));
        }
        $Team->delete();
        return redirect()->route('dash.team.index')->with('success', trans('web_trans.team_deleted_success'));
        
    }

    
    public function createExperience($id)
    {
        $TeamExpreiences = TeamExperience::where('member_id',$id)->get();
        return view('admins.team_members.createExperience',compact('id','TeamExpreiences'));
    }

    public function storeExperience(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
            'percentage.numeric' => trans('web_trans.perecentage_numeric'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'percentage' => 'numeric|between:0,100',
            'add_id' => 'required',
        ],$customMessages);
        $TeamExpreience= new TeamExperience();
        $TeamExpreience->name = $validatedData['name'];
        $TeamExpreience->name_ar= $validatedData['name_ar'];
        $TeamExpreience->percentage = $validatedData['percentage'];
        $TeamExpreience->member_id = $validatedData['add_id'];
        $TeamExpreience->save();
        return redirect()->back()->with('success', trans('web_trans.team_eperience_created_success'));
    }

    public function updateExperience(Request $request)
    {
        $customMessages = [
            'name.required' => trans('web_trans.name_required'),
            'name_ar.required' => trans('web_trans.name_ar_required'),
            'name.max' => trans('web_trans.name_max'),
            'name_ar.max' => trans('web_trans.name_ar_max'),
            'percentage.numeric' => trans('web_trans.perecentage_numeric'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'percentage' => 'numeric|between:0,100',
            'id'=>'required',
        ],$customMessages);
        $TeamExpreience = TeamExperience::where('id',$validatedData['id'])->first();
        $TeamExpreience->name= $validatedData['name'];
        $TeamExpreience->name_ar= $validatedData['name_ar'];
        $TeamExpreience->percentage= $validatedData['percentage'];
        $TeamExpreience->save();
        return redirect()->back()->with('success', trans('web_trans.team_eperience_updated_success'));
    }
    
    public function destroyExperience(Request $request,$id)
    {
        $TeamExpreience = TeamExperience::where('id',$id)->first();
        $TeamExpreience->delete();
        return redirect()->back()->with('success', trans('web_trans.team_eperience_deleted_success'));
    }

    public function siteTeamMember()
    {
        $TeamHeader= OtherPageTeamMember::latest()->first();
        $TeamMembers=Team::all();
        return view('home.teamMember',compact('TeamHeader','TeamMembers'));

    }
    public function siteCustomTeamMember(Request $request, $slug)
    {
        $TeamHeader =OtherPageTeamMember::latest()->first();
        $Team = Team::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->first();
        $TeamExperiences = TeamExperience::where('member_id',$Team->id)->get();
        return view('home.customTeamMember', compact('Team','TeamHeader','TeamExperiences'));
    }
}
