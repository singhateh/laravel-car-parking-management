@if(Session::has('error'))
<div class="alert alert-danger">
  {{ Session::get('error')}}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success')}}
  </div>
@endif
