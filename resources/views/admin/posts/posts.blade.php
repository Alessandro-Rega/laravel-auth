@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card my-4">
                <div class="card-body">
                    <h5>{{$post->title}}</h5>
                    <p>{{$post->content}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection