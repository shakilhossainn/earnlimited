
@extends('admin.layouts.master')

@section('withdrow')
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
            <h1 class="m-0 text-dark">Withdrow</h1>
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
<x-alert />
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Withdrow List</h3>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table id="example" class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Payment Method</th>
                                    <th>Phone Number</th>
                                    <th>Amount</th>
                                    <th>status</th>
                                    <th>date</th>
                                    {{-- @if (auth()->user()->user_roll == '1' ) --}}
                                    <th  style="width: 150px">Action</th>
                                    {{-- @endif --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1
                                @endphp
                                @if($withdrows->count())
                                @foreach ($withdrows as $withdrow)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                                <img src="{{ asset($withdrow->user->image) }}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                                        <td>{{ $withdrow->user->name }}</td>
                                        <td>{{ $withdrow->payment_method }}</td>
                                        <td>{{ $withdrow->phone_num }}</td>
                                        <td>{{ $withdrow->amount }}</td>
                                        <td>
                                            @if ($withdrow->status == 0)
                                            <span class="badge badge-primary">panding</span>
                                            @elseif ($withdrow->status == 1)
                                            <span class="badge badge-success">success</span>
                                            @elseif ($withdrow->status == 2)
                                            <span class="badge badge-danger">Rejected</span>
                                            @endif
                                        </td>

                                        <td>{{ $withdrow->created_at->diffForHumans() }}</td>
                                        {{-- @if (auth()->user()->user_roll == '1' ) --}}
                                        <td class="d-flex" style="width: 150px">


                                            @if ($withdrow->status == 2)
                                            <form action="{{ route('withdrow.success', [$withdrow->id]) }}" method="Post" >
                                                @csrf
                                            <button type="submit" class="btn btn-sm btn-primary mr-1"><i class="fas fa-check"></i></button>
                                        </form>
                                        @endif
                                        @if($withdrow->status == 1)
                                            <form action="{{ route('withdrow.reject', [$withdrow->id]) }}" class="mr-1" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-times"></i> </button>
                                            </form>
                                            @endif
                                        </td>
                                        {{-- @endif --}}
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="9">
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
