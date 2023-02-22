@extends('layouts.app')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-4">
            @if ($errors->any())
                <div class="errors_container mb-4 alert alert-warning">
                    <ul>
                        @foreach ($errors->all() as $singleError)
                            <li>
                                {{$singleError}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="postTitle" class="form-label">postTitle</label>
                <input type="text" class="form-control" id="postTitle" name="title" value="{{$post->title}}">
            </div>
            
            <div class="mb-3">
                <label for="postContent" class="form-label">Content</label>
                <textarea class="w-100" id="postContent" name="content" maxlength="500" rows="8">{{$post->content}}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="postTopic" class="form-label">Topic</label>
                <input type="text" class="form-control" id="postTopic" name="topic" value="{{$post->topic}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>