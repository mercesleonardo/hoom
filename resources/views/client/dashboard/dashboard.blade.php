@extends('client.core.head')

@section('content')
    <section class="sec-dashboard" style="background-image:url(images/pd-dashboard.png);">
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
        <div class="conteudo-dashboard">
            <div class="engloba-titulo">
                <div class="ld1-titulo">
                    <h4 class="titulo">Olá Daniel</h4>
                    <p>Segunda Feira, 22/03/2021</p>
                </div>
                <div class="ld2-titulo">
                    <a href="">
                        <img src="images/icone-home.png" alt="">
                    </a>
                </div>
            </div>
            <div class="conteudo-box">
                <div class="box-dashboard">
                    <a href="projetos.html">
                        <img src="images/icone-dashboard1.png" alt="">
                        <h4 class="titulo">Meus Projetos</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="aprovacao.html">
                        <img src="images/icone-dashboard2.png" alt="">
                        <h4 class="titulo">Aprovações</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="solicitacao.html">
                        <img src="images/icone-dashboard3.png" alt="">
                        <h4 class="titulo">Solicitação</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="atendimento.html">
                        <img src="images/icone-dashboard4.png" alt="">
                        <h4 class="titulo">Atendimento</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="arquivo.html">
                        <img src="images/icone-dashboard5.png" alt="">
                        <h4 class="titulo">Enviar Arquivos</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="blogs.html">
                        <img src="images/icone-dashboard6.png" alt="">
                        <h4 class="titulo">BLOG</h4>
                    </a>
                </div>
                <div class="box-dashboard">
                    <a href="">
                        <span class="mais-box">
                            +
                        </span>
                    </a>
                </div>
            </div>
            <a class="mais" href="">
                +
            </a>
        </div>
    </section>
@endsection
