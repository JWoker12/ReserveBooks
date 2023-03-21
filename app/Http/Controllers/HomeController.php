<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Booking::where('date_delivery', '<=', date('Y/m/d'))
            ->delete();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservers = Booking::with('book')->get('book_id');
        
        return view('home')
            ->with('reservers', $reservers);
    }

    public function listBooks(){
        $books = Books::all();
        $categories = Category::all();
        return view('books')
            ->with('categories', $categories)
            ->with('books', $books);
    }

    public function showBook(Request $request){
        $id = $request->route('id');
        $data = Books::where('id', $id)
            ->first();
        return view('book')
            ->with('data', $data);
    }

    public function reserve(Request $request){
        $date = date('Y/m/d');
        $newDate = date('Y/m/d', strtotime($date.'+'.$request->days.'days'));

        Booking::create([
            'user_id' => Auth::user()->id,
            'book_id' => $request->id,
            'date_departure' => $date,
            'date_delivery' => $newDate
        ]);
        return back();
    }
}
