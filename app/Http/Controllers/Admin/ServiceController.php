<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accomodation;
use App\Usercomment;

class ServiceController extends Controller
{
    public function index(){
        
        $all_accomodation = Accomodation::all();
        
         return view('primary.index', 
          ['all_accomodation' => $all_accomodation]);
        
            }

       public function category($category){
       
        $services = Accomodation::where('room_category', $category)->get();
        return view('service.categories', [
         'services'=>$services]);
         
             }

        public function all(){
        $services = Accomodation::all();
         return view('service.all-rooms', [
        'services'=>$services]);
        }

        public function show($id){

            
            $service = Accomodation::find($id);
            $comments = Usercomment::where('room_number', $service->room_number)->get();
             return view('service.room', [
            'service'=>$service, 'comments'=>$comments]);
            }


}
