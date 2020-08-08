@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container">
	<h3>Create</h3>
	<div class="row">
			<div class="form-group">
				<form class="" action="{{ URL::to('/store') }}" method="post">
					<br>
					<h5>name</h5>
					{{ csrf_field() }}
					<input type="text" class="form-control" name="name">
					<br>
					<h5>description</h5>
					{{ csrf_field() }}
					<input type="text" class="form-control" name="description">
					<br>
					<h5>photo</h5>
					{{ csrf_field() }}
					<input type="text" class="form-control" name="photo">
					<br>
					<h5>price</h5>
					{{ csrf_field() }}
					<input type="text" class="form-control" name="price">
					<br>
					<button type="submit" class="btn btn-primary">submit</button>
				</form>
			</div>
	</div>
</div>

@endsection