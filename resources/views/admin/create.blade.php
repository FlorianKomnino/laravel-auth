@php
    use Illuminate\Support\Carbon;
@endphp


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('posts.store')}}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="postTitle" class="form-label">postTitle</label>
                <input type="text" class="form-control" id="postTitle" name="postTitle">
            </div>
            
            <div class="mb-3">
                <label for="postAuthor" class="form-label">Author</label>
                <input type="text" class="form-control" id="postAuthor" name="postAuthor" value="{{Auth::user()->name}}" disabled>
            </div>
            
            <div class="mb-3">
                <label for="postContent" class="form-label">Content</label>
                <textarea class="w-100" name="" id="postContent" name="postContent" maxlength="500" rows="8"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="postTopic" class="form-label">Post topic</label>
                <input type="text" class="form-control" id="postTopic" name="postTopic">
            </div>
            
            <div class="mb-3">
                <label for="postDate" class="form-label">Post date</label>
                <input type="text" class="form-control" id="postDate" name="postDate" disabled value="{{now('+1 hour')}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
