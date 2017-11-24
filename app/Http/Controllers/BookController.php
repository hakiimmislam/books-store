<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;
use Auth;

use App\BookImage;
use App\Book;

class BookController extends Controller
{
	public function index()
    {
    	$user = Auth::user();

        return view('books.index', ['user' => $user]);
    }

    public function create()
    {
    	return view('books.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|integer'
        ]);

        $user = Auth::user();
        $filename = str_random(4);

        $book = new Book;
        $book->user_id = $user->id;
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();

        $image = new BookImage;
		$img = Image::make($request->file('image')->getRealPath());
        $img = $img->encode('jpg', 50);
        Storage::disk('public')->put($filename.'_xs.jpg', $img->getEncoded());
        $url = 'image/'.$filename.'_xs.jpg';

        $image->book_id = $book->id;
        $image->url = $url;
        $image->save();

        return redirect('/books')->with('successMessage', 'Book has been saved!');
    }

    public function bookIndex($book_id)
    {
    	$user = Auth::user();

    	$book = $user->books()->where('id', $book_id)->first();

    	return view('books.book_index', ['book' => $book, 'user' => $user]);
    }

	public function imageCreate()
	{

	}

	public function imageStore()
	{
		$img = new BookImage;
		$img = Image::make($request->file('image')->getRealPath());
        $img = $img->encode('jpg', 50);
        Storage::disk('public')->put($filename.'_xs.jpg', $img->getEncoded());
        $url = 'image/'.$filename.'_xs.jpg';

        $book->image = $url;
	}
}
