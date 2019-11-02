@extends('layouts')
@section('content')
	<form action="{{ route('comments.update',['id'=>$comment->id]) }}" method="POST" class="col-md-8 col-md-offset-2">
        @csrf
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="8" class="form-control">{{ $comment->content }}</textarea>
            @error('content') 
                <p style="color: red"><i>{{ $message }}</i></p> 
            @enderror
        </div>
        <div class="form-group">
            <label>comment to</label>
            <select class="form-control" name="post_id">
                @empty($posts)
                @else
                    @foreach ($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->title }}</option>
                    @endforeach
                @endempty
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
@endsection