@extends('client.core.head')

@section('content')
    <section class="sec-signup" style="background-image:url(images/bg-padrao.png);">
        <div class="topo-lateral-register">
            <div class="logo-hoom-register">
                <a href="{{ route('client.home') }}">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="rede-lateral-register">
                <a href="">
                    <img src="{{asset('images/icone-rede1.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/icone-rede2.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('images/icone-rede3.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="conteudo-register">
            <div class="engloba-titulo-register">
                <h4 class="titulo-register">Área de Cadastro</h4>
            </div>
            <div class="acessar-register">

                {{-- <section id="task_section">
                    @if ($errors->any())
                        <ul class="alert alert-error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </section> --}}

                <form action="{{ route('client.register.store') }}" method="POST">
                    @csrf

                    <label for="client">
                        <input type="hidden" name="options" id="client" value="0">
                    </label>
                    {{-- <label for="admin">
                        <input type="hidden" name="admin" id="admin" value="0">
                    </label> --}}
                    <label for="name">
                        <input type="text" name="name" id="name" placeholder="Nome Completo"
                            value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="phone">
                        <input type="text" name="phone" id="phone" placeholder="(XX) XXXXX-XXXX"
                            value="{{ old('phone') }}" maxlength="15" onkeyup="handlePhone(event)" class="@error('phone') is-invalid @enderror">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="E-mail"value="{{ old('email') }}"
                            class="@error('email') is-invalid @enderror">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="password">
                        <input type="password" name="password" id="password" placeholder="Crie sua Senha"
                            class="@error('password') is-invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                    <label for="password_confirmation">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirme sua Senha" class="@error('password') is-invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>

                    <button type="submit" class="btn-acessar-register">Cadastrar</button>
                </form>

                <div class="btn-criar-register">
                    <a href="{{ route('client.login') }}"><span class="criar">Ou</span>Acessar minha conta</a>
                </div>
            </div>
        </div>
    </section>
@endsection
