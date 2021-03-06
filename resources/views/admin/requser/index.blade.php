
@extends('admin.layouts.master')

@section('requser')
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

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">User List</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table id="example" class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>

                                    <th>Email</th>
                                    <th>Action</th>
                                    {{-- @if (auth()->user()->user_roll == '1' ) --}}
                                    {{-- @endif --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if($users->count())
                                @php
                                    $i=1
                                @endphp
                                @foreach ($users as $user)
                                    <tr @if ($user->active_id == 3)
                                        style="background-color: #ff9191;"
                                    @endif>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $user->user_email }}</td>

                                        {{-- @if (auth()->user()->user_roll == '1' ) --}}
                                        <td class="d-flex" style="width: 150px">
                                            <a href="{{ route('mail.sent',[$user->id]) }}" class="btn btn-sm btn-primary mr-1" onclick="return confirm('are Your sure to active this account')" > <i class="fas fa-check"></i> </a>
                                            {{-- @if ($user->active_id == 3)
                                                <a href="{{ route('user.show', [$user->id]) }}" class="btn btn-sm btn-primary mr-1" onclick="return confirm('are Your sure to active this account')" > <i class="fas fa-check"></i> </a>

                                                @elseif ($user->active_id == 1)
                                            <form action="{{ route('user.destroy', [$user->id]) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                            </form>
                                            @endif --}}
                                        </td>
                                        {{-- @endif --}}
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-center">No categories found.</h5>
                                        </td>
                                    </tr>

                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer d-flex justify-content-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
