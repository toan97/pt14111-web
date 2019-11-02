@extends('layouts')
@section('title','comments')
@section('content')
	@if (empty($comments))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>UserName</th>
					<th>Content</th>
					<th>Posts</th>
					<th colspan="4" class="text-center"><a href="{{ route('comments.create') }}" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($comments as $comment)
						<tr>
							<td>{{ $comment->user->name }}</td>
							<td>{{ $comment->content }}</td>
							<td>{{ $comment->post->id }}</td>
							<td><a href="{{ route('comments.edit',['id' => $comment->id]) }}" class="btn btn-primary">Update</a></td>
							<td>
								<form action="{{ route('comments.destroy',['id'=> $comment->id]) }}" method="POST">
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