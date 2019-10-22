@extends('layouts')
@section('title','Posts')
@section('content')
	@if (empty($posts))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>UserName</th>
					<th>Title</th>
					<th>Content</th>
					<th>Categories</th>
					<th class="text-center" colspan="2"><a href="{{ route('posts.store') }}" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{ $post->user->name }}</td>
							<td>{{ $post->title }}</td>
							<td>{{ $post->content }}</td>
							<td>{{ $post->category->name }}</td>
							<td><a href="{{ route('posts.edit',['id' => $post->id]) }}" class="btn btn-primary">Update</a></td>
							<td>
								<form action="{{ route('posts.destroy',['id'=> $post->id]) }}" method="POST">
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