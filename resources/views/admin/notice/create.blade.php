


@extends('admin.layouts.master')

@section('notice')
active
@endsection
@section('content')

@include('admin.layouts.header')


  <!-- /.navbar -->

    <!-- Sidebar -->
@include('admin.layouts.sidebar')
    <!-- /.sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Task</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
          <h3 class="card-title"> <a href="{{route('notice.index')}}" class="btn btn-success"><i class="fas fa-arrow-left "> </i></a></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
          <div class="container">
          <form role="form" action="{{route('notice.store')}}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="notice">Notice </label>
                <textarea name="notice" class="form-control" placeholder="Enter Notice"></textarea>
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



      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('admin.layouts.footer')



@endsection
