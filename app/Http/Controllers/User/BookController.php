
<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all(['title', 'id', 'image', 'location_id']);
        return view('user.book.books', compact('books'));
    }

    public function detail($id)
    {
        $book = Book::find($id);
        $books = Book::where('category_id', $book->category_id)->where('status',1)->get();
        return view('user.book.book', compact('book', 'books'));
    }

    public function create()
    {
        return view('user.book.create');
    }

    public function save(Book $book, Request $request)
    {
        $book['ISBN'] = $request->ISBN;
        $book['category_id'] = $request->category_id;
        $book['location_id'] = $request->location_id;
        $book['user_id'] = Auth::id();
        $book['role_id'] = Auth::user()->role_id;
        $book['title'] = $request->title;
        $book['author'] = $request->author;
        $book['description'] = $request->description;
        $book['price'] = $request->price;

        if($request->image){

            $image=$request->file('image');
            if ($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                $book['image']=$image_url;

                 }
             }
        }else{
            $book['image'] = $book->image;
        }

        $book->save();
    }

    public function store(Request $request)
    {

            $book = new Book;
            $this->save($book, $request);
            return redirect('user/book/index');

    }


    public function index()
    {
        $books = Book::where('user_id', Auth::id())->get();
        return view('user.book.index', compact('books'));
    }


}
