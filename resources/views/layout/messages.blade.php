@if(count($errors)>0)

  @foreach($errors->all() as $error)
  <p class="text-danger">
    {{ $error }}
  </p>
   @endforeach
@endif




@if(session('SuccessMessage'))
<p class="text-success">
  {{ session('SuccessMessage') }}
</p>
@endif
