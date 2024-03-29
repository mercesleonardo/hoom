@extends('client.core.head')

@section('content')
    <section class="sec-projetos" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-projects">
            <div class="logo-hoom-projects">

                <img src="{{ asset('images/logo.png') }}" alt="">

            </div>
            <div class="rede-lateral-projects">
                <a href="https://www.instagram.com/hoominterativa/" target="blank">
                    <img src="{{ asset('images/icone-rede1.png') }}" alt="Instagram">
                </a>
                <a href="https://pt-br.facebook.com/hoominterativa/" target="blank">
                    <img src="{{ asset('images/icone-rede2.png') }}" alt="Facebook">
                </a>
                <a href="http://web.whatsapp.com/send?phone=5571996355333" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/icone-rede4.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="conteudo-projetos">
            <div class="engloba-titulo-projects">
                <div class="ld1-titulo-projects">
                    <h4 class="titulo-projects">
                        <a class="esq-projects" href="{{ route('client.dashboard') }}">
                            <img class="img-esq-projects" src="{{ asset('images/esq.png') }}" alt="">
                        </a>Meus Projetos
                    </h4>
                </div>
                <div class="ld2-titulo-projects">
                    <a href="{{ route('client.dashboard') }}">
                        <img src="{{ asset('images/icone-home.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="conteudo-box-projetos">
                @if ($projects->count())
                    @foreach ($projects as $itens)
                        <div class="box-projetos">
                            <div class="ld1-projetos">
                                <h4 class="titulo-projects"><img src="images/icone-projeto.png"
                                        alt="">{{ $itens->name }}
                                </h4>
                                <span class="separador-projects"></span>
                                <div class="btn-projetos">
                                    <a href="{{ route('client.project', ['project' => $itens->id]) }}">Ver projeto</a>
                                </div>
                            </div>
                            <div class="ld2-projetos">
                                <div class="btn-status-projects">

                                    @switch($itens->status)
                                        @case(1)
                                            <img src="{{ asset('images/icone-status2.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>A fazer</span>
                                            </h4>
                                        @break

                                        @case(2)
                                            <img src="{{ asset('images/icone-status1.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Em produção</span>
                                            </h4>
                                        @break

                                        @case(3)
                                            <img src="{{ asset('images/icone-status2.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Aguardando</span>
                                            </h4>
                                        @break

                                        @case(4)
                                            <img src="{{ asset('images/icone-status2.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Stand by</span>
                                            </h4>
                                        @break

                                        @case(5)
                                            <img src="{{ asset('images/icone-status2.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Travado</span>
                                            </h4>
                                        @break

                                        @case(6)
                                            <img src="{{ asset('images/icone-status2.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Parado</span>
                                            </h4>
                                        @break

                                        @case(7)
                                            <img src="{{ asset('images/icone-status2.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Em aprovação</span>
                                            </h4>
                                        @break

                                        @case(8)
                                            <img src="{{ asset('images/icone-status1.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Ajustes</span>
                                            </h4>
                                        @break

                                        @case(9)
                                            <img src="{{ asset('images/icone-status3.png') }}" alt="">
                                            <h4 class="titulo-projects">
                                                <span>Concluído</span>
                                            </h4>
                                        @break
                                    @endswitch

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="whatsapp-link">Você ainda não tem projetos cadastrados. Entre em contato com a central <a href="http://web.whatsapp.com/send?phone=5571996355333" target="_blank"
                        rel="noopener noreferrer"><span>Clicando aqui</span></a></p>
                @endif

            </div>
            {{-- <a class="mais-projects" href="">
                +
            </a> --}}
        </div>
    </section>
@endsection
