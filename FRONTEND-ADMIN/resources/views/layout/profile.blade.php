@extends('dashboard',[
	'title' => 'Welcome',
	'pageTitle' => 'Profile',
])
@section('content')
@include('layout.alert-dismissible')

<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				Email : 
			</div>
			<div class="card-body">
				  <div class="card mb-3" style="max-width: 540px;">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src="{{ asset('images/backend/laravel.jpg') }}" class="card-img" alt="">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title">#</h5>
					        
					        <p class="card-text"><small class="text-muted">#</small></p>
					      </div>
					    </div>
					  </div>
					</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				Edit Profile
			</div>
			<div class="card-body">
				<form method="POST" action="#">
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label for="name">Name</label>
						<input required="" value="#" class="form-control" type="" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input required="" value="#" class="form-control" type="hidden" id="old_password" name="old_password">
						<input type="password" id="password" name="password" class="form-control">
						<small class="text-secondary">kosongkan kolom password jika tidak ingin mengubah password</small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-sm">Update</button>
					</div>
				</form>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
</div>
@endsection