@if(Session::has('massage'))
<div>
    <p class="alert alert-success">{{ Session::get('massage') }}</p>
</div>
@endif

@if(Session::has('error'))
<div>
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
</div>
@endif
