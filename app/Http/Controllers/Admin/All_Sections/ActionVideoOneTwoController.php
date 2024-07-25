<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CallToAction;
use App\Models\VideoOne;
use App\Models\VideoTwo;

class ActionVideoOneTwoController extends Controller
{
    public function indexAction(Request $request)
    {
        $CallToAction = CallToAction::latest()->first();
        return view('admins.all_sections.call_to_action', compact('CallToAction'));
    }

    public function updateAction(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required',
            'text_ar' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'icon'=>'required',
        ]);
        $CallToAction = CallToAction::latest()->first();
        $CallToAction->text = $validatedData['text'];
        $CallToAction->text_ar = $validatedData['text_ar'];
        $CallToAction->phone = $validatedData['phone'];
        $CallToAction->email = $validatedData['email'];
        $CallToAction->icon = $validatedData['icon'];
        $CallToAction->save();

        return redirect()->route('dash.action.index')->with('success', trans('web_trans.call_to_action_update_success'));

    }

    public function indexVidoOne(Request $request)
    {
        $VideoOne = VideoOne::latest()->first();
        return view('admins.all_sections.video_one', compact('VideoOne'));
    }

    public function updateVidoOne(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'youtube_video_id' => 'required',

        ]);
        $VideoOne = VideoOne::latest()->first();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/All_Sections/video_one/'), $photoPath);
            $VideoOne->photo = $photoPath;
        }
        $VideoOne->heading = $validatedData['heading'];
        $VideoOne->heading_ar = $validatedData['heading_ar'];
        $VideoOne->youtube_video_id = $validatedData['youtube_video_id'];
      
        $VideoOne->save();

        return redirect()->route('dash.video.one.index')->with('success', trans('web_trans.video_one_updated_success'));

    }

    public function indexVidoTwo(Request $request)
    {
        $VideoTwo = VideoTwo::latest()->first();
        return view('admins.all_sections.video_two', compact('VideoTwo'));
    }

    public function updateVidoTwo(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'heading_ar' => 'required',
            'youtube_video_id' => 'required',

        ]);
        $VideoTwo = VideoTwo::latest()->first();
        $VideoTwo->heading = $validatedData['heading'];
        $VideoTwo->heading_ar = $validatedData['heading_ar'];
        $VideoTwo->youtube_video_id = $validatedData['youtube_video_id'];
      
        $VideoTwo->save();

        return redirect()->route('dash.video.two.index')->with('success', trans('web_trans.video_two_updated_success'));

    }
}
