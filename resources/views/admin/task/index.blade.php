
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

<div style="padding-left:10px;padding-right:10px;">
   <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="card-title">Task</h2>
        <a href="{{route('task.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>sl</th>
                <th>Task Title</th>
                <th>Task Created</th>
                <th>Task Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1
            @endphp
            @foreach ($tasks as $task)
            <tr>
            <td>{{$i++}}</td>
            <td>{{ Str::limit($task->title, 50) }}</td>
                <td>{{$task->created_at->format('d M Y')}}</td>
                <td>{{$task->created_at->format('h:i')}}</td>
                <td>
                <form action="{{route('task.destroy',[$task->id])}}" method="POST">
                    <a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{route('task.edit',[$task->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('are you sure to delete task')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
