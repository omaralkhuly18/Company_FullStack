<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPageFAQ;
use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    public function index()
    {
        $FAQs = FAQ::all();
        return view('admins.FAQs.index',compact('FAQs'));
    }

    public function create()
    {
        return view('admins.FAQs.create_FAQ');
    }

    public function store(Request $request)
    {
        $customMessages = [
            'question.required' => trans('web_trans.question_required'),
            'question_ar.required' => trans('web_trans.question_ar_required'),
            'question.max' => trans('web_trans.question_max'),
            'question_ar.max' => trans('web_trans.name_ar_max'),
            'answer.required' => trans('web_trans.name_required'),
            'answer_ar.required' => trans('web_trans.name_ar_required'),
        ];
        $validatedData = $request->validate([
            'question' => 'required|max:255',
            'question_ar' => 'required|max:255',            
            'answer' => 'required',
            'answer_ar' => 'required',
        ],$customMessages);
        $FAQ = new FAQ();
        $FAQ->question=$validatedData['question'];
        $FAQ->question_ar=$validatedData['question_ar'];
        $FAQ->answer=$validatedData['answer'];
        $FAQ->answer_ar=$validatedData['answer_ar'];
        $FAQ->save();
        return redirect()->route('dash.FAQ.index')->with('success', trans('web_trans.faqs_created_success'));
    }

    public function show($id)
    {
        $FAQ = FAQ::where('id',$id)->first();
        return view('admins.FAQs.update_FAQ',compact('FAQ'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'question.required' => trans('web_trans.question_required'),
            'question_ar.required' => trans('web_trans.question_ar_required'),
            'question.max' => trans('web_trans.question_max'),
            'question_ar.max' => trans('web_trans.name_ar_max'),
            'answer.required' => trans('web_trans.name_required'),
            'answer_ar.required' => trans('web_trans.name_ar_required'),
        ];
        $validatedData = $request->validate([
            'question' => 'required|max:255',
            'question_ar' => 'required|max:255',            
            'answer' => 'required',
            'answer_ar' => 'required',
            'id'=>'required',
        ],$customMessages);

        $FAQ = FAQ::find($validatedData['id']);

        if (!$FAQ) {
            return redirect()->route('dash.FAQ.index')->with('error', 'Client not found');
        }


        $FAQ->question = $validatedData['question'];
        $FAQ->question_ar = $validatedData['question_ar'];
        $FAQ->answer = $validatedData['answer'];
        $FAQ->answer_ar = $validatedData['answer_ar'];
        $FAQ->save();

        return redirect()->route('dash.FAQ.index')->with('success',trans('web_trans.faqs_updated_success') );
    }

    public function destroy(Request $request,$id)
    {
        $FAQ = FAQ::find($id);
        
        $FAQ->delete();
        return redirect()->route('dash.FAQ.index')->with('success', 'FAQ deleted successfully');
    }

    public function siteFAQ()
    {
        $FaqHeader= OtherPageFAQ::latest()->first();
        $FAQs=FAQ::all();
        return view('home.FAQ',compact('FaqHeader','FAQs'));

    }
}
