@extends('Master.app')
@section('content')
    <form>
        <div class="mb-3">
            <label for="name_report" class="form-label">Nome da Reportagem</label>
            <input type="text" class="form-control" id="name_report">
            <div id="name_report" class="form-text">Lembre-se Nomes chamativos são mais interessantes!</div>
        </div>
        <div class="mb-3">
            <label for="report" class="form-label">Digite a Reportagem (Cuidado com erros de ortografia</label>
            <textarea class="form-control" id="report" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Postar</button>
    </form>
@endsection
