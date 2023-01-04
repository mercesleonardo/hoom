@extends('client.core.head')

@section('content')
    <section class="sec-projetos" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-projects">
            <div class="logo-hoom-projects">

                <img src="images/logo.png" alt="">

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
                    <img src="images/icone-home.png" alt="">
                </div>
            </div>
            <div class="conteudo-box-projetos">
                @foreach ($projects as $itens)
                    <div class="box-projetos">
                        <div class="ld1-projetos">
                            <h4 class="titulo-projects"><img src="images/icone-projeto.png"
                                    alt="">{{ $itens->name }}
                            </h4>
                            <span class="separador-projects"></span>
                            <div class="btn-projetos">
                                <a href="{{ route('project', ['project'=>$itens->id]) }}">Ver projeto</a>
                            </div>
                        </div>
                        <div class="ld2-projetos">
                            <div class="btn-status-projects">
                                <img src="images/icone-status1.png" alt="">
                                <h4 class="titulo-projects">
                                    @switch($itens->status)
                                        @case(1)
                                            <span>A fazer</span>
                                        @break

                                        @case(2)
                                            <span>Em produção</span>
                                        @break

                                        @case(3)
                                            <span>Aguardando</span>
                                        @break

                                        @case(4)
                                            <span>Stand by</span>
                                        @break

                                        @case(5)
                                            <span>Travado</span>
                                        @break

                                        @case(6)
                                            <span>Parado</span>
                                        @break

                                        @case(7)
                                            <span>Em aprovação</span>
                                        @break

                                        @case(8)
                                            <span>Ajustes</span>
                                        @break

                                        @case(9)
                                            <span>Concluído</span>
                                        @break
                                    @endswitch
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="mais-projects" href="">
                +
            </a>
        </div>
    </section>
@endsection
