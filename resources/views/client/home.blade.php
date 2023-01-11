@extends('client.core.head')


@section('content')
    <section class="sec-home" style="background-image:url(images/bg-padrao.png);">
        <div class="topo-lateral-home">
            <div class="logo-hoom-home">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="rede-lateral-home">
                <a href="">
                    <img src="{{ asset('images/icone-rede1.png') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('images/icone-rede2.png') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('images/icone-rede3.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="conteudo-home">
            <div class="carrossel-home">
                <div class="image-home">
                    <img src="{{ asset('images/img-home.png') }}" alt="">
                </div>
            </div>
            <div class="texto-home">
                <h4 class="titulo-home">Bem vindo<br>ao Novo!</h4>
                <p>
                    Todos os seus projetos em um só lugar!

                </p>
            </div>
            <div class="btn-acessar-home">
                <a href="{{ route('client.login') }}">Acessar meus Projetos</a>
            </div>
            <div class="btn-criar-home">
                <a href="{{ route('client.register') }}"><span class="criar">Ou</span>Criar uma Conta</a>
            </div>
        </div>
    </section>
@endsection
