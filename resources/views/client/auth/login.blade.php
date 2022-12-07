@extends('client.core.head')

@section('content')

<section class="sec-signin" style="background-image:url(images/bg-padrao.png);">
    <div class="topo-lateral">
        <div class="logo-hoom">
            <a href="{{route('home')}}">
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
            <h4 class="titulo">Área do cliente</h4>
            <p>Meus Projetos</p>
        </div>
        <div class="acessar">
            <h4 class="titulo">Acessar</h4>
            <form action="">
                <input class="input" type="text" placeholder="Nome">
                <input class="input" type="text" placeholder="Senha">
                <button class="btn-acessar">Acessar Sistema</button>
            </form>

            <div class="btn-criar">
                <a href="signup.html"><span class="criar">Ou</span>Criar uma Conta</a>
            </div>
        </div>
    </div>
</section>
@endsection


