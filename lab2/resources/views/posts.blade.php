@extends('layouts')
@section('title','Posts')
@section('content')
	@if (empty($posts))
		no-data
	@else
			<table class="table table-hover">
				<thead>
					<th>User</th>
					<th>Content</th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{ $post->user_id }}</td>
							<td>{{ $post->content }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection