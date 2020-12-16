@extends('usdashboard.layout.master')

@section('dashboard')
    active
@endsection
@section('content')


@include('usdashboard.layout.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('usdashboard.layout.header')
    <x-alert />
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Earning</h5>
                    <span class="h2 font-weight-bold mb-0">{{auth()->user()->balance}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Your Active Refarel</h5>
                    <span class="h2 font-weight-bold mb-0">{{$user}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Eern Per Day</h5>
                      <span class="h2 font-weight-bold mb-0">@if (auth()->user()->active_id == 1)
                        @if ($user <= 10)
                        20
                        @elseif ($user <= 20)
                        40
                        @elseif ($user <= 30)
                        80
                        @elseif ($user <= 40)
                        100
                        @endif
                        @else 0 @endif </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Your Level</h5>
                      <span class="h2 font-weight-bold mb-0">
                          @if ($user <= 10)
                          Silver
                          @elseif ($user <= 20)
                          Platinum
                          @elseif ($user <= 30)
                          Gold
                          @elseif ($user <= 40)
                          Dimond
                          @endif
                          </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Follow Our Instraction</h6>
                  <h5 class="h3 text-white mb-0">Notice</h5>
                </div>
                @foreach ($notices as $notice)
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                          <span class=" d-md-block btn btn-primary">{{$notice->created_at->format('d M Y')}}</span>
                    </ul>
                  </div>
                <hr>
                <div class="chart">
                    <div class="container">
                        <p style=" color:white;">
                        {{$notice->notice}}
                    </p>
                    </div>
                  </div>
              </div>
              @endforeach
            </div>
            <div class="card-body">
              <!-- Chart -->
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            @if(Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
            @endif
            @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h5 class="h3 mb-0">Your Refarel Code</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart ">
                @if (auth()->user()->active_id == 1)<h1 style="text-align: center; margin-bottom:50px; font-size:60px">{{auth()->user()->refer_code}}</h1>@else <h2> Please Active Your Account For Get Your Refer Code!! <a href="" style="color: red">Click Here</a> </h2> @endif



              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->

      @include('usdashboard.layout.footer')

    </div>
  </div>

  @endsection
