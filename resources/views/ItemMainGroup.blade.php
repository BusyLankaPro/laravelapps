@extends('layout.itemLayout')


@section('subPageBody')
{!! Form::open(['url' => 'ItemsMainGroup/submit', 'method' => 'POST']) !!}
<div class="card" style="margin-bottom:50px;">
<div class="card-header">
Branches
</div>
<div class="card-body">

{{ Form::text('name', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Name' ]) }}

@include('layout.messages')

</div>
<div class="card-footer">
{{ Form::submit('Save' , [ 'name'=>'Submit', 'class' => 'btn btn-primary']) }}
{{ Form::submit('Update' , [ 'name'=>'Submit', 'id'=> 'UpdateBtn', 'class' => 'btn btn-primary', 'disabled']) }}
{{ Form::submit('Delete' , [ 'name'=>'Submit','id'=> 'DeleteBtn', 'class' => 'btn btn-primary', 'disabled']) }}
{{ Form::text('IDBox', '', [ 'id'=> 'IDBox','class' => 'form-control mySelectedIDBox', 'readonly' ]) }}
</div>
</div>
{!! Form::close() !!}


<table id="loadTable" class="table table-bordered" style=" margin-bottom: 40px;">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>
</thead>
<tbody>

  @if( count($myList)>0 )

    @foreach($myList as $myRow )
    <tr>
      <td>{{ $myRow->ItemMainGroupID }}</td>
      <td>{{ $myRow->ItemMainGroupName }}</td>
    </tr>
    @endforeach

  @endif

</tbody>
</table>

<script type="text/javascript">
$('#loadTable').DataTable();

  // table click funciton
  $('#loadTable tr').click(function(){
    // get id from column 0 into variable id
    var id = $(this).children('td:eq(0)').text();
    // put into IDBox
    $('#IDBox').val(id);

    // enable update and delete buttons
    $('#UpdateBtn, #DeleteBtn').prop('disabled' , false);

  });


</script>

@endsection
