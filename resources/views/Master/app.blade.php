<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://127.0.0.1:8000/style.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">
    <header class="blog-header py-3">
        <div class="nav-scroller py-1 mb-3">
            <div class="nav d-flex justify-content-between">
                <a class="blog-header-logo text-dark text-center link-secondary" href="/">Esporte</a>

                @if (\Illuminate\Support\Facades\Auth::guest())
                    <a class="btn btn-sm btn-outline-secondary link-secondary" href="{{ route('home') }}">Login</a>

                @else
                    <a class="btn btn-sm btn-outline-secondary link-secondary" href="/dashboard">DashBoard</a>
                    <a class="btn btn-sm btn-outline-secondary link-secondary" href="{{ route('logout') }}">Sair</a>
                @endif
            </div>

        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="{{route('site.Futebol')}}">Futebol</a>
            <a class="p-2 link-secondary" href="{{route('site.Basquete')}}">Basquete</a>
            <a class="p-2 link-secondary" href="{{route('site.Volley')}}">Volley</a>
        </nav>
    </div>
</div>  <!-- isso aqui tinha que ser um componente separado, header e nav -->

<main class="container">
    @yield('content')

</main><!-- /.container -->


</body>
<footer class="blog-footer">
    <p>Construido com <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://www.linkedin.com/in/marcello-david-gilmour-87b7a918a/">@Marcello</a>.</p>
    <p>
        <a href="/">Volta para inicio</a>
    </p>
</footer>
</html>
