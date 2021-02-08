@extends('layouts.header-footer-one')

@section('content')

        <!-- Start welcome section -->
        <section class="room-section sec-padding">
            <div class="container">

                <div class="row">
                   <div class="col-lg-12 col-md-12 col-xs-12">
              
                   @if(count($services)>0)
                   @foreach($services as $service)
                       <div class="single-room-wrapper mb-0">
                           <div class="media categorical_images">

                               <a href="/accomodation/service/{{$service->id}}" >
                                   <img src="/storage/photos/{{$service->photo_1}}" style="width:34em !mportant; height:32em !mportant" alt="room">
                               </a>
                               <div class="text-wrapper">
                                   <div class="text-body">
                                       <h4>Grand superior room</h4>
                                       <p>Semper ac dolor vitae accumsan. interdum hendrerit lacinia. ac dolor vitae accumsan interdum. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
                                       <ul>
                                          @if($service->amenity_1) 
                                          <li><i class="fa fa-check-circle-o"></i>Room Service</li>
                                          @endif
                                          @if($service->amenity_2) 
                                          <li><i class="fa fa-check-circle-o"></i>Wifi service</li>
                                          @endif
                                          @if($service->amenity_3) 
                                          <li><i class="fa fa-check-circle-o"></i>Col Ac</li>
                                          @endif
                                          @if($service->amenity_4) 
                                          <li><i class="fa fa-check-circle-o"></i>Parking Lot</li>
                                          @endif
                                      
                                       </ul>
                                   </div>
                                   <div class="price-detail">
                                       <div class="price-room">
                                           <span># {{$service->room_price}}</span>
                                           <p>Per-night</p>

                                       </div>
                                       <a href="/accomodation/service/{{$service->id}}">room detail</a>
                                   </div>
                               </div>


                           </div>
                       </div>
                  @endforeach
                  @else
                  <span class="alert alert-danger"> No reservation for this category added yet </span>
                  @endif
                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->


@endsection('content')