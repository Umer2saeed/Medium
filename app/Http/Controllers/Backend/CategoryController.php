<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('backend.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|unique:categories|string|max:100',
            'slug' => 'required|unique:categories,slug',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->slug);
        $category->description = $request['description'];
        $category->status = $request->status;

        if ($request->hasFile('image'))
        {
            $image = $request->image;
            // Creating unique image name
            $ext = $image->getClientOriginalExtension();
            $imageName = $category->slug.'-'.time().'.'.$ext;
            $image->move(public_path('/images/categories/'),$imageName);

            // Create a small thumbnail
            $sourcePath = public_path('/images/categories/'.$imageName);
            $destinationPath = public_path('/images/categories/thumb/'.$imageName);
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($sourcePath);

            // Setting size
            $image->cover(150, 150);
            $image->toPng()->save($destinationPath);

            // Save image name to database field
            $category->image = $imageName;
        }
        $category->save();
        return to_route('categories.index')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        if (empty($category))
            return redirect()->route('categories.index')->with('error', 'Category not found!');
        return view('backend.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        if (empty($category))
            return redirect()->route('categories.index')->with('error', 'Category not found!');

        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:100|unique:categories,name,'.$id,
            'slug' => 'required|unique:categories,slug,'.$id,
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $category->name = $request->name;
        $category->slug = Str::slug($request->slug);
        $category->description = $request['description'];
        $category->status = $request->status;

        //code for image
        $imagePath = null;
        if ($request->hasFile('image')){
            // Delete old image
            File::delete(public_path('/images/categories/'.$category->image));
            File::delete(public_path('/images/categories/thumb/'.$category->image));

            $image = $request->file('image');
            // Creating unique image name
            $ext = $image->getClientOriginalExtension();
            $imageName = $category->slug.'-'.time().'.'.$ext;
            $image->move(public_path('/images/categories/'),$imageName);

            // Create a small thumbnail
            $sourcePath = public_path('/images/categories/'.$imageName);
            $destinationPath = public_path('/images/categories/thumb/'.$imageName);
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($sourcePath);

            // Setting size
            $image->cover(150, 150);
            $image->toPng()->save($destinationPath);

            // Save image name to database field
            $category->image = $imageName;
        }
        $category->save();

        return to_route('categories.index')->with('success', 'Category created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
