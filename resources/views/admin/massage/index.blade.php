
@extends('admin.layouts.master')

@section('massage')
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
            <h1 class="m-0 text-dark">Massage</h1>
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
          
        </div>
        <x-alert />
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Massage</th>
                <th>Massage Date</th>
                <th>Massage Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1
            @endphp
            @foreach ($massages as $massage)
            <tr>
            <td>{{$i++}}</td>
            <td>{{ $massage->name }}</td>
            <td>{{ $massage->email }}</td>
            <td>{{ Str::limit($massage->massage, 50) }}</td>
                <td>{{$massage->created_at->format('d M Y')}}</td>
                <td>{{$massage->created_at->format('h:i')}}</td>
                <td>
                <form action="{{route('massage.destroy',[$massage->id])}}" method="POST">
                    <a href="{{route('massage.view',[$massage->id])}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
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
