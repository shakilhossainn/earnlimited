@extends('usdashboard.layout.master')

@section('task')
    active
@endsection
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
            <h6 class="h2 text-white d-inline-block mb-0">Task</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="">Task</a></li>

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
          <div class="card-body">
            <div class="row icon-examples">
              <div class=" {{--col-lg-3 col-md-6--}} container">
                  @foreach ($tasks as $task)
                <h3 class="btn btn-danger">Your Task</h3>
              <p>{{$task->title}}</p>
                <div class="container">
                  @if ($task->video_one == null)
                  @else
                  <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <iframe  src="{{$task->video_one}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  @endif
                  @if ($task->video_two == null)
                  @else
                  <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <iframe  src="{{$task->video_two}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  @endif
                  @if ($task->video_three == null)
                  @else
                  <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <iframe  src="{{$task->video_three}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  @endif
                  @if ($task->video_four == null)
                  @else
                  <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                      <iframe  src="{{$task->video_four}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  @endif
                  @if ($task->video_five == null)
                  @else
                  <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <div class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                      <iframe  src="{{$task->video_five}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  @endif
                </div>
            @endforeach
                <hr>
                @if (auth()->user()->active_id == 1)
                @if (!$task->usertaskby(auth()->user()))
            <form action="{{route('taskdone.store',$task->id)}}" method="POST">
                @csrf

                    <textarea name="description"  class="form-control" placeholder="Submit Your Answer"></textarea>
                    <button type="submit" class="btn btn-primary remove-user" style="margin-top: 5px">Submit</button>
                 </form>
                 @else
                 <div class="row justify-content-center">
                    <p style="color: rgb(18, 75, 197)">You Have no task Aviable able right now !! Please wait for task  </p>
                </div>
                 @endif

                 @elseif(auth()->user()->active_id == 2)
                 <div class="row justify-content-center">
                    <p style="color: rgb(247, 34, 34)">Please active your account </p>
                </div>
                @elseif(auth()->user()->active_id == 3)
                <div class="row justify-content-center">
                    <p style="color: rgb(247, 34, 34)">Your Account is on hold please contact admin</p>
                </div>
                 @endif
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
