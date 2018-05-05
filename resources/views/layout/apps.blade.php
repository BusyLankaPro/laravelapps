@extends('layout.basicLayout')

@section('basicBody')
<div class="row" >

			<!-- sidenav con -->
			<div class="col-lg-3  col-md-12 fixed-top myRemoveFixedPositionInSM" style="margin-top: 100px;" >
				<div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

					@yield('navBody')

				</div>
			</div>


			<!-- app con con -->
			<div class="col-lg-9 col-md-12 myRemoveFixedPositionInSM"  style="margin-top: 100px; margin-left: 350px;">

				@yield('appBody')

			</div>



</div>
@endsection
