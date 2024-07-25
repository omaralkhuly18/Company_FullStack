<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $Products = Product::with('productCategory')->get();
        return view('admins.products.index', compact('Products'));
    }

    public function create()
    {
        $Categories = ProductCategory::all();
        return view('admins.products.create_product', compact('Categories'));
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
            'description.required' => trans('web_trans.description_required'),
            'description_ar.required' => trans('web_trans.description_ar_required'),
            'photo.required' => trans('web_trans.photo_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
            'price.required' => trans('web_trans.price_required'),
            'price.numeric' => trans('web_trans.price_numeric'),
            'amount.required' => trans('web_trans.amount_required'),
            'amount.numeric' => trans('web_trans.amount_numeric'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'description' => 'required',
            'description_ar' => 'required',
            'price'=>'required|numeric',
            'amount'=>'required|numeric',
            'discount'=>'numeric',
            'product_category_id' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],$customMessages);

        $Product = new Product();
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/products'), $photoPath);
            $Product->photo = $photoPath;
        }

        $Product->name = $validatedData['name'];
        $Product->name_ar = $validatedData['name_ar'];
        $Product->slug = $validatedData['slug'];
        $Product->slug_ar = $validatedData['slug_ar'];
        $Product->descr = $validatedData['description'];
        $Product->descr_ar = $validatedData['description_ar'];
        $Product->category_id = $validatedData['product_category_id'];
        $Product->seo_title = $request->seo_title;
        $Product->seo_title_ar = $request->seo_title_ar;
        $Product->seo_descr = $request->seo_meta_description;
        $Product->seo_descr_ar = $request->seo_meta_description_ar;
        $Product->price = $validatedData['price'];
        $Product->amount = $validatedData['amount'];
        $Product->discount = $validatedData['discount'];
        $Product->save();

        return redirect()->route('dash.product.index')->with('success', trans('web_trans.product_created_success'));

    }

    public function show($id)
    {
        $Product = Product::with('productCategory')->find($id);
        $Categories = ProductCategory::all();

        return view('admins.products.update_product', compact('Product','Categories'));
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
            'description.required' => trans('web_trans.description_required'),
            'description_ar.required' => trans('web_trans.description_ar_required'),
            'photo.image' => trans('web_trans.photo_image'),
            'photo.mimes' => trans('web_trans.photo_mimes'),
            'photo.max' => trans('web_trans.photo_max'),
            'price.required' => trans('web_trans.price_required'),
            'price.numeric' => trans('web_trans.price_numeric'),
            'amount.required' => trans('web_trans.amount_required'),
            'amount.numeric' => trans('web_trans.amount_numeric'),
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'description' => 'required',
            'description_ar' => 'required',
            'price'=>'required|numeric',
            'amount'=>'required|numeric',
            'discount'=>'numeric',
            'product_category_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required',
        ],$customMessages);

        $Product = Product::find($validatedData['id']);

        if (!$Product) {
            return redirect()->route('dash.product.index')->with('error', 'Post not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/products/' . $Product->photo))) {
                unlink(public_path('assets/uploads/products/' . $Product->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/products'), $photoPath);
            $Product->photo = $photoPath;
        }

        $Product->name = $validatedData['name'];
        $Product->name_ar = $validatedData['name_ar'];
        $Product->slug = $validatedData['slug'];
        $Product->slug_ar = $validatedData['slug_ar'];
        $Product->descr = $validatedData['description'];
        $Product->descr_ar = $validatedData['description_ar'];
        $Product->category_id = $validatedData['product_category_id'];
        $Product->seo_title = $request->seo_title;
        $Product->seo_title_ar = $request->seo_title_ar;
        $Product->seo_descr = $request->seo_meta_description;
        $Product->seo_descr_ar = $request->seo_meta_description_ar;
        $Product->price = $validatedData['price'];
        $Product->amount = $validatedData['amount'];
        $Product->discount = $validatedData['discount'];
        $Product->save();

        return redirect()->route('dash.product.index')->with('success', trans('web_trans.product_updated_success'));
    }


    public function destroy(Request $request, $id)
    {
        
        $Product = Product::find($id);
        if (file_exists(public_path('assets/uploads/products/' . $Product->photo))) {
            unlink(public_path('assets/uploads/products/' . $Product->photo));
        }
        $Product->delete();
        return redirect()->route('dash.product.index')->with('success', trans('web_trans.product_deleted_success'));
    }

    public function siteProduct()
    {
        $Products = Product::orderBy('id', 'desc')->paginate(6);
        return view('home.product', compact('Products'));
    }

    public function siteCustomProduct(Request $request, $slug)
    {
        $Product = Product::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->first();
        $Caregories = ProductCategory::all();
        return view('home.customProduct', compact('Product', 'Caregories'));
    }
}
