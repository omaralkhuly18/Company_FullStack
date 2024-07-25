<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $ProductCategories = ProductCategory::all();
        return view('admins.ProductCategory.index', compact('ProductCategories'));
    }

    public function create()
    {
        return view('admins.ProductCategory.create_productCategory');
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
        $ProductCategory = new ProductCategory();
        $ProductCategory->name = $validatedData['name'];
        $ProductCategory->name_ar = $validatedData['name_ar'];
        $ProductCategory->slug = $validatedData['slug'];
        $ProductCategory->slug_ar = $validatedData['slug_ar'];
        $ProductCategory->seo_title = $request->seo_title;
        $ProductCategory->seo_title_ar = $request->seo_title_ar;
        $ProductCategory->seo_descr = $request->seo_meta_description;
        $ProductCategory->seo_descr_ar = $request->seo_meta_description_ar;
        $ProductCategory->save();
        return redirect()->route('dash.product.category.index')->with('success', trans('web_trans.category_created_success'));

    }

    public function show($id)
    {
        $ProductCategory = ProductCategory::where('id', $id)->first();

        return view('admins.ProductCategory.update_productCategory', compact('ProductCategory'));
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
        $ProductCategory = ProductCategory::find($validatedData['id']);
        if (!$ProductCategory) {
            return redirect()->route('dash.product.category.index')->with('error', 'Category not found');
        }
        $ProductCategory->name = $validatedData['name'];
        $ProductCategory->name_ar = $validatedData['name_ar'];
        $ProductCategory->slug = $validatedData['slug'];
        $ProductCategory->slug_ar = $validatedData['slug_ar'];
        $ProductCategory->seo_title = $request->seo_title;
        $ProductCategory->seo_title_ar = $request->seo_title_ar;
        $ProductCategory->seo_descr = $request->seo_meta_description;
        $ProductCategory->seo_descr_ar = $request->seo_meta_description_ar;
        $ProductCategory->save();
        return redirect()->route('dash.product.category.index')->with('success', trans('web_trans.category_updated_success'));
    }

    public function destroy(Request $request, $id)
    {
        $ProductCategory = ProductCategory::find($id);

        $ProductCategory->delete();
        return redirect()->route('dash.product.category.index')->with('success', trans('web_trans.category_deleted_success'));
    }

    public function siteCustomProductCategory(Request $request, $slug)
    {
        $ProductCategory = ProductCategory::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->with('products')
            ->first();
        return view('home.customProductCategory', compact('ProductCategory'));
    }
}


