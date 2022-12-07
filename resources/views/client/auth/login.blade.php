@extends('client.core.head')

@section('content')
    <section class="sec-signin" style="background-image:url(images/bg-padrao.png);">
        <div class="topo-lateral-login">
            <div class="logo-hoom-login">
                <a href="{{ route('home') }}">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="rede-lateral-login">
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
        <div class="conteudo-login">
            <div class="engloba-titulo-login">
                <h4 class="titulo-login">Área do cliente</h4>
                <p>Meus Projetos</p>
            </div>
            <div class="acessar-login">
                <h4 class="titulo-login">Acessar</h4>
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="Insira seu email"
                            value="{{ old('email') }}">
                    </label>

                    <label for="password">
                        <input type="password" name="password" id="password" placeholder="Insira sua senha">
                    </label>
                    <button type="submit" class="btn-acessar-login">Acessar Sistema</button>
                </form>

                <div class="btn-criar-login">
                    <a href="{{ route('register') }}"><span class="criar">Ou</span>Criar uma Conta</a>
                </div>
            </div>
        </div>
    </section>
@endsection
