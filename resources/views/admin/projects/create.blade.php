@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-4">
            @if ($errors->any())
                <div class="errors_container mb-4 alert alert-warning">
                    <div id="popup_message" data-type="warning" data-message="Check errors">Check errors</div>
                </div>
            @endif
            <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="projectTitle" class="form-label">Project Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="projectTitle" name="title">
                @error('title')
                <div class="errors_container mb-4 alert alert-warning">
                    <div id="popup_message" data-type="warning" data-message="Check errors">{{$message}}</div>
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="projectContent" class="form-label">Content</label>
                <textarea class="w-100 @error('content') border-danger @enderror" id="projectContent" name="content" maxlength="500" rows="8"></textarea>
                @error('content')
                <div class="errors_container mb-4 alert alert-warning">
                    <div id="popup_message" data-type="warning" data-message="Check errors">{{$message}}</div>
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="projectTopic" class="form-label">Topic</label>
                <input type="text" class="form-control @error('topic') is-invalid @enderror" id="projectTopic" name="topic">
                @error('topic')
                <div class="errors_container mb-4 alert alert-warning">
                    <div id="popup_message" data-type="warning" data-message="Check errors">{{$message}}</div>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project_image" class="form-label">Add an image</label>
                <input type="file" class="w-100 @error('image') is-invalid @enderror" id="project_image" name="image">
                @error('image')
                <div class="errors_container mb-4 alert alert-warning">
                    <div id="popup_message" data-type="warning" data-message="Check errors">{{$message}}</div>
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
