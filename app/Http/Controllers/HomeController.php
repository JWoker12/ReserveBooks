<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function listBooks(){
        $books = DB::table('books')->get();
        $categories = DB::table('category')->get();
        return view('books')
            ->with('categories', $categories)
            ->with('books', $books);
    }

    public function show(Request $request){
        $id = $request->route('id');
        $data = DB::table('books')->where('id', $id)->first();
        return view('book')->with('data', $data);
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
