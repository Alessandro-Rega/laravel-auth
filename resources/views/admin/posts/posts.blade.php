@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Published</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            @if ($post->published)
                                <span class="bg-success text-white p-1 rounded">Pubblicato</span>
                            @else
                                <span class="bg-secondary text-white p-1 rounded">Non Pubblicato</span>
                            @endif
                        </td>
                        <td>{{$post->slug}}</td>
                        <td><a href="{{route('posts.show', $post->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
                    </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection