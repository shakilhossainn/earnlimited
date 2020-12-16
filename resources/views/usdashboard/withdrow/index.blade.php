@extends('usdashboard.layout.master')

@section('withdrow')
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
            <h6 class="h2 text-white d-inline-block mb-0">Withdrow</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{route('withdrow.index')}}">Withdrow</a></li>

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
              <form action="{{route('withdrow.store',auth()->user()->id)}}" method="POST">
                @csrf
            <div class="row icon-examples">
              <div class=" col-lg-3 col-md-6 container">
                <label for="amount">Select Your Amount</label>
                <select name="amount" id="" class="form-control">
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                    <option value="400">400</option>
                    <option value="500">500</option>
                    <option value="600">600</option>
                    <option value="700">700</option>
                    <option value="800">800</option>
                    <option value="900">900</option>
                    <option value="1000">1000</option>
                    <option value="1500">1500</option>
                    <option value="2000">2000</option>
                </select>
            </div>
                <div class=" col-lg-3 col-md-6 container">
                <label for="number">Enter Phone Number</label>
                <input type="text" name="number"  placeholder="017*******" class='form-control' required>
                @error('number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
            @enderror
            </div>

            <div class=" col-lg-3 col-md-6 container">
                <label for="payment_method">Select Your Payment Method</label>
                <select name="payment_method" id="" class="form-control">
                    <option value="bkash">Bkash</option>
                    <option value="rocket">Rocket</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 30px;margin-left:15px;" >Submit</button>
        </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Payment History</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Payment Policy</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($historys->count())
                    @foreach ($historys as $history)
                  <tr>
                    <th scope="row">
                      {{$history->phone_num}}
                    </th>
                    <td>
                        {{$history->amount}}
                    </td>
                    <td>
                        @if ($history->status == 1)
                        <span class='badge badge-success'>Success</span>
                        @elseif ($history->status == 0)
                        <span class='badge badge-primary'>panding</span>
                        @elseif ($history->status == 2)
                        <span class='badge badge-danger'>rejected</span>
                        @endif
                    </td>
                    <td>
                      <i class="
                      @if ($history->status == 1) fas fa-arrow-up text-success @else fas fa-arrow-down text-danger @endif mr-3"></i>{{$history->created_at->format('d M Y')}}
                    </td>
                  </tr>
                  @endforeach

                  @else
                  <tr>
                      <td colspan="9">
                          <h5 class="text-center">You have no payment history found</h5>
                      </td>
                  </tr>

              @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- Footer -->
@include('usdashboard.layout.footer')
  </div>




@endsection
