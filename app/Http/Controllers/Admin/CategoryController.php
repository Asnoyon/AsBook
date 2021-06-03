<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all('id', 'name');
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.createOrUpdate');
    }

    public function save(Category $category, Request $request)
    {
        $category['name'] = $request->name;
        $category['slug'] = Str::slug($request->name);
        $category->save();
    }

    public function storeOrUpdate($id =null ,Request $request)
    {
        if(isset($id)){
            $category = Category::find($id);
            $this->save($category, $request);
            return redirect('admin/category/index');
        }else{
            $category = new Category;
            $this->save($category, $request);
            return redirect('admin/category/index');
        }
    }


    public function edit($id)
    {
        $edit = Category::find($id);
        return view('admin.category.createOrUpdate', compact('edit'));
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect('admin/category/index');
    }
}
