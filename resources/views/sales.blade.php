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
    Sales
  </div>
  <div class="card-body">

  {{ Form::text('amount', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Sales Amount' ]) }}
  <div class="form-row">
    <div class="col-md-1">
        {{ Form::text('payment_type', '', [ 'class' => 'form-control  myFormControll','readonly', 'placeholder' => 'PID' ]) }}  
    </div>
    <div class="col-md-11">
      {{ Form::text('payment_type', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'PaymentType']) }}  
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-1"> 
    {{ Form::text('branch', '', [ 'class' => 'form-control myFormControll','readonly', 'placeholder' => 'BID' ]) }}
    </div>
    <div class="col-lg-11">
    {{ Form::text('branch', '', [ 'class' => 'form-control  myFormControll', 'placeholder' => 'Branch' ]) }}
    </div>
  </div>
  {{ Form::date('date', '', [ 'class' => 'form-control myFormControll ', 'placeholder' => 'Select Date' ]) }}

    @include('layout.messages')

  </div>
  <div class="card-footer">
  {{ Form::submit('Save' , [ 'class' => 'btn btn-primary','disabled']) }}
  {{ Form::submit('Update' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  {{ Form::submit('Delete' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  </div>
</div>
  {!! Form::close() !!}


<!-- 
  <table id="loadTable" class="table table-bordered" style=" margin-bottom: 40px;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>

   
    

    </tbody>
  </table> -->

<!--   <script type="text/javascript">
    $('#loadTable').DataTable();
  </script> -->

@endsection