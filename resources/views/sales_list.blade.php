@extends('layout.apps')

@section('navBody')
<a class="nav-link active" href="go" role="tab" aria-selected="true">Home</a>
  <a class="nav-link" href="{{url('/Sales')}}" role="tab" aria-selected="true">Sales Details</a>
  <a class="nav-link" href="{{url('/Sales-return')}}" role="tab" aria-selected="true">Sales Return Details</a>
  <a class="nav-link" href="{{url('/Sales-list')}}" role="tab" aria-selected="true">Sales List</a>
@endsection

@section('appBody')


    {!! Form::open() !!}
<div class="card" style="margin-bottom:50px;">
  <div class="card-header">
    Sales List
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="col-md-1">
   {{ Form::text('sales_id', '', [ 'class' => 'form-control  myFormControll','readonly', 'placeholder' => 'SalesID' ]) }}
    </div>
    <div class="col-md-11">
    {{ Form::text('sales_id', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'SalesID' ]) }}
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-1">
  {{ Form::text('items_id', '', [ 'class' => 'form-control myFormControll','readonly', 'placeholder' => 'ItemsID' ]) }}
    </div>
    <div class="col-md-11">
  {{ Form::text('items', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'ItemsID' ]) }}
    </div>
  </div>

    @include('layout.messages')

  </div>
  <div class="card-footer">
  {{ Form::submit('Save' , [ 'class' => 'btn btn-primary','disabled']) }}
  {{ Form::submit('Update' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  {{ Form::submit('Delete' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  {{ Form::text('IDBox', '', [ 'id'=> 'IDBox','class' => 'form-control mySelectedIDBox', 'readonly' ]) }}
  </div>
</div>
  {!! Form::close() !!}





@endsection