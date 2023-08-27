@extends('layouts.app')
@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
    <div class="col-12">
       <form action="{{route('admin.posts.store')}}" method="POST">
        @csfr
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" placeholder="Insert your pots" name="title">
</div>
@error('image')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
<div class="mb-3">
  <label for="image" class="form-label">Image</label>
  <input type="text" class="form-control" id="image" placeholder="" name="image">
</div>
@error('content')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
<div class="mb-3">
  <label for="content" class="form-label">Content</label>
  <textarea class="form-control" id="content" rows="7" name="content"></textarea>
</div>
<div class="mb-3">
  <button type="submit" class="me-3">
    Create new post
  </button>
  <button type="reset">
    Reset
  </button>
</div>

       </form>
    </div>
</div>   

</div>          
           

@endsection