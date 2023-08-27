@extends('layouts.app')
@section('content')
<div class="container" id="posts-container">
    <div class="col-12">
                <ul>
                    <li>
                        {{$post->id}}
                    </li>
                    <li>
                    {{$post->title}}
                    </li>
                    <li>
                    {{$post->slug}}
                    </li>
                    <li>
                    {{$post->content}}
                    </li>
                    <li>
                        <a href="" class="btn btn-sm btn-primary">
                            View
                        </a>
                        <a href="" class="btn btn-sm btn-success">
                            Edit
                        </a>
                        <a href="" class="btn btn-sm btn-warning">
                            Delete
                        </a>
                    </li>
                </ul>
    </div>

</div>          
           

@endsection