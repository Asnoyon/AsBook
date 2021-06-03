<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $books = Book::where('category_id', $id)->where('status',1)->get();
        $b = Category::where('id', $id)->first();
        $category_name = $b->name;
        return view('user.category',compact('books', 'category_name'));
    }
}
