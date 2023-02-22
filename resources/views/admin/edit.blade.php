@extends('layouts.app')

<form action="{{route('posts.id.edit')}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="postTitle" class="form-label">postTitle</label>
        <input type="text" class="form-control" id="postTitle" name="postTitle">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
