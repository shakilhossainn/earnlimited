@extends('usdashboard.layout.master')

@section('profile')
    active
@endsection
@section('content')



@include('usdashboard.layout.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('usdashboard.layout.header')


<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
        <h1 class="display-2 text-white">Hello {{auth()->user()->name}}</h1>
          <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
        </div>
      </div>
    </div>
  </div>
    <div class="container-fluid mt--6">
        <div class="row">
          <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
              <img src="{{asset('userdashboard')}}/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                    <img src="
                    @if(auth()->user()->image != null)
                    {{asset("/storage/image/".auth()->user()->image)}}@else
                    {{asset('userdashboard')}}/assets/img/theme/team-4.jpg
                    @endif
                    "
                    class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center">
                      <div>
                      <span class="heading">{{auth()->user()->balance}}</span>
                        <span class="description">Balance</span>
                      </div>
                      <div>
                      <span class="heading">{{$user}}</span>
                        <span class="description">Refarel</span>
                      </div>
                      <div>
                          @if (auth()->user()->active_id == 1)
                          <span class=" heading "> <span class="badge badge-success btn-sm ">Active</span></span>
                          @elseif(auth()->user()->active_id == 2)
                          <span class=" heading "> <span class="badge badge-danger btn-sm ">Inctive</span></span>
                          @elseif(auth()->user()->active_id == 3)
                          <span class=" heading"> <span class="badge badge-primary btn-sm ">Hold</span></span>
                          @endif
                        <span class="description">Status</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                <h5 class="h3">{{auth()->user()->name}}<span class="font-weight-light"></span>
                  </h5>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i>{{auth()->user()->description}}
                  </div>
                </div>
              </div>
            </div>


            <div class="card card-profile ">
                <div class="card-header text-center font-weight-bold">Change Your Password</div>
            <form action="{{route('pass')}}" method="POST">
                @csrf
            <div class="card-header m border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <label for="password">Current Password</label>
                <input type="password" id="password" name="current_password" class="form-control" @error('current_password')
                style="border: 1px solid #f00;margin-bottom:5px;"
                @enderror>
                @error('current_password')
                    <div style="color:red;">
                      {{  $message  }}
                    </div>
                @enderror
                <label for="New_password">New Password</label>
                <input type="password" id="New_password" name="new_password" class="form-control"  @error('new_password')
                style="border: 1px solid #f00;margin-bottom:5px;"
                @enderror>
                @error('new_password')
                <div style="color:red;">
                  {{  $message  }}
                </div>
                 @enderror
                <label for="Confirm_Password">Confirm Password</label>
                <input type="password" id="Confirm_Password" name="confirm_password" class="form-control"  @error('confirm_password')
                style="border: 1px solid #f00;margin-bottom:5px;"
                @enderror>
              </div>
              @error('confirm_Password')
              <div style="color:red;">
                {{  $message  }}
              </div>
          @enderror
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-facebook">Change Password</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-8 order-xl-1">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Edit profile </h3>
                  </div>
                  <div class="col-4 text-right">
                    <span  class="btn btn-sm btn-primary">Settings</span>
                  </div>
                </div>
              </div>
              <div class="card-body">
              <form action="{{route('profile.edit',auth()->user()->id)}}"  method="POST" enctype="multipart/form-data">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                        @csrf
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-first-name">Name</label>
                        <input type="text" id="input-first-name" name="name" class="form-control" placeholder="Full Name" value="{{auth()->user()->name}}" @error('name')
                        style="border: 1px solid #f00;margin-bottom:5px;"
                        @enderror>
                        </div>
                        @error('name')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-last-name">email</label>
                        <input type="email" id="input-last-name" class="form-control" placeholder="Your Email Address" value="{{auth()->user()->email}}" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <!-- Address -->
                  <h6 class="heading-small text-muted mb-4"> Upload Your Image</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-address">Image</label>
                          <input id="input-address"  name="image" class="form-control"  type="file">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <!-- Address -->
                  <h6 class="heading-small text-muted mb-4">Contact information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="address" class="form-control" placeholder="Home Address" value="{{auth()->user()->address}}" type="text">
                        </div>
                      </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Phone Number</label>
                          <input type="Number" id="input-last-name" class="form-control" placeholder="Your Phone Number" name="phone_num" value="{{auth()->user()->phone_num}}" >

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Description -->
                  <div class="container">
                    <hr class="my-4">
                  <div class="container">
                  <h6 class="heading-small text-muted mb-4">About me</h6>
                  <div class="pl-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control" name="description" placeholder="A few words about you ...">{{auth()->user()->description}}</textarea>
                    </div>
                    <button class="btn btn-facebook my-3" type="submit"> Update Data </button>
                  </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>


      @include('usdashboard.layout.footer')
    </div>
    @endsection
