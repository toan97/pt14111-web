@extends('layouts')
@section('title','Posts')
@section('content')
	@if (empty($posts))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>UserName</th>
					<th>Content</th>
					<th></th>
					<th colspan ="2" class="text-center"><a href="{{ route('posts.create') }}" class="btn btn-success ">Add</a></th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{ $post->user->name }}</td>
							<td>{{ $post->content }}</td>
							<td><a href="#" class="btn btn-primary">Update</a></td>
							<td><a href="#" class="btn btn-danger">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection