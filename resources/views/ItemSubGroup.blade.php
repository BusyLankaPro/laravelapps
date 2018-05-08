@extends('layout.itemLayout')


@section('subPageBody')
{!! Form::open(['url' => 'ItemsSubGroup/submit', 'method' => 'POST']) !!}
<div class="card" style="margin-bottom:50px;">
<div class="card-header">
Item Sub Group
</div>
<div class="card-body">

{{ Form::text('name', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Name' ]) }}
<div class="col-lg-12" style="padding:0px;">
<div class="row" >
  <div class="col-lg-1">
    {{ Form::text('itemMainGroupID', '', [ 'id' => 'itemMainGroupID', 'class' => 'form-control myFormControll', 'readonly']) }}
  </div>
  <div class="col-lg-11">
  {{ Form::text('itemMainGroupName', '', [ 'id' => 'itemMainGroupAutoComplete' , 'class' => 'form-control myFormControll', 'placeholder' => 'Branch Name'  ]) }}
  </div>
</div>
</div>

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
    <th>Main Group</th>
  </tr>
</thead>
<tbody>

  @if( count($myList)>0 )

    @foreach($myList as $myRow )
    <tr>
      <td>{{ $myRow->ItemSubGroupID }}</td>
      <td>{{ $myRow->ItemSubGroupName }}</td>
      <td>{{ $myRow->item_main_groups->ItemMainGroupName }}</td>
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

  // call main group list from ajax
  $.ajax({
    url : "ItemsMainGroupJSON",
    type: 'POST',
    dataType :'JSON',
    data: {
      _token : CSRF_TOKEN
    },
    success: function( data ){
      itemMainGroupAutoComplete( data );
    },
    error :function( ){
      console.log('item main group autocomplete error ..');
    }

  })

  // function to create array for auto compleate fun
var autoSource =[];

  function itemMainGroupAutoComplete( list ) {

    for (var i = 0; i < list.length; i++) {
      autoSource.push( { key:list[i].ItemMainGroupID , value : list[i].ItemMainGroupName  } )
    }

    $('#itemMainGroupAutoComplete').autocomplete({
      source : autoSource,
      select : function( event , ui ){
        $('#itemMainGroupID').val( ui.item.key );
        $('#itemMainGroupAutoComplete').val( ui.item.label  )
      }

    })

  }


</script>

@endsection
