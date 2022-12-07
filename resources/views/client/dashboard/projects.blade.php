@extends('client.core.head')

@section('content')
    <section class="sec-projetos" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-projects">
            <div class="logo-hoom-projects">
                <a href="">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="rede-lateral-projects">
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
        <div class="conteudo-projetos">
            <div class="engloba-titulo-projects">
                <div class="ld1-titulo-projects">
                    <h4 class="titulo-projects">
                        <a class="esq-projects" href="{{ route('dashboard') }}">
                            <img class="img-esq-projects" src="images/esq.png" alt="">
                        </a>Meus Projetos
                    </h4>
                </div>
                <div class="ld2-titulo-projects">
                    <a href="">
                        <img src="images/icone-home.png" alt="">
                    </a>
                </div>
            </div>
            <div class="conteudo-box-projetos">
                <div class="box-projetos">
                    <div class="ld1-projetos">
                        <h4 class="titulo-projects"><img src="images/icone-projeto.png" alt="">Desenvolvimento de site
                            Dinâmico
                        </h4>
                        <span class="separador-projects"></span>
                        <div class="btn-projetos">
                            <a href="{{ route('project') }}">Ver projeto</a>
                        </div>
                    </div>
                    <div class="ld2-projetos">
                        <div class="btn-status-projects">
                            <img src="images/icone-status1.png" alt="">
                            <h4 class="titulo-projects">Em Produção</h4>
                        </div>
                    </div>
                </div>
                <div class="box-projetos">
                    <div class="ld1-projetos">
                        <h4 class="titulo-projects"><img src="images/icone-projeto.png" alt="">Desenvolvimento de site
                            Dinâmico
                        </h4>
                        <span class="separador-projects"></span>
                        <div class="btn-projetos">
                            <a href="{{ route('project') }}">Ver projeto</a>
                        </div>
                    </div>
                    <div class="ld2-projetos">
                        <div class="btn-status-projects">
                            <img src="images/icone-status2.png" alt="">
                            <h4 class="titulo-projects">Em Produção</h4>
                        </div>
                    </div>
                </div>
                <div class="box-projetos">
                    <div class="ld1-projetos">
                        <h4 class="titulo-projects">
                            <img src="images/icone-projeto.png" alt="">Desenvolvimento de site Dinâmico
                        </h4>
                        <span class="separador-projects"></span>
                        <div class="btn-projetos">
                            <a href="{{ route('project') }}">Projeto Parado</a>
                        </div>
                    </div>
                    <div class="ld2-projetos">
                        <div class="btn-status-projects">
                            <img src="images/icone-status3.png" alt="">
                            <h4 class="titulo-projects">Concluído</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a class="mais-projects" href="">
                +
            </a>
        </div>
    </section>
@endsection
