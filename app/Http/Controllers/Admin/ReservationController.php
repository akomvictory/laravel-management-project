<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accomodation;
use App\Usercomment;
use Auth;
use User;
class ReservationController extends Controller
{
   /**
     * Display accomodation result for a particular category.
     *
     * @return \Illuminate\Http\Response
     */

    public function category($category)
    {
       $services = Accomodation::where('room_category', $category)->get();
        return view('reservation.categories', [
         'services'=>$services]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = Usercomment::where('remark', 'Unhappy')->get();
        $all_accomodation = Accomodation::all();
        return view('reservation.index',
         ['all_accomodation' =>$all_accomodation,
         'complaints' =>$complaints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_accomodation = Accomodation::all();
        return view('reservation.create', ['all_accomodation' =>$all_accomodation]);
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

   


         if ($request->hasFile('photo_one')) {
          //get unique name for file
          $photo_one = uniqid().time().'.'.$request->photo_one->getClientOriginalName();
          //upload the file
          $path_photo_one =  $request->photo_one->storeAs('public/photos', $photo_one);
            //save path and name in database
             }


               if ($request->hasFile('photo_two')) {
          //get unique name for file
          $photo_two = uniqid().time().'.'.$request->photo_two->getClientOriginalName();
          //upload the file
          $path_photo_two =  $request->photo_two->storeAs('public/photos', $photo_two);
            //save path and name in database
             }

               if ($request->hasFile('photo_three')) {
          //get unique name for file
          $photo_three = uniqid().time().'.'.$request->photo_three->getClientOriginalName();
          //upload the file
          $path_photo_three =  $request->photo_three->storeAs('public/photos', $photo_three);
            //save path and name in database
             }
                              
               $room = new Accomodation();
               $room->username = Auth::user()->name;
               $room->room_title = $request->room_title;
               $room->room_price = $request->room_price;
               $room->room_category = $request->room_category;
               $room->room_number = $request->room_number;
               $room->amenity_1 = $request->amenity_one;
               $room->amenity_2 = $request->amenity_two;
               $room->amenity_3 = $request->amenity_three;
               $room->amenity_4 = $request->amenity_four;
               $room->room_description = $request->room_description;
               $room->photo_1 = $photo_one;
               $room->photo_2 = $photo_two;
               $room->photo_3 = $photo_three;
              
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
        
        $reservation = Accomodation::find($id);

        return view('reservation.room', ['reservation' => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    public function edit($id)
    {
        $all_accomodation = Accomodation::all();
              
        $reservation = Accomodation::find($id);
        $complaints = Usercomment::where('remark', 'Unhappy')->get();
        return view('reservation.update', ['all_accomodation' =>$all_accomodation,
                            'reservation' =>$reservation,
                            'complaints' =>$complaints]);
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
            /*if(!Auth::check()){
            return redirect('/');
        } */

   


        if ($request->hasFile('photo_one')) {
            //get unique name for file
            $photo_one = uniqid().time().'.'.$request->photo_one->getClientOriginalName();
            //upload the file
            $path_photo_one =  $request->photo_one->storeAs('public/photos', $photo_one);
              //save path and name in database
               }
  
  
                 if ($request->hasFile('photo_two')) {
            //get unique name for file
            $photo_two = uniqid().time().'.'.$request->photo_two->getClientOriginalName();
            //upload the file
            $path_photo_two =  $request->photo_two->storeAs('public/photos', $photo_two);
              //save path and name in database
               }
  
                 if ($request->hasFile('photo_three')) {
            //get unique name for file
            $photo_three = uniqid().time().'.'.$request->photo_three->getClientOriginalName();
            //upload the file
            $path_photo_three =  $request->photo_three->storeAs('public/photos', $photo_three);
              //save path and name in database
               }
                                
                 $room = Accomodation::find($id);
                 $room->username = Auth::user()->name;
                 $room->room_title = $request->room_title;
                 $room->room_price = $request->room_price;
                 $room->room_category = $request->room_category;
                 $room->room_number = $request->room_number;
                 $room->room_number = $request->room_number;
                 $room->amenity_1 = $request->amenity_one;
                 $room->amenity_2 = $request->amenity_two;
                 $room->amenity_3 = $request->amenity_three;
                 $room->amenity_4 = $request->amenity_four;
                 $room->room_description = $request->room_description;
                 $room->photo_1 = $photo_one;
                 $room->photo_2 = $photo_two;
                 $room->photo_3 = $photo_three;
                
                 $room->save();
                return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $room = Accomodation::find($id);
         
         //Check if post exists before deleting
         if (!isset($room)){
             return redirect('/')->with('error', 'No reservation found');
         }
         
        // Storage::delete('public/photos/'.$room->course_photo);
 
 
         $room->delete();
         return back();
         
     }
}
