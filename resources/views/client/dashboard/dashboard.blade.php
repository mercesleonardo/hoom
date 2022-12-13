@extends('client.core.head')

@section('content')
    <section class="sec-dashboard" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-dashboard">
            <div class="logo-hoom-dashboard">
                    <img src="images/logo.png" alt="">
            </div>
            <div class="rede-lateral-dashboard">
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
        <div class="conteudo-dashboard">
            <div class="engloba-titulo-dashboard">
                <div class="ld1-titulo-dashboard">
                    <h4 class="titulo-dashboard">Olá {{$names}}</h4>
                    <p>Segunda Feira, 22/03/2021</p>
                </div>
                <div class="ld2-titulo-dashboard">
                    <a href="{{route('logout')}}" class="btn-logout">
                        <img src="images/icone-home.png">
                    </a>
                </div>
            </div>
            <div class="conteudo-box-dashboard">
                <div class="box-dashboard">
                    <a href="#">
                        <img src="images/icone-dashboard1.png" alt="">
                        <h4 class="titulo-dashboard">Meus Projetos</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="#">
                        <img src="images/icone-dashboard2.png" alt="">
                        <h4 class="titulo-dashboard">Aprovações</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="#">
                        <img src="images/icone-dashboard3.png" alt="">
                        <h4 class="titulo-dashboard">Solicitação</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="#">
                        <img src="images/icone-dashboard4.png" alt="">
                        <h4 class="titulo-dashboard">Atendimento</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="#">
                        <img src="images/icone-dashboard5.png" alt="">
                        <h4 class="titulo-dashboard">Enviar Arquivos</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="#">
                        <img src="images/icone-dashboard6.png" alt="">
                        <h4 class="titulo-dashboard">BLOG</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="">
                        <span class="mais-box-dashboard">
                            +
                        </span>
                    </a>
                </div>
            </div>
            <a class="mais-dashboard" href="">
                +
            </a>
        </div>
    </section>
@endsection
