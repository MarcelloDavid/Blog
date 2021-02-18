@extends('Master.app')

@section('content')
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Esporte</h1>
            <p class="lead my-3">Blog com informações de esportes </p>

        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Futebol</strong>
                    <h3 class="mb-0">Champions</h3>
                    <div class="mb-1 text-muted">FEV 15</div>
                    <p class="card-text mb-auto">Neymar Machuca contra Barcelona</p>
                    <a href="/Futebol" class="stretched-link">ler mais </a>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Basquete</strong>
                    <h3 class="mb-0">NBA</h3>
                    <div class="mb-1 text-muted">Fev 15</div>
                    <p class="mb-auto">Quase Quebra de Records já no incio do ano.</p>
                    <a href="/Basquete" class="stretched-link">ler mais </a>
                </div>
            </div>
        </div>

    </div><!-- /.row -->
@endsection
