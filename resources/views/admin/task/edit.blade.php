
@extends('admin.layouts.master')

@section('task')
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
          <h3 class="card-title"> <a href="{{route('task.index')}}" class="btn btn-success"><i class="fas fa-arrow-left "> </i></a></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
          <div class="container">
          <form role="form" action="{{route('task.update',[$task->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="title">Task title</label>
              <input type="title" class="form-control" name="title"  value="{{$task->title}}"  placeholder="Enter Task Taitle">
              </div>
              <div class="form-group">
                <label for="video_one">video [optional]</label>
                <input type="video_one" class="form-control" name="video_one" value="{{$task->video_one}}"  placeholder="Enter video link">
              </div>
              <div class="form-group">
                <label for="video_two">video [optional]</label>
                <input type="video_two" class="form-control" name="video_two" value="{{$task->video_two}}" placeholder="Enter video link">
              </div>
              <div class="form-group">
                <label for="video_three">video [optional]</label>
                <input type="video_three" class="form-control" name="video_three" value="{{$task->video_three}}"  placeholder="Enter video link">
              </div>
              <div class="form-group">
                <label for="video_four">video [optional]</label>
                <input type="video_four" class="form-control" name="video_four" value="{{$task->video_four}}"  placeholder="Enter video link">
              </div>
              <div class="form-group">
                <label for="video_five">video [optional]</label>
                <input type="video_five" class="form-control" name="video_five" value="{{$task->video_five}}" placeholder="Enter video link">
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
