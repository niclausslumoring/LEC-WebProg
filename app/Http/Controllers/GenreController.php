<?php


namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class GenreController extends Controller
{
    //
    public function displayGenre(){
        $genre = Genre::all();
        return view('manage_genre',compact('genre'));
    }

    public function deleteGenre($id){
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->back();
    }

    public function insertGenre(Request $request){
        $rules = [
            'name'=>'required|unique:genres,name'
        ];
        $genre = new Genre();
        $genre->name = $request->name;
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $genre->save();
        
        return redirect()->back();
    }

    public function showGenreDetail($id){

        $genre = Genre::find($id);
        $book = Book::all();
        return view('genre_detail',compact('genre','book'));
    }

    public function updateGenre(Request $request, $id){
        $rules = [
            'name'=>'required|unique:genres,name'
        ];
        $genre = Genre::find($id);
        $genre->name = $request->name;
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $genre->save();
        Alert::success('Type', 'has been updated');
        return redirect()->back();
    }
}
