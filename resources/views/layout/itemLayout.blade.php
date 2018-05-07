@extends('layout.apps')

@section('navBody')
<a class="nav-link active" href="ItemsMainGroup" role="tab" aria-selected="true">Main Group</a>
  <a class="nav-link" href="ItemsSubGroup" role="tab" aria-selected="true">Sub Group</a>
    <a class="nav-link" href="Items" role="tab" aria-selected="true">Items</a>
@endsection


@section('appBody')

  @yield('subPageBody');

@endsection
