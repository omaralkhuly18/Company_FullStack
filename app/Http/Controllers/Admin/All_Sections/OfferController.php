<?php

namespace App\Http\Controllers\Admin\All_Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\OfferElement;

class OfferController extends Controller
{
    public function index()
    {
        $Offer = Offer::first();
        $OfferElements = OfferElement::all();
        return view('admins.all_sections.offer', compact('Offer', 'OfferElements'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'subheading' => 'required',
            'text' => 'required',
            'heading_ar' => 'required',
            'subheading_ar' => 'required',
            'text_ar' => 'required',
            'icon' => 'required',
            'tagline' => 'required',
            'tagline_ar' => 'required',
            'youtube_video_id' => 'required',
        ]);
        $Offer = Offer::latest()->first();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/All_Sections/offers/'), $photoPath);
            $Offer->photo = $photoPath;
        }
        $Offer->heading = $validatedData['heading'];
        $Offer->sub_heading = $validatedData['subheading'];
        $Offer->text = $validatedData['text'];
        $Offer->heading_ar = $validatedData['heading_ar'];
        $Offer->sub_heading_ar = $validatedData['subheading_ar'];
        $Offer->text_ar = $validatedData['text_ar'];
        $Offer->icon = $validatedData['icon'];
        $Offer->tagline = $validatedData['tagline'];
        $Offer->tagline_ar = $validatedData['tagline_ar'];
        $Offer->youtube_video_id = $validatedData['youtube_video_id'];
        $Offer->save();

        return redirect()->route('dash.offer.index')->with('success', trans('web_trans.offer_update_success'));

    }

    public function storeElement(Request $request)
    {
        $validatedData = $request->validate([
            'item' => 'required',
            'item_ar' => 'required',
            'offer_id' => 'required',
        ]);
        $OfferElement = new OfferElement();
        $OfferElement->item = $validatedData['item'];
        $OfferElement->item_ar = $validatedData['item_ar'];
        $OfferElement->offer_id = $validatedData['offer_id'];
       
        $OfferElement->save();

        return redirect()->route('dash.offer.index')->with('success', trans('web_trans.offer_elemenet_create_success'));
    }

    public function updateElement(Request $request)
    {
        $validatedData = $request->validate([
            'item' => 'required',
            'item_ar' => 'required',
            'id' => 'required',
        ]);
        $OfferElement = OfferElement::where('id', $validatedData['id'])->first();
        $OfferElement->item = $validatedData['item'];
        $OfferElement->item_ar = $validatedData['item_ar'];
        $OfferElement->save();

        return redirect()->route('dash.offer.index')->with('success', trans('web_trans.offer_elemenet_update_success'));

    }
    public function destroyElement(Request $request, $id)
    {
        $OfferElement = OfferElement::where('id', $id)->first();
        $OfferElement->delete();
        return redirect()->route('dash.offer.index')->with('success', trans('web_trans.offer_elemenet_delete_success'));
    }
}
