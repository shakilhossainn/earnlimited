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
                    <iframe id="player" src="https://www.youtube.com/embed/DjB1OvEYMhY?enablejsapi=1" frameborder="0"></iframe>
                  </div>
                  {{-- <a href="#" id="next-button" class="btn btn-primary">Next</a> --}}
                  @endif
                  @if ($task->video_two == null)
                  @else
                  <div id="next-button" class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <iframe  id="player" src="https://www.youtube.com/embed/DjB1OvEYMhY?enablejsapi=1" frameborder="0"></iframe>
                  </div>
                  @endif
                  @if ($task->video_three == null)
                  @else
                  <div id="next-button" class="embed-responsive embed-responsive-21by9" style="margin-bottom:70px;">
                    <iframe id="player"  src="{{$task->video_three}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <button type="submit" class="btn btn-primary remove-user mt-3" >Submit</button>
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


<script>
const next_button = document.getElementById("next-button");
setNextButton("hidden");

let player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    events: {
      onStateChange: onPlayerStateChange,
    },
  });
}

next_button.addEventListener("click", playNext);

function onPlayerStateChange(event) {
  const playState = state => {
    return event.data == YT.PlayerState[state.toUpperCase()];
  };

  if (playState("ended")) {
    setNextButton("visible");
  }
}

function playNext(event) {
  event.preventDefault();

  setNextButton("hidden");
}

function setNextButton(state) {
  next_button.style.visibility = state;
}

function mousehandler(event) {
  const eventbutton = event.which || event.button;

  if (eventbutton == 2 || eventbutton == 3) return false;
}

document.oncontextmenu = () => false;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<script src="https://www.youtube.com/iframe_api"></script>

@endsection
