@extends('Master.app')
@section('content')
    <body>

        <h2>Post escritos por você</h2>
        <div class="db">
            <a href="{{route('posts.create')}}"> <button type="submit" class="btn btn-primary">Criar post</button></a>
        </div>
        <br>
        <div>
        <ui>
            @foreach ($posts as $post)
                <li><a href="{{route('posts.show',$post)}}">    {{ $post->name }}</a></li>
            @endforeach
        </ui>
    </div>
    </body>

@endsection
