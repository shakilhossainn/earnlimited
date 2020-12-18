@extends('usdashboard.layout.master')


@section('content')



@include('usdashboard.layout.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('usdashboard.layout.header')


<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Tranjection</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="">Tranjection</a></li>

              </ol>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </div>




  <div class="container-fluid mt--6">
    <div class="row justify-content-center">
      <div class=" col ">
        <div class="card">
          <div class="card-header bg-transparent">

          </div>
          <div class="card-body ">
              <div class="container  col-md-4">
                  <p class=" text-lg font-weight-bold">Active Your Account For Earn Daily .</p>
              </div>
            <div class="container  col-md-12">
            <form action="{{route('tranjection.create',auth()->user()->id)}}" method="POST">
                @csrf
              <div class="col-md-5 container ">
                  <div>
                    <label for="tranjection">Tranjection Id</label>
                 <input type="text" id="tranjection" name="tranjection" class="form-control" placeholder="Enter Your Tranjection id" @error('tranjection')
                    style="border: 1px solid rgb(255, 8, 8)"
                 @enderror>
                 @error('tranjection')
                    <div style="color:red;">{{$message}}</div>
                 @enderror
                </div>
                <div>
                <button class="btn btn-facebook my-3" type="submit">submit</button>
                </form>
            </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
@include('usdashboard.layout.footer')
  </div>




@endsection
