@extends('client.core.head')

@section('content')
    <section class="sec-projeto" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral">
            <div class="logo-hoom">
                <a href="">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="rede-lateral">
                <a href="">
                    <img src="images/icone-rede1.png" alt="">
                </a>
                <a href="">
                    <img src="images/icone-rede2.png" alt="">
                </a>
                <a href="">
                    <img src="images/icone-rede3.png" alt="">
                </a>
            </div>
        </div>
        <div class="conteudo-projeto">
            <div class="engloba-titulo">
                <div class="ld1-titulo">
                    <h4 class="titulo">
                        <a class="esq" href="dashboard.html">
                            <img class="img-esq" src="images/esq.png" alt="">
                        </a>Meus Projetos
                    </h4>
                </div>
                <div class="ld2-titulo">
                    <a href="">
                        <img src="images/icone-home.png" alt="">
                    </a>
                </div>
            </div>
            <div class="conteudo-box-projeto">
                <div class="box-projeto">
                    <div class="ld1-projeto">
                        <h4 class="titulo"><img src="images/icone-projeto.png" alt="">Desenvolvimento de site
                            Dinâmico
                        </h4>
                        <span class="separador"></span>
                        <div class="btn-projeto">
                            <a href="projeto.html">Ver projeto</a>
                        </div>
                    </div>
                    <div class="ld2-projeto">
                        <div class="btn-status">
                            <img src="images/icone-status1.png" alt="">
                            <h4 class="titulo">Em Produção</h4>
                        </div>
                    </div>
                </div>
                <div class="box-projeto">
                    <div class="ld1-projeto">
                        <h4 class="titulo"><img src="images/icone-projeto.png" alt="">Desenvolvimento de site
                            Dinâmico
                        </h4>
                        <span class="separador"></span>
                        <div class="btn-projeto">
                            <a href="projeto.html">Ver projeto</a>
                        </div>
                    </div>
                    <div class="ld2-projeto">
                        <div class="btn-status">
                            <img src="images/icone-status2.png" alt="">
                            <h4 class="titulo">Em Produção</h4>
                        </div>
                    </div>
                </div>
                <div class="box-projeto">
                    <div class="ld1-projeto">
                        <h4 class="titulo">
                            <img src="images/icone-projeto.png" alt="">Desenvolvimento de site Dinâmico
                        </h4>
                        <span class="separador"></span>
                        <div class="btn-projeto">
                            <a href="projeto.html">Projeto Parado</a>
                        </div>
                    </div>
                    <div class="ld2-projeto">
                        <div class="btn-status">
                            <img src="images/icone-status3.png" alt="">
                            <h4 class="titulo">Concluído</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a class="mais" href="">
                +
            </a>
        </div>
    </section>
@endsection
