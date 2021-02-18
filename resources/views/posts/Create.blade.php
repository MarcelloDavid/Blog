@extends('Master.app')
@section('content')

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="screen-body">
        <div class="screen-body-item left">
            <div class="app-title">
                <span>Matéria:</span>

            </div>
        </div>
    </div>
    <div class="screen">

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="screen-body-item">
            <div class="app-form">
                <div class="app-form-group">
                    <h5>Titulo</h5>
    <input class="app-form-control" type="text" name="name"><br>
    <hr>
                </div>
                    <div class="app-form-group">
                        <label for="report" class="form-label">Digite a Reportagem</label>
    <textarea class="app-form-control" rows="10" cols="168"
              minlength="10" maxlength="170" name="content"> </textarea><br>
                    </div>
                <div class="app-form-group buttons">
    <button class="app-form-button"  type="submit">Criar</button>
                </div>



        </div>
        </div>
    </form>
    </div>

@endsection
