@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome to Jenx Hotel </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
           </button>
          </div>
        </div>
        <div class="card-body">
          Enjoy the best use of our application, please connect with us for 
          any relevant question to serve you better. Thanks, Team Jenx.
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Go Back
        </div>
        <!-- /.card-footer-->
      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
