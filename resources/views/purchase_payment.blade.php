@extends('layout.apps')

@section('navBody')
    <a class="nav-link active" href="go" role="tab" aria-selected="true">Home</a>
    <a class="nav-link" href="{{url('/Purchase-Payment')}}" role="tab" aria-selected="true">Purchase Payment</a>
    <a class="nav-link" href="{{url('/Purchase-Item')}}" role="tab" aria-selected="true">Purchase Item List</a>
    <a class="nav-link" href="{{url('/Purchase-Return')}}" role="tab" aria-selected="true">Purchase Return</a>
@endsection


@section('appBody')


    {!! Form::open(['url' => 'Branches/submit', 'method' => 'POST']) !!}
    <div class="card" style="margin-bottom:50px;">
        <div class="card-header">
            Purchase Payment
        </div>
        <div class="card-body">

            {{ Form::text('payment', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Purchase Payment' ]) }}
            {{ Form::text('type', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Payment Type' ]) }}
            {{ Form::text('amound', '', [ 'class' => 'form-control myFormControll', 'placeholder' => 'Paid Amound' ]) }}

            {{ Form::text('description', '', [ 'class' => 'form-control myFormControll myTextBox', 'placeholder' => 'Payment Description' ]) }}

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
            <th>Purchase Payment</th>
            <th>Payment Type</th>
            <th>Paid Amount</th>
            <th>Payment Description</th>
        </tr>
        </thead>

    </table>

    <script type="text/javascript">
        $('#loadTable').DataTable();
    </script>

@endsection
