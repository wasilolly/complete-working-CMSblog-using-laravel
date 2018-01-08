@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')
	<div class="panel panel-default">
		<div class="panel-heading">
			Create a new User
       </div>
	   
	   <div class="panel-body">
			<form action ="{{ route('setting.update') }}" method="POST">
				{{ csrf_field() }}
				
				<div class="form-group">
					<label for="name">Site Name</label>
					<input type="text" name="site_name" value="{{	$settings->site_name}}" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="name">Address</label>
					<input type="text" name="address" value= "{{ $settings->address }}" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="name">Contact Phone</label>
					<input type="text" name="contact_number" value="{{$settings->contact_number}}" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="name">Contact Email</label>
					<input type="email" name="contact_email" value="{{ $settings->contact_email}}" class="form-control">
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class ="btn.btn.success" type="submit">Update SIte Setting</button>
					</div>
				</div>
			</form>	
	    </div>
	</div>
    



@endsection