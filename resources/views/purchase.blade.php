@extends('layout.apps')

@section('navBody')
<a class="nav-link active" href="go" role="tab" aria-selected="true">Home</a>
  <a class="nav-link" href="{{url('/Purchase-Payment')}}" role="tab" aria-selected="true">Purchase Payment</a>
  <a class="nav-link" href="{{url('/Purchase-Item')}}" role="tab" aria-selected="true">Purchase Item List</a>
  <a class="nav-link" href="{{url('/Purches-return')}}" role="tab" aria-selected="true">Purchase Return</a>
@endsection


@section('appBody')


    {!! Form::open(['url' => 'Branches/submit', 'method' => 'POST']) !!}
<div class="card" style="margin-bottom:50px;">
  <div class="card-header">
    Purchase
  </div>
  <div class="card-body">

  {{ Form::date('date', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Date' ]) }}
  {{ Form::text('description', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Description' ]) }}
      <div class="group">
  {{ Form::text('vendors', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Vendors' ]) }}
      </div>
      {{ Form::text('amound', '', [ 'class' => 'form-control myFormControll myTextBox', 'placeholder' => 'Amound' ]) }}

    @include('layout.messages')

  </div>
  <div class="card-footer">
  {{ Form::submit('Save' , [ 'class' => 'btn btn-primary']) }}
  {{ Form::submit('Update' , [ 'class' => 'btn btn-primary','disabled' ]) }}
  {{  Form::submit('Delete' , [ 'class' => 'btn btn-primary','disabled' ]) }}
  </div>
</div>
  {!! Form::close() !!}



  <table id="loadTable" class="table table-bordered" style=" margin-bottom: 40px;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Description</th>
        <th>Vendors</th>
        <th>Amound</th>
      </tr>
    </thead>
   
  </table>

  <script type="text/javascript">
    $('#loadTable').DataTable();
  </script>

@endsection
