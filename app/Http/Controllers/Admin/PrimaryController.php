<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accomodation;

class PrimaryController extends Controller
{
    public function index(){
        $all_accomodation = Accomodation::all();
        return view('primary.index', ['all_accomodation' =>$all_accomodation]);
    }

    public function category($category)
    {
       $services = Accomodation::where('room_category', $category)->get();
        return view('reservation.categories', [
         'services'=>$services]);

    }
}
