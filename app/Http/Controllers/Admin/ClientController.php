<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admins.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admins.clients.create_client');
    }

    public function store(Request $request)
    {
        $customMessages = [
            'url.required' => trans('web_trans.url_required'),
            'url.max' => trans('web_trans.url_max'),
            'photo.required' => trans('web_trans.photo_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
        ];
        $validatedData = $request->validate([
            'url' => 'required|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $customMessages);

        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoName = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $photoPath = public_path('assets/uploads/clients/' . $photoName);

            // تحقق من عدم وجود الملف
            if (file_exists($photoPath)) {
                return redirect()->back()->with('error', trans('web_trans.photo_exists'));
            }

            // رفع الملف
            $uploadedPhoto->move(public_path('assets/uploads/clients'), $photoName);

            $client = new Client();
            $client->url = $validatedData['url'];
            $client->photo = 'assets/uploads/clients/' . $photoName;
            $client->save();

            return redirect()->route('dash.client.index')->with('success', trans('web_trans.client_created_success'));
        }
        return redirect()->back()->with('error', trans('web_trans.upload_error'));
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('admins.clients.update_client', compact('client'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'url.required' => trans('web_trans.client_url_required'),
            'url.max' => trans('web_trans.client_url_max'),
            'photo.image' => trans('web_trans.client_photo_image'),
            'photo.mimes' => trans('web_trans.client_photo_mimes'),
            'photo.max' => trans('web_trans.client_photo_max'),
        ];
        $validatedData = $request->validate([
            'url' => 'required|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required|exists:clients,id',
        ], $customMessages);

        $client = Client::find($validatedData['id']);

        if ($request->hasFile('photo')) {
            // حذف الصورة القديمة
            if (file_exists(public_path($client->photo))) {
                unlink(public_path($client->photo));
            }

            // رفع الصورة الجديدة
            $uploadedPhoto = $request->file('photo');
            $photoName = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/clients'), $photoName);
            $client->photo = 'assets/uploads/clients/' . $photoName;
        }

        $client->url = $validatedData['url'];
        $client->save();

        return redirect()->route('dash.client.index')->with('success', trans('web_trans.client_updated_success'));
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return redirect()->route('dash.client.index')->with('error', trans('web_trans.client_not_found'));
        }

        if (file_exists(public_path($client->photo))) {
            unlink(public_path($client->photo));
        }
        $client->delete();
        return redirect()->route('dash.client.index')->with('success', trans('web_trans.client_deleted_success'));
    }
}

