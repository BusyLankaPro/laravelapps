@extends('layout.apps')

@section('navBody')
<a class="nav-link active" href="go" role="tab" aria-selected="true">Home</a>
  <a class="nav-link" href="go" role="tab" aria-selected="true">Reports2</a>
@endsection


@section('appBody')


    {!! Form::open(['url' => 'Branches/submit', 'method' => 'POST']) !!}
<div class="card" style="margin-bottom:50px;">
  <div class="card-header">
    Branches
  </div>
  <div class="card-body">

  {{ Form::text('name', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Name' ]) }}
  {{ Form::text('telephone', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Telephone' ]) }}
  {{ Form::text('email', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Email' ]) }}
  {{ Form::text('address', '', [ 'class' => 'form-control myFormControll myTextBox', 'placeholder' => 'Address' ]) }}

    @include('layout.messages')

  </div>
  <div class="card-footer">
  {{ Form::submit('Save' , [ 'class' => 'btn btn-primary']) }}
  {{ Form::submit('Update' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  {{ Form::submit('Delete' , [ 'class' => 'btn btn-primary', 'disabled']) }}
  </div>
</div>
  {!! Form::close() !!}


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

      @if( count($myList)>0 )

        @foreach($myList as $myRow )
        <tr>
          <td>{{ $myRow->BranchID }}</td>
          <td>{{ $myRow->BranchName }}</td>
          <td>{{ $myRow->BranchTellNo }}</td>
          <td>{{ $myRow->BranchEmail }}</td>
          <td>{{ $myRow->BranchAddress }}</td>
        </tr>
        @endforeach

      @endif

    </tbody>
  </table>

  <script type="text/javascript">
    $('#loadTable').DataTable();

    $('#loadTable').click(function(){
      var id = $(this).children('tr td:eq(0)').text;
      alert(id);
    })


  </script>

@endsection
