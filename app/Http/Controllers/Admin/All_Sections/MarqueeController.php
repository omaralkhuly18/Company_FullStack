<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marquee;


class MarqueeController extends Controller
{
    public function index()
    {
        $Marquees = Marquee::all();
        return view('admins.all_sections.marquees.index', compact('Marquees'));
    }

    public function create()
    {
        return view('admins.all_sections.marquees.create_marquee');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item' => 'required',
            'item_ar' => 'required',
        ]);
        $marquee = Marquee::create($validatedData);
        return redirect()->route('dash.marquee.index')->with('success', trans('web_trans.marquee_create_success'));
    }

    public function show($id)
    {
        $Marquee = Marquee::where('id', $id)->first();
        return view('admins.all_sections.marquees.update_marquee', compact('Marquee'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'item' => 'required',
            'item_ar' => 'required',
            'id' => 'required',
        ]);
        $Marquee = Marquee::where('id', $validatedData['id'])->first();
        $Marquee->item = $validatedData['item'];
        $Marquee->item_ar = $validatedData['item_ar'];
        $Marquee->save();
        return redirect()->route('dash.marquee.index')->with('success', trans('web_trans.marquee_update_success'));
    }

    public function destroy(Request $request, $id)
    {
        $Marquee = Marquee::where('id', $id)->first();
        $Marquee->delete();
        return redirect()->route('dash.marquee.index')->with('success', trans('web_trans.marquee_delete_success'));
    }
}
