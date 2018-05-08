@extends('layout.itemLayout')


@section('subPageBody')
{!! Form::open(['url' => 'Items/submit', 'method' => 'POST']) !!}
<div class="card" style="margin-bottom:50px;">
<div class="card-header">
Item Sub Group
</div>
<div class="card-body">

  {{ Form::text('sortName', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Sort Name' ]) }}
  {{ Form::text('longName', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Long Name' ]) }}
  {{ Form::text('minQuantity', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Min Quanity' ]) }}
  {{ Form::text('maxQuantity', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'max Quanity' ]) }}
  {{ Form::text('barcode', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Barcode' ]) }}
<div class="col-lg-12" style="padding:0px;">
<div class="row" >
  <div class="col-lg-1">
    {{ Form::text('subGroupFK', '', [ 'class' => 'form-control myFormControll', 'readonly']) }}
  </div>
  <div class="col-lg-11">
  {{ Form::text('subGroupFKName', '', [  'class' => 'form-control myFormControll', 'placeholder' => 'Branch Name'  ]) }}
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
    <th>SName</th>
    <th>LName</th>
    <th>Min</th>
    <th>Max</th>
    <th>Barcode</th>
    <th>Sub Group</th>
  </tr>
</thead>
<tbody>

  @if( count($myList)>0 )

    @foreach($myList as $myRow )
    <tr>
      <td>{{ $myRow->ItemsID }}</td>
      <td>{{ $myRow->ItemsShortName }}</td>
      <td>{{ $myRow->ItemsLongName }}</td>
      <td>{{ $myRow->ItemsMinQue }}</td>
      <td>{{ $myRow->ItemsMaxQue }}</td>
      <td>{{ $myRow->ItemsBarCode }}</td>
      <td>{{ $myRow->item_sub_groups->ItemSubGroupName }}</td>
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
    var _getID = $(this).children('td:eq(0)').text();
    // put into IDBox
    $('#IDBox').val(_getID);


      // get sub group info
      $.ajax({
        url : "ItemsJSONGet",
        type: 'POST',
        dataType :'JSON',
        data: {
          _token : CSRF_TOKEN,
          id : _getID
        },
        success: function( data ){

          // append data
          $("input[name='sortName']").val(data.ItemsShortName);
          $("input[name='longName']").val(data.ItemsLongName);
          $("input[name='minQuantity']").val(data.ItemsMinQue);
          $("input[name='maxQuantity']").val(data.ItemsMaxQue);
          $("input[name='barcode']").val(data.ItemsBarCode);
          $("input[name='subGroupFK']").val(data.Items_ItemsSubGroup_Fk);


        },
        error :function( ){
          console.log('item main group autocomplete error ..');
        }

      })

    // enable update and delete buttons
    $('#UpdateBtn, #DeleteBtn').prop('disabled' , false);

  });

  // call sub group list from ajax
  $.ajax({
    url : "ItemsSubGroupJSON",
    type: 'POST',
    dataType :'JSON',
    data: {
      _token : CSRF_TOKEN,
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
      autoSource.push( { key:list[i].ItemSubGroupID , value : list[i].ItemSubGroupName  } )
    }

    $('input[name="subGroupFKName"]').autocomplete({
      source : autoSource,
      select : function( event , ui ){
        $("input[name='subGroupFK']").val( ui.item.key );
        $('input[name="subGroupFKName"]').val( ui.item.label  )
      }

    })

  }


</script>

@endsection
