<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OtherPageBlog;
use App\Models\OtherPageSearch;
use App\Models\OtherPageTag;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $Posts = Post::with('postCategory')->get();
        return view('admins.posts.index', compact('Posts'));
    }

    public function create()
    {
        $Categories = PostCategory::all();
        return view('admins.posts.create_post', compact('Categories'));
    }

    public function store(Request $request)
    {
        $customMessages = [
            'title.required' => trans('web_trans.title_required'),
            'title_ar.required' => trans('web_trans.title_ar_required'),
            'title.max' => trans('web_trans.title_max'),
            'title_ar.max' => trans('web_trans.title_ar_max'),
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
        ];
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'title_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'description' => 'required',
            'description_ar' => 'required',
            'post_category_id' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $customMessages);

        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/posts'), $photoPath);
        }

        $Post = new Post();
        $Post->title = $validatedData['title'];
        $Post->title_ar = $validatedData['title_ar'];
        $Post->slug = $validatedData['slug'];
        $Post->slug_ar = $validatedData['slug_ar'];
        $Post->descr = $validatedData['description'];
        $Post->descr_ar = $validatedData['description_ar'];
        $Post->category_id = $validatedData['post_category_id'];
        $Post->seo_title = $request->seo_title;
        $Post->seo_title_ar = $request->seo_title_ar;
        $Post->seo_descr = $request->seo_meta_description;
        $Post->seo_descr_ar = $request->seo_meta_description_ar;
        $Post->photo = $photoPath;
        $Post->save();

        $newlyCreatedPostId = $Post->id;

        $selectedTags = $request->input('tags');

        if (!empty($selectedTags)) {
            foreach ($selectedTags as $tagName) {
                // Insert the tag name into the post_tags table
                DB::table('post_tags')->insert([
                    'post_id' => $newlyCreatedPostId,
                    'name' => $tagName,
                ]);
            }
        }
        return redirect()->route('dash.post.index')->with('success', trans('web_trans.post_created_success'));

    }

    public function show($id)
    {
        $Post = Post::with('postCategory')->find($id);
        $Categories = PostCategory::all();
        $Tags = PostTag::where('post_id', $id)->get();

        return view('admins.posts.update_post', compact('Post', 'Tags', 'Categories'));
    }

    public function update(Request $request)
    {
        $customMessages = [
            'title.required' => trans('web_trans.title_required'),
            'title_ar.required' => trans('web_trans.title_ar_required'),
            'title.max' => trans('web_trans.title_max'),
            'title_ar.max' => trans('web_trans.title_ar_max'),
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
        ];
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'title_ar' => 'required|max:255',
            'slug' => 'required|max:255',
            'slug_ar' => 'required|max:255',
            'description' => 'required',
            'description_ar' => 'required',
            'post_category_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required',
        ], $customMessages);

        $Post = Post::find($validatedData['id']);

        if (!$Post) {
            return redirect()->route('dash.post.index')->with('error', 'Post not found');
        }

        if ($request->hasFile('photo')) {
            // Delete the old photo
            if (file_exists(public_path('assets/uploads/posts/' . $Post->photo))) {
                unlink(public_path('assets/uploads/posts/' . $Post->photo));
            }

            // Upload and save the new photo
            $uploadedPhoto = $request->file('photo');
            $photoPath = time() . '_' . $uploadedPhoto->getClientOriginalName();
            $uploadedPhoto->move(public_path('assets/uploads/posts'), $photoPath);
            $Post->photo = $photoPath;
        }

        $Post->title = $validatedData['title'];
        $Post->title_ar = $validatedData['title_ar'];
        $Post->slug = $validatedData['slug'];
        $Post->slug_ar = $validatedData['slug_ar'];
        $Post->descr = $validatedData['description'];
        $Post->descr_ar = $validatedData['description_ar'];
        $Post->category_id = $validatedData['post_category_id'];
        $Post->seo_title = $request->seo_title;
        $Post->seo_title_ar = $request->seo_title_ar;
        $Post->seo_descr = $request->seo_meta_description;
        $Post->seo_descr_ar = $request->seo_meta_description_ar;
        $Post->save();

        $PostId = $Post->id;

        $selectedTags = $request->input('tags');


        if (!empty($selectedTags)) {
            DB::table('post_tags')->where('post_id', $PostId)->delete();

            foreach ($selectedTags as $tagName) {
                DB::table('post_tags')->insert([
                    'post_id' => $PostId,
                    'name' => $tagName,
                ]);
            }
        }

        return redirect()->route('dash.post.index')->with('success', trans('web_trans.post_created_success'));
    }


    public function destroy(Request $request, $id)
    {
        $Tags = PostTag::where('post_id', $id)->get();
        foreach ($Tags as $Tag) {
            $Tag->delete();
        }

        $Post = Post::find($id);
        if (file_exists(public_path('assets/uploads/posts/' . $Post->photo))) {
            unlink(public_path('assets/uploads/posts/' . $Post->photo));
        }

        $Post->delete();
        return redirect()->route('dash.post.index')->with('success', trans('web_trans.post_created_success'));
    }

    public function siteBlog()
    {
        $BlogHeading = OtherPageBlog::latest()->first();
        $Blogs = Post::all();

        return view('home.blog', compact('BlogHeading', 'Blogs'));
    }
    public function siteCustomBlog(Request $request, $slug)
    {
        $Blog = Post::where('slug', $slug)
            ->orWhere('slug_ar', $slug)
            ->with('tags')
            ->first();
        $LatestPosts = Post::latest()->take(3)->get();
        $Caregories = PostCategory::all();
        $Tags = PostTag::distinct()->pluck('name');
        return view('home.customBlog', compact('Blog', 'LatestPosts', 'Caregories', 'Tags'));
    }

    public function siteCustomTag($tagName)
    {
        $Tag = PostTag::where('name', $tagName)->first();
        $TagHeader = OtherPageTag::latest()->first();

        if ($Tag) {
            $Posts = $Tag->post()->get();

            return view('home.customTag', compact('Posts','Tag','TagHeader'));
        } else {
            abort(404);
        }
    }

    public function siteCustomSearch(Request $request)
    {
        $searchText = $request->input('search_text');
        $SearchHeader = OtherPageSearch::latest()->first();
        $Posts = Post::where('descr', 'like', "%{$searchText}%")
        ->orWhere('descr_ar', 'like', "%{$searchText}%")
        ->get();
        return view('home.customSearch', compact('Posts','SearchHeader'));

    }
}
