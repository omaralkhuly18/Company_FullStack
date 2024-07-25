<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberEmail;

class SubscriberController extends Controller
{
    public function index()
    {
        $Subscribers = Subscriber::all();
        return view("admins.subscribers.index", compact("Subscribers"));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email'=>'required',
        ]);
        $Subscriber = new Subscriber();
        $Subscriber->email=$validatedData['email'];
        $Subscriber->save();
        return response()->json(['success' => trans('web_trans.subscriber_done')]);
    }

    public function destroy(Request $request, $id)
    {
        $Subscriber = Subscriber::where('id', $id)->first();
        $Subscriber->delete();
        return redirect()->route('dash.subscriber.index')->with('success', trans('web_trans.subscriber_deleted_success'));
    }

    public function showEmailToSubscribers()
    {
        return view('admins.subscribers.send_to_subscriber');
    }

    public function sendEmailToSubscribers(Request $request)
    {
        $subject = $request->input('subject');
        $content = $request->input('content');
        $subscribers = Subscriber::all();
        
        if ($subscribers->isNotEmpty()){
        foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new SubscriberEmail($subject, $content));
            }
            return redirect()->route('dash.show.email.subscriber')->with('success', trans('web_trans.email_sent_success'));
        } else {
            return redirect()->route('dash.show.email.subscriber')->with('error', trans('web_trans.no_subscriber'));
        }
    }
}
