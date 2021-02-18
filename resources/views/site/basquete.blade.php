@extends('Master.app')
@section('content')
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">NBA: Curry perto de igualar Jordan</h1>
            <p class="lead my-3">Stephen Curry enfileira dez jogos com mais de 25 pontos e 50% de aproveitamento e fica perto da marca de Michael Jordan;</p>
            <p >Jogo 16/02/2021</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Lakers</strong>
                    <h3 class="mb-0">Anthony Davis</h3>
                    <div class="mb-1 text-muted">12 Fev</div>
                    <p class="card-text mb-auto">NBA: Lakers revela plano de retorno para Anthony Davis</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://www.lakersbrasil.com/data/posts/noticia-secundaria_602110cf7e31d_quadrada.jpg" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Doação</strong>
                    <h3 class="mb-0">Michael Jordan</h3>
                    <div class="mb-1 text-muted">16 Fev</div>
                    <p class="mb-auto">Michael J. vai doar mais de R$ 50 milhões para... construção de clínicas médicas nos EUA</p>

                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="data:image/jpeg;base64,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" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                From the Firehose
            </h3>

            <article class="blog-post">
                <h2 class="blog-post-title">Segunda Semana NBA</h2>
                <p>Recorde de Doncic, cravada de LeBron no último segundo e lesão de Davis marcam rodada da NBA</p>
                <hr>
                <p>Luka Doncic anota 44 pontos em derrota do Dallas, LeBron James faz uma enterrada após correr a quadra toda e Lakers vê um de seus astros, Anthony Davis, sair com uma lesão no calcanhar</p>
                <blockquote>
                    <p>Pior ainda para os Lakers, que ainda viram um de seus astros, Anthony Davis, sair com uma lesão no tendão de aquiles. Ainda não se sabe a gravidade do que aconteceu, mas o jogador vai passar por exames nesta segunda-feira.</p>
                </blockquote>
                <p>Trying to connect the dots, don't know what to tell my boss. Before you met me I was alright but things were kinda heavy. You just gotta ignite the light and let it shine. Glitter all over the room <em>pink flamingos</em> in the pool. </p>
                <h2>118 pontos em três jogos</h2>
                <p>Luka Doncic anotou 118 pontos para o Dallas nos últimos três jogos, em uma média de quase 40 por partida. É uma marca inédita na história da franquia. No domingo, contra o Portland, foram 44.</p>
                <BR>

            </article><!-- /.blog-post -->

            <article class="blog-post">
                <h2 class="blog-post-title">Papai LeBron crava no segundo final</h2>

                <p>Faltando quatro segundos para o fim do primeiro tempo na partida dos Lakers, LeBron James engatou a quinta marcha e foi para a enterrada. Ninguém ousou pará-lo.</p>
                <blockquote>
                    <p>Anthony Davis saiu mancando, praticamente sem conseguir andar após sentir uma fisgada no calcanhar. Ainda não se sabe a gravidade do problema.</p>
                </blockquote>

            </article><!-- /.blog-post -->


            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div>
    </div>
@endsection
