@extends('layouts.app')

@section('content')
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
            <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="projectTitle" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="projectTitle" name="title">
            </div>
            
            <div class="mb-3">
                <label for="projectContent" class="form-label">Content</label>
                <textarea class="w-100" id="projectContent" name="content" maxlength="500" rows="8"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="projectTopic" class="form-label">Topic</label>
                <input type="text" class="form-control" id="projectTopic" name="topic">
            </div>

            <div class="mb-3">
                <label for="project_image" class="form-label">Add an image</label>
                <input type="file" class="w-100" id="project_image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
