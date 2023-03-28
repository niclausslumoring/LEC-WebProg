<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function insertBook(Request $request){
        $rules = [
            'title'=>'required',
            'author'=>'required',
            'synopsis'=>'required',
            'price'=>'required|integer',
            'cover'=>'mimes:jpeg,jpg,png,gif|required|max:10000|image',
            'genre'=>'required'
        ];

        $book = new Book();
        $book->title = $request->title;
        $book->genreid = $request->genre;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        $book->price = $request->price;

        $file = $request->file('cover');

        $imageName = time().".".$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);

        $book->cover = 'images/'.$imageName;
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $book->save();

        return redirect()->back();
    }

    public function updateBook(Request $request, $id){
        $book = Book::find($id);
        $rules = [
            'title'=>'required',
            'author'=>'required',
            'synopsis'=>'required',
            'price'=>'required|integer',
            'cover'=>'mimes:jpeg,jpg,png,gif|required|max:10000|image',
            'genre'=>'required'
        ];
        
        $book->title = $request->title;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        $book->genreid = $request->genre;
        $book->price = $request->price;
        $file = $request->file('cover');
        if($file != null){
            $imageName = time().".".$file->getClientOriginalExtension();
            Storage::delete('public/'.$book->cover);

            $book->cover = 'images/'.$imageName;
            Storage::putFileAs('public/images', $file, $imageName);
        }
        
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $book->save();

        return redirect()->back();
    }

    public function showBooks(){
        $books = Book::all();
        $genre = Genre::all();

        return view('manage', compact('books','genre'));
    }

    public function booksHome(){
        $books = Book::paginate(5);
        // dd($books);
        return view('home', compact('books'));
    }

    public function search(Request $request){
        $search = $request->search;
    
        $books = Book::where('title','LIKE','%'.$search.'%')
                       ->paginate(5)
                       ->appends(['search'=>$search]);
        return view('home', compact('books', 'search'));
    }

    public function showBookDetail($id){
        $book = Book::find($id);
        $genres = Genre::all();
        return view('detail',compact('book', 'genres'));
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->back();
    }

    public function cart(){
        return view('cart');
    }

    public function addtoCart(Request $request, $id){
        $book = Book::find($id);
        $cart = session()->get('cart', []);
        $quantity = $request->quantity;
    
        // if book already exists in cart, update quantity
        if (isset($cart[$id])) {
            $quantity += $cart[$id]['quantity'];
        }
    
        $cart[$id]=[
            "title"=>$book->title,
            "quantity"=>$quantity,
            "author"=>$book->author,
            "price"=>$book->price
        ];
    
        session()->put('cart',$cart);
    
        return redirect()->back()->with('toast_success','Book added to cart successfully!');
    }
    

    public function deleteCart(Request $request){
        $book_id = $request->input('book_id');
        $cart = session('cart');
        if (isset($cart[$book_id])) {
            unset($cart[$book_id]);
            session(['cart' => $cart]);
        }
        return redirect()->back()->with('toast_success','This selected book has successfully deleted !');
    }

    public function checkout(Request $request){
        $cart = $request->session()->get('cart');
        if (!$cart) {
            return redirect()->back()->withErrors('Cart is empty!');
        }
        $totalPrice = 0;
        foreach ($cart as $book) {
            $totalPrice += $book['price'] * $book['quantity'];
        }
        $user = Auth::user(); // assuming you're using Laravel's built-in authentication
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->total_price = $totalPrice;
        $transaction->save();
        foreach ($cart as $book_id => $book) {
            $transactionDetail = new TransactionDetail();
            $transactionDetail->transaction_id = $transaction->id;
            $transactionDetail->book_id = $book_id;
            $transactionDetail->quantity = $book['quantity'];
            $transactionDetail->save();
        }
        $request->session()->forget('cart');
        return redirect()->back()->with('toast_success','Checkout successful!');
    }

    public function accessSessionData(Request $request) {
        if($request->session()->has('cart'))
            $cart = $request->session()->get('cart');
            dd($cart);

     }
    public function showAbout()
    {
        return view('aboutus');
    }

}
