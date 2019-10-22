@extends('layouts')
@section('title','comments')
@section('content')
	@if (empty($comments))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>Content</th>
					<th>UserName</th>
					<th>Posts</th>
					<th>Is_active</th>
					<th colspan="4" class="text-center"><a href="" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($comments as $comment)
						<tr>
							<td>{{ $comment->content }}</td>
							<td>{{ $comment->user->name }}</td>
							<td>{{ $comment->post->id }}</td>
							<td>{{ $comment->is_active }}</td>
							<td><a href="" class="btn btn-primary">Update</a></td>
							<td>
								<form action="" method="POST">
									@csrf
								</form>
							</td>
							<td><a href="" class="btn btn-danger">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection