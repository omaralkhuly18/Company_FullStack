<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\PostCategory;

class PostCategoryController extends Controller
{
    public function index()
    {
        $PostCategories = PostCategory::all();
        return view('admins.postCategory.index', compact('PostCategories'));
    }

    public function create()
    {
        return view('admins.postCategory.create_postCategory');
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
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
        ], $customMessages);
        $PostCategory = new PostCategory();
        $PostCategory->name = $validatedData['name'];
        $PostCategory->name_ar = $validatedData['name_ar'];
        $PostCategory->slug = $validatedData['slug'];
        $PostCategory->slug_ar = $validatedData['slug_ar'];
        $PostCategory->seo_title = $request->seo_title;
        $PostCategory->seo_title_ar = $request->seo_title_ar;
        $PostCategory->seo_descr = $request->seo_meta_description;
        $PostCategory->seo_descr_ar = $request->seo_meta_description_ar;
        $PostCategory->save();
        return redirect()->route('dash.category.index')->with('success', trans('web_trans.category_created_success'));

    }

    public function show($id)
    {
        $PostCategory = PostCategory::where('id', $id)->first();

        return view('admins.postCategory.update_postCategory', compact('PostCategory'));
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
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'id' => 'required',
        ],$customMessages);
        $PostCategory = PostCategory::find($validatedData['id']);
        if (!$PostCategory) {
            return redirect()->route('dash.category.index')->with('error', 'Category not found');
        }
        $PostCategory->name = $validatedData['name'];
        $PostCategory->name_ar = $validatedData['name_ar'];
        $PostCategory->slug = $validatedData['slug'];
        $PostCategory->slug_ar = $validatedData['slug_ar'];
        $PostCategory->seo_title = $request->seo_title;
        $PostCategory->seo_title_ar = $request->seo_title_ar;
        $PostCategory->seo_descr = $request->seo_meta_description;
        $PostCategory->seo_descr_ar = $request->seo_meta_description_ar;
        $PostCategory->save();
        return redirect()->route('dash.category.index')->with('success', trans('web_trans.category_updated_success'));
    }

    public function destroy(Request $request, $id)
    {
        $PostCategory = PostCategory::find($id);

        $PostCategory->delete();
        return redirect()->route('dash.category.index')->with('success', trans('web_trans.category_deleted_success'));
    }

    public function siteCustomCategory(Request $request, $slug)
    {
        $PostCategory = PostCategory::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->with('posts')
            ->first();
        return view('home.customCategory', compact('PostCategory'));
    }
}
