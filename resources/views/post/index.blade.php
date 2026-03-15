@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Posts</h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Comments</th>
                </tr>
            </thead>

            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category->name }}</td>

                    <td>
                        @foreach($post->tags as $tag)
                            {{ $tag->name }},
                        @endforeach
                    </td>

                    <td>{{ $post->comments->count() }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@endsection