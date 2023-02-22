@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    {{$project->title}}
                </div>
                <div class="card-body">
                    <div class="card-text">
                        {{$project->content}}
                    </div>
                </div>
                <div class="card-footer text-start">
                    <div class="postTopic">
                        Topic: {{$project->topic}}
                    </div>
                    <div class="postDate">
                        Creation time: {{$project->post_date}}
                    </div>
                    <div class="postAuthor">
                        Post author: {{$project->author}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection