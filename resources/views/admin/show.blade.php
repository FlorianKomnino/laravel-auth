@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                    <div class="card-text">
                        {{$post->content}}
                    </div>
                </div>
                <div class="card-footer text-start">
                    <div class="postTopic">
                        Topic: {{$post->topic}}
                    </div>
                    <div class="postDate">
                        Creation time: {{$post->post_date}}
                    </div>
                    <div class="postAuthor">
                        Post author: {{$post->author}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection