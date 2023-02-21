@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">author</th>
                        <th scope="col">content</th>
                        <th scope="col">post_date</th>
                        <th scope="col">topic</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->post_date }}</td>
                            <td>{{ $post->topic }}</td>
                            <td class="d-flex">
                                <a href="" class="btn btn-sm btn-primary">Show</a>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection