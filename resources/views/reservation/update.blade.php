@extends('layouts.header-footer')

@section('content')
   
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jenx Hotel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Control Panel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{count($all_accomodation)}}</h3>

                <p>Added Room</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Client Satisfaction Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Successfull Bookings</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{count($complaints)}}</h3>

                <p>Visitors Complaints</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Power Integration
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Control</a>
                    </li>
                   
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Room Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/reservation/{{$reservation->id}}" method="POST" enctype="multipart/form-data"> 
               @csrf
               @method("PUT")
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Room Title</label>
                    <input type="text" required name="room_title" class="form-control" id="exampleInputTitle" value="{{$reservation->room_title}}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Room Price</label>
                    <input type="text" required name="room_price" class="form-control" id="exampleInputTitle" value="{{$reservation->room_price}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Accomodation Number</label>
                    <input type="text" required name="room_number" class="form-control" id="exampleInputTitle" placeholder="Enter room number">
                  </div>

                

                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" name="amenity_one" value="wifi" type="checkbox">
                          <label class="form-check-label">wifi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="amenity_two" value="parking" type="checkbox">
                          <label class="form-check-label">parking lot</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="amenity_three" value="food">
                          <label class="form-check-label">break fast</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="amenity_four" value="AC">
                          <label class="form-check-label">Col AC</label>
                        </div>
                        
                         </div>
                



               <!--   <div class="form-group">
                   <select id="custom-headers" max="2" required name="amenities[]" multiple="multiple">
                   <option value="wifi service">Wifi Service </option>
                   <option value="parking lot"> Parking Lot </option>
                   <option value="break fast"> Break Fast </option>
                   <option value="col ac"> Col Ac </option>
                   
                  
                   </select>
                  </div> -->

                  <div class="form-group">
                  <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Room Description
                
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" required name="room_description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {{trim($reservation->room_description)}}
                          </textarea>
              </div>
           
            </div>
          </div>
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" max="4" type=".jpg,.jpeg.png,.tif" required name="photo_one" multiple class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File 2 input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" max="4" type=".jpg,.jpeg.png,.tif" required name="photo_two" multiple class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File 3 input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" max="4" type=".jpg,.jpeg.png,.tif" required name="photo_three" multiple class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <select name="room_category" class="form-control">
                    <option value="suite"> Suite </option>
                   <option value="business"> Business </option>
                   <option value="executive"> Executive </option>
                   <option value="regular"> Regular</option>
                   </select> 

                   </div>


                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->

       
            <!--/.direct-chat -->

            <!-- /.card -->
          </section>
    
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection('content')