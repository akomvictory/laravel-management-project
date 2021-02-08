@extends('layouts.header-footer-one')

@section('content')

<section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Accommodation</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-path">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Accommodation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start welcome section -->
        <section class="single-room-section sec-padding">
            <div class="container">

                <div class="row">
                 <div class="col-md-8">
                     <div class="left-view ">
                         <div class="about-carousel">
                                     <!-- single-awesome-project start -->
                                     <div class="single-about-project">
                                         <div class="awesome-img room-img">
                                             <a href="#">
                                             @if($service->photo_1)
                                                 <img src="/storage/photos/{{$service->photo_1}}" alt="" />
                                             @endif
                                             </a>
                                         </div>
                                     </div>
                                     <div class="single-about-project">
                                         <div class="awesome-img room-img">
                                             <a href="#">
                                             @if($service->photo_2)
                                                 <img src="/storage/photos/{{$service->photo_2}}" alt="" />
                                             @endif
                                             </a>
                                         </div>
                                     </div>
                                     <div class="single-about-project">
                                         <div class="awesome-img room-img">
                                             <a href="#">
                                             @if($service->photo_2)
                                                 <img src="/storage/photos/{{$service->photo_3}}" alt="" />
                                            @endif
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                         <div class="what-in-room">
                         @if($service->amenity_1)
                             <div class="included">
                                 <img src="/img/services/icon-ac.png" alt="icon">
                                 <span>Coll AC</span>
                             </div>
                        @endif
                             @if($service->amenity_2)
                             <div class="included">
                                 <img src="/img/services/icon-car.png" alt="icon">
                                 <span>free parking</span>
                             </div>
                        @endif
                             @if($service->amenity_3)
                             <div class="included">
                                 <img src="/img/services/icon-cup.png" alt="icon">
                                 <span>breakfast</span>
                             </div>
                        @endif
                             @if($service->amenity_4)
                             <div class="included">
                                 <img src="/img/services/icon-wifi.png" alt="icon">
                                 <span>wifi service</span>
                             </div>
                        @endif
                             
                         </div>
                         <div class="room-description">

                                 <h3>Core Value of Resort</h3>
                                 <p>
                                 {{$service->room_description}}
                                 </p>
                                

                         </div>
                         </div>

               @if($comments && count($comments) > 0 )
               @foreach($comments as $comment)
                  <div class="card-comment">
                  <h3 class="card-title alert alert-primary">Comments</h3>
                  <!-- User image -->
                  <img class="img-circle img-sm" src="/images/photo_14.png" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      {{$comment->username}} <br/>
                      <span class="text-muted float-right"> {{$comment->created_at}}</span>
                    </span><!-- /.username --> <br/>
                    {{$comment->comment}}

                        @if($comment->remark === 'happy')
                    <span class="label label-info">Happy</span>
                        @else
                    <span class="label label-warning">Unhappy</span>
                        @endif

                  </div>
                  <!-- /.comment-text -->
                </div>
               @endforeach
                @endif

               <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title alert alert-primary">Leave a comment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/comment" method="POST" enctype="multipart/form-data"> 
               @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title *</label>
                    <div class="col-sm-10">
                      <input type="text" required name="title" class="form-control" id="inputEmail3" placeholder="Comment Title">
                      <input type="hidden"  name="room_number" value="{{$service->room_number}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Remark *</label>
                    <div class="col-sm-10">
                     <select required name="remark" id="" class="form-control">
                     <option value="happy">Happy</option>
                     <option value="unhappy">Unhappy</option>
                     </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Desc *</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" required name="comment" id="" cols="30" rows="10"> </textarea>
                    </div>
                  </div>
               
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Send</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

                 </div>
                    <div class="col-md-4">
                        <div class="booking-form">
                            <form action="http://lamarena.online/marco/index.html" method="get" class="listing-search__form">
                                <div class="price">
                                    <p>Room From Per Night</p>
                                    <span>{{$service->room_price}}</span>
                                </div>
                                <hr>
                            
                                <div class="item thm-button">
                                    <label class="listing-search__label listing-search__label--hidden">Book Now</label>
                                    <a href="#" class="listing-search__btn">Book Now</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->


@endsection('content')