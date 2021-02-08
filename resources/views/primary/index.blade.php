@extends('layouts.header-footer-one')

@section('content')

        <!-- Start Slider section -->
        <section class="slider-section">
           <div class="slider-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{ asset('/img/slider/1.jpg') }}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">Jenx - the Best Place in the World to Be</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-1 ">
                                                <p>We incorporate the best corporate expertise in the hotel industry</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                            
                                                <a href="/accomodation/all" class="ped-btn left-btn" >Our Rooms</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{ asset('/img/slider/2.jpg') }}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2 align-center">
                                                <h1 class="title2">Welcome to the Place Where Dream Come True</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-1 align-center">
                                                <p>Exceeding the definition of comfort bringing the bliss of home </p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3 align-center">
                                              <!--<a href="#" class="ped-btn left-btn" >Our Services</a> -->
                                                <a href="/accomodation/all" class="ped-btn right-btn" >Our Rooms</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider section -->

        <!-- Start listing section -->
        <!--
        <section class="listing-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="http://lamarena.online/marco/index.html" method="get" class="listing-search__form">
                            <div class="main-search">
                                <div class="item-wrapper">
                                    <div class="item">
                                        <div class="form-group">
                                            <label class="listing-search__label" for="exampleFormControlSelect2">Adults</label>
                                            <select class="form-control ht-field" id="exampleFormControlSelect2">
                                                <option selected>Adults</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="form-group">
                                            <label class="listing-search__label" for="exampleFormControlSelect3">Children</label>
                                            <select class="form-control ht-field" id="exampleFormControlSelect3">
                                                <option selected>Children</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="form-group">
                                            <label class="listing-search__label" for="usr">Arrival date:</label>
                                            <div class="dk-select ht-field">
                                            <input type="text" class="datepicker form-control input-field" id="usr">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="form-group">
                                            <label class="listing-search__label" for="usr2">Departure date:</label>
                                            <div class="dk-select ht-field">
                                            <input type="text" class="datepicker form-control input-field" id="usr2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item thm-button">
                                        <label class="listing-search__label listing-search__label--hidden">Advanced Search</label>
                                        <div class="dk-select ht-field">
                                        <a href="#" id="listing-btn" class="listing-search__btn">Advanced Search</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

            </div>
            </div>
        </section> -->
        <!-- End listing section -->

        <!-- Start welcome section -->
       
     
        <!-- End numbers section -->
        <!-- Start project section -->
        <section class="project-section sec-padding ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-titleBar text-center">
                            <h3>Our Rooms & Suits</h3>
                            <p>Hotel analytics (BA) is the practice of iterative, methodical exploration of an
                                organization's data with emphasis on statistical analysis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="project-carousel">
                      
                    
                    @if(count($all_accomodation)>0)
                   @foreach($all_accomodation as $accomodation)
                                
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-awesome-project">
                                <div class="awesome-img img-layout-home">
                                    <a href="/accomodation/service/{{$accomodation->id}}">
                                        <img src="/storage/photos/{{$accomodation->photo_1}}" style="width:34em !mportant; height:32em !mportant" alt="" />
                                    </a>
                                    <div class="price"># {{$accomodation->room_price}}</div>
                                </div>
                                <div class="project-dec-2">
                                    <h4>{{substr($accomodation->room_title, 0, 30).'..'}}</h4>
                                    <p>{{substr($accomodation->room_description, 0, 50).'..'}}</p>
                                    <div class="rating">
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star voted"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <small>(145) <a href="/accomodation/service/{{$accomodation->id}}">View Detail</a> </small>
                                    </div>
 
                                </div>
                            </div>
                            <!-- single-awesome-project end -->
                        </div>

                        @endforeach
                    @else

                    <span class="alert alert-danger">
                    No accomodation added yet </span>
                    @endif
                    


                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End project section -->

        <!-- Start testimonials section -->
		<section class="testimonial-section sec-padding">
			<div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-titleBar text-center">
							<h3>Clients Testimonials</h3>
						    <p>Hotel analytics (BA) is the practice of iterative.</p>
						</div>
					</div>
				</div>
				<div class="row">

                    <div class="testimonial-carousel">
                    
                        <!-- End single item -->
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{ asset('/img/team/SD1.jpg') }}" alt="">
                            </div>
                            <div class="texti-name">
                                <h5>David Samson</h5>
                                <span class="guest-rev"><a href="#">Genarel customer</a></span>
                            </div>
                            <div class="client-rating">
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                            </div>
                            <div class="testi-text">
                                <p>Nice place with good customer service, they manage their 
                                customers so well you will ask for more</p>
                            </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="{{ asset('/img/team/JA.png') }}" alt="">
                            </div>
                            <div class="texti-name">
                                <h5>Judith Alhassan</h5>
                                <span class="guest-rev"><a href="#">Genarel customer</a></span>
                            </div>
                            <div class="client-rating">
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                                <a href="#"><i class="icon icon-star"></i></a>
                            </div>
                            <div class="testi-text">
                                <p>I love the fact that their customer service has been improve 
                                there even have wifi accesible to customer, great guys.</p>
                            </div>
                        </div>
                        <!-- End single item -->

                    </div>


                </div>


			</div>
		</section>
		<!-- End testimonials end -->
        <!-- Start Overview -->
        <section class="our-overview sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-wd">
                                <div class="section-titleBar text-left">
                                        <h3>Core Value of Resort</h3>
                                    <p>We are the best at what we do in town 
                                    no body meets our level of service and corporate expertise.</p>

                                </div>
                              <div class="lists">
                                <ul>
                                        <li><i class="fa fa-check-circle-o"></i>Hotel Growth</li>
                                        <li><i class="fa fa-check-circle-o"></i>Sustainability</li>
                                        <li><i class="fa fa-check-circle-o"></i>Performance</li>
                                </ul>
                                <ul>
                                        <li><i class="fa fa-check-circle-o"></i>Advanced Analytics</li>
                                        <li><i class="fa fa-check-circle-o"></i>Customer Insights</li>
                                        <li><i class="fa fa-check-circle-o"></i>Organization</li>
                                </ul>
                              </div>
                        </div>
                         
                    </div>
                    <div class="col-md-6 col-sm-6">
                            <img src="{{ asset('/img/service/map.png') }}" class="mb-15-xs" alt="map">
                    </div>
                  </div>
                </div>
              </section>
        <!-- End Overview -->
        <!--Galery section Start-->
        <section class="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <section class="gallery-section">
                            <figure class="gallery__item gallery__item--1 lightbox">
                                <a href="{{ asset('/img/galery/gal-1.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-1.jpg') }}" alt="Gallery image 1" class="gallery__img lightbox">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--2 lightbox">
                                <a href="{{ asset('/img/galery/gal-2.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-2.jpg') }}" alt="Gallery image 2" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--3 lightbox">
                                <a href="{{ asset('/img/galery/gal-3.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-3.jpg') }}" alt="Gallery image 3" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--4">
                                <a href="{{ asset('/img/galery/gal-4.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-4.jpg') }}" alt="Gallery image 4" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--5">
                                <a href="{{ asset('/img/galery/gal-5.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-5.jpg') }}" alt="Gallery image 5" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--6">
                                <a href="img/galery/gal-6.jpg" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-6.jpg') }}" alt="Gallery image 6" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--7">
                                <a href="{{ asset('/img/galery/gal-7.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-7.jpg') }}" alt="Gallery image 7" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--8">
                                <a href="{{ asset('/img/galery/gal-8.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-8.jpg') }}" alt="Gallery image 8" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--9">
                                <a href="{{ asset('/img/galery/gal-9.jpg') }}" class="tt-gallery-1 lightbox">
                                <img src="{{ asset('/img/galery/gal-9.jpg') }}" alt="Gallery image 9" class="gallery__img">
                                <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--10">
                                <a href="{{ asset('/img/galery/gal-10.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-10.jpg') }}" alt="Gallery image 10" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--11">
                                <a href="{{ asset('/img/galery/gal-11.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-11.jpg') }}" alt="Gallery image 11" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--12">
                                <a href="{{ asset('/img/galery/gal-12.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-12.jpg') }}" alt="Gallery image 12" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--13">
                                <a href="{{ asset('/img/galery/gal-13.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-13.jpg') }}" alt="Gallery image 13" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>
                            <figure class="gallery__item gallery__item--14">
                                <a href="{{ asset('/img/galery/gal-14.jpg') }}" class="tt-gallery-1 lightbox">
                                    <img src="{{ asset('/img/galery/gal-14.jpg') }}" alt="Gallery image 14" class="gallery__img">
                                    <span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></a></figure>



                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!--End of Galery section-->



@endsection('content')