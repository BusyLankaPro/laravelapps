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
  
  {{ Form::text('sales_id', '', [ 'class' => 'form-control  col-lg-1 myFormControll','readonly', 'placeholder' => 'SalesID' ]) }}
  {{ Form::text('sales_id', '', [ 'class' => 'form-control  col-lg-11 myFormControll', 'placeholder' => 'SalesID' ]) }}
  {{ Form::text('items_id', '', [ 'class' => 'form-control  col-lg-1 myFormControll','readonly', 'placeholder' => 'ItemsID' ]) }}
  {{ Form::text('items', '', [ 'class' => 'form-control  col-lg-11 myFormControll', 'placeholder' => 'ItemsID' ]) }}

    @include('layout.messages')

  </div>
  <div class="card-footer">
  {{ Form::submit('Save' , [ 'class' => 'btn btn-primary','disabled']) }}
  {{ Form::submit('Update' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  {{ Form::submit('Delete' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  </div>
</div>
  {!! Form::close() !!}





@endsection