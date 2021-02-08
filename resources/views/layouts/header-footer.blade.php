
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jenx Hotel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> 
  <link rel="stylesheet" href="{{ asset('/css/multi-select.css') }}">
<!--
  <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/daterangepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/icheck-bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/bootstrap-colorpicker.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/tempusdominus-bootstrap-4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/select2-bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/bootstrap-duallistbox.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('/css/adminlte.min.css') }}">
-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('/images/food.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Jenx.io</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/images/photo_14.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
            
              </p>
            </a>
        
          </li>
          <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon nav-icon fas fa-th"></i>
            <p>
              Accomodation
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/reservation/create" class="nav-link">
              <i class="fa fa-circle nav-icon"></i>
                <p>Add New
                <span class="right badge badge-danger">New</span>
                </p>
                 </a>
            </li>
            <li class="nav-item">
              <a href="/reservation" class="nav-link">
              <i class="fa fa-circle nav-icon"></i>
                <p>View All</p>
              </a>
            </li>
        
          </ul>
        </li>
         
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"> 
                <a href="/reservation/executive/room" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Deluxe (VIP)</p>
                </a>
              </li>
          
              <li class="nav-item">
                <a href="/reservation/suite/room" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suite</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/reservation/business/room" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Business Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/reservation/regular/room" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regular</p>
                </a>
              </li></ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bookings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All</p>
                </a>
              </li>
         
            </ul>
          </li>
        
          </li>

      
         <!-- <li class="nav-header">Feed Back</li>
        
          <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Comments</p>
          </a>
        </li> -->
      
          <li class="nav-header">Label</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa fa-circle text-danger"></i>
              <p class="text">Notifications</p>
            </a>
          </li> 
    
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  @yield('content')

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="/">Jenx.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/js/app.js') }}"></script>

<script src="{{ asset('/js/jquery.multi-select.js') }}"></script>

<script>
    $(document).ready(function(){
      $("#custom-headers").multiSelect({
        SelectableHeader:"<div class='custom-header'> Selectable items </div>",
        SelectionHeader:"<div class='custom-header'> Selectable items </div>",
        SelectableHeader:"<div class='custom-header'> Selectable items </div>",
        SelectableFooter:"<div class='custom-header'> Selectable items </div>",
        SelectionFooter:"<div class='custom-header'> Selectable items </div>"
      });
    });
</script>

<!--
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/js/select2.full.min.js') }}"></script>

<script src="{{ asset('js/jquery.bootstrap-duallistbox.min.js') }}"></script>

<script src="{{ asset('/js/moment.min.js') }}"></script>
<script src="{{ asset('/js/jquery.inputmask.bundle.min.js') }}"></script>

<script src="{{ asset('/js/daterangepicker.js') }}"></script>

<script src="{{ asset('/js/js/bootstrap-colorpicker.min.js') }}"></script>

<script src="{{ asset('/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('/js/js/bootstrap-switch.min.js') }}"></script>

<script src="{{ asset('/js/js/adminlte.min.js') }}"></script>

<script src="{{ asset('/js/js/demo.js') }}"></script>

<script>
  $(function () {

    $('.select2').select2()

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

 
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
 
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
  
    $('[data-mask]').inputmask()


    $('#reservation').daterangepicker()
   
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
   
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

 
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
   
    $('.duallistbox').bootstrapDualListbox()

   
    $('.my-colorpicker1').colorpicker()
   
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script> -->

</body>
</html>