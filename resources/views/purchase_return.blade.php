@extends('layout.apps')

@section('navBody')
    <a class="nav-link active" href="go" role="tab" aria-selected="true">Home</a>

@endsection


@section('appBody')


    {!! Form::open(['url' => 'Branches/submit', 'method' => 'POST']) !!}
    <div class="card" style="margin-bottom:50px;">
        <div class="card-header">
            Purchase Return
        </div>
        <div class="card-body">

            {{ Form::text('note', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Note' ]) }}
            {{ Form::text('quantity', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Quantity' ]) }}
            {{ Form::text('Return Purchase', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Return Purchase' ]) }}


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
            <th>Return Note</th>
            <th>Return Quantity</th>
            <th>Return Purchase</th>

        </tr>
        </thead>

    </table>

    <script type="text/javascript">
        $('#loadTable').DataTable();
    </script>

@endsection
