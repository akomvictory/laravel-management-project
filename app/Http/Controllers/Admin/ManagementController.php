<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accomodation;
class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_accomodation = Accomodation::all();
        
         return view('accomodation.index', 
          ['all_accomodation' => $all_accomodation]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     return view('accomodation.create');

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if(!Auth::check()){
            return redirect('/');
        } */

       
            
             $request->validate([
             'room_title' => 'required',
             'room_description' => 'required',
             'room_price' => 'required',
             'room_category' => 'required',
             'amenities' => 'required',
            'accomodation_description' => 'required',
            
               ]);

          if ($request->hasFile('photo_one')) {
           //get unique name for file
           $photo_one = uniqid().time().'.'.$request->photo_one->getClientOriginalName();
           //upload the file
           $path_photo_one =  $request->photo_one->storeAs('public/videos', $photo_one);
             //save path and name in database
              }


                if ($request->hasFile('photo_two')) {
           //get unique name for file
           $photo_two = uniqid().time().'.'.$request->photo_two->getClientOriginalName();
           //upload the file
           $photo_two =  $request->photo_two->storeAs('public/videos', $photo_two);
             //save path and name in database
              }

                if ($request->hasFile('photo_three')) {
           //get unique name for file
           $photo_three = uniqid().time().'.'.$request->photo_three->getClientOriginalName();
           //upload the file
           $path_demo_video =  $request->photo_three->storeAs('public/videos', $photo_three);
             //save path and name in database
              }


          
        
                
                
                $room = new Accomodation();
                $room->username = Auth::user()->name;
                $room->room_title = $request->room_title;
                $room->room_price = $request->room_price;
                $room->room_category = $request->room_category;
                $room->amenity_one = $request->amenity_one;
                $room->amenity_two = $request->amenity_two;
                $room->amenity_three = $request->amenity_three;
                $room->amenity_four = $request->amenity_four;
                $room->room_description = $request->room_description;
                $room->photo_1 = $photo_one;
                $room->photo_2 = $photo_two;
                $room->photo_1 = $photo_three;
                $room->save();
                
            return back(); 
            
          

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function single($id)
    {
        
        $room_service = Accomodation::find($id);
        return view('reservation.room', [
         'room_service'=>$room_service]);
    }

    public function book()
    {
        
        
        return view('reservation.book');
    }  
    
    public function reservation($category)
    {
        $reservations = Accomodation::where('room_category', $category)->get();
           
            return view('reservation.categories', [
                'reservations'=>$reservations]);
    }  

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
