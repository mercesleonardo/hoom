@extends('client.core.head')

@section('content')
    <section class="sec-signin" style="background-image:url(images/bg-padrao.png);">
        <div class="topo-lateral">
            <div class="logo-hoom">
                <a href="{{ route('home') }}">
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
        <div class="conteudo">
            <div class="engloba-titulo">
                <h4 class="titulo">Área de Cadastro</h4>
            </div>
            <div class="acessar">

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <label for="name">
                        <input type="text" name="name" id="name" placeholder="Nome" value="{{ old('name') }}"
                            required>
                    </label>
                    <label for="phone">
                        <input type="text" name="phone" id="phone" placeholder="Telefone"
                            value="{{ old('phone') }}" required>
                    </label>
                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}"
                            required>
                    </label>
                    <label for="password">
                        <input type="password" name="password" id="password" placeholder="Crie sua Senha" required>
                    </label>
                    <label for="password_confirmation">
                        <input type="password" name="password" id="password" placeholder="Confirme sua Senha" required>
                    </label>

                    <button type="submit" class="btn-acessar">Cadastrar</button>
                </form>

                <div class="btn-criar">
                    <a href="{{route('login')}}"><span class="criar">Ou</span>Acessar minha conta</a>
                </div>
            </div>
        </div>
    </section>
@endsection
