@extends('Master.app')
@section('content')

    <body>
    <div>
        <a href="{{route('posts.create')}}">Criar post</a>
    </div>
    <div>
        <ui>
            @foreach ($posts as $post)
                <li><a href="{{route('posts.show',$post)}}">    {{ $post->name }}</a></li>
            @endforeach
        </ui>
    </div>
    </body>


@endsection
