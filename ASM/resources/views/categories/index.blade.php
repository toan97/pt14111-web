@extends('layouts')
@section('title','categories')
@section('page_header','Category')
@section('content')
	@if (empty($categories))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>Name</th>
					<th>UserName</th>
					<th>Posts</th>
					<th><a href="{{ route('categories.create') }}" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($categories as $category)
						<tr>
							<td>{{ $category->name }}</td>
							<td>{{ $category->user->name }}</td>
							<td>{{ $category->posts->count() }}</td>
							<td><a href="{{ route('categories.edit',['id'=> $category->id]) }}" class="btn btn-primary">Update</a></td>
							<td>
								<form action="{{ route('categories.destroy',['id'=> $category->id]) }}" method="POST">
									@csrf
									<button type="submit" class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection