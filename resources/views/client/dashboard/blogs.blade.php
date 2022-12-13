@extends('client.core.head')

@section('content')
    <section class="sec-blogs" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-blogs">
            <div class="logo-hoom-blogs">
                <img src="images/logo.png" alt="">
            </div>
            <div class="rede-lateral-blogs">
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
        <div class="conteudo-blogs">
            <div class="engloba-titulo-blogs">
                <div class="ld1-titulo-blogs">
                    <h4 class="titulo-principal-blogs">
                        <a class="esq-blogs" href="{{ route('dashboard') }}">
                            <img class="img-esq-blogs" src="images/esq.png" alt="">
                        </a>Blogs
                    </h4>
                </div>
                <div class="ld2-titulo-blogs">
                    <img src="images/icone-home.png" alt="">
                </div>
            </div>

            <div class="conteudo-box-blogs">
                <div class="box-blogs">
                    <a href="{{route('blog')}}">
                        <div class="image-blogs">
                            <img src="images/blog.png" alt="">
                        </div>
                        <div class="descricao-blogs">
                            <h2 class="titulo-blogs">Marketing Digital</h2>
                            <h4 class="subtitulo-blogs">Como pesquisar palavras-chave
                                No google ADS</h4>
                            <p></p>
                            <div class="pessoa-blogs">
                                <div class="perfil-blogs">
                                    <img class="img-pessoa-blogs" src="" alt="">
                                    <div class="descricao-pessoa-blogs">
                                        <h4 class="titulo-pessoa-blogs">Mateus Matos</h4>
                                        <span class="minutos-blogs">2 minutes ago</span>
                                    </div>
                                </div>
                                <div class="curtidas-blogs">
                                    <img class="coracao-blogs" src="images/heart.png" alt="">
                                    <span class="numero-curtidas-blogs">325</span>
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="box-blogs">
                    <a href="{{route('blog')}}">
                        <div class="image-blogs">
                            <img src="images/blog.png" alt="">
                        </div>
                        <div class="descricao-blogs">
                            <h2 class="titulo-blogs">Marketing Digital</h2>
                            <h4 class="subtitulo-blogs">Como pesquisar palavras-chave
                                No google ADS</h4>
                            <p></p>
                            <div class="pessoa-blogs">
                                <div class="perfil-blogs">
                                    <img class="img-pessoa"-blogs src="" alt="">
                                    <div class="descricao-pessoa-blogs">
                                        <h4 class="titulo-pessoa-blogs">Mateus Matos</h4>
                                        <span class="minutos-blogs">2 minutes ago</span>
                                    </div>
                                </div>
                                <div class="curtidas-blogs">
                                    <img class="coracao-blogs" src="images/heart.png" alt="">
                                    <span class="numero-curtidas-blogs">325</span>
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                <div class="box-blogs">
                    <a href="{{route('blog')}}">
                        <div class="image-blogs">
                            <img src="images/blog.png" alt="">
                        </div>
                        <div class="descricao-blogs">
                            <h2 class="titulo-blogs">Marketing Digital</h2>
                            <h4 class="subtitulo-blogs">Como pesquisar palavras-chave
                                No google ADS</h4>
                            <p></p>
                            <div class="pessoa-blogs">
                                <div class="perfil-blogs">
                                    <img class="img-pessoa"-blogs src="" alt="">
                                    <div class="descricao-pessoa-blogs">
                                        <h4 class="titulo-pessoa-blogs">Mateus Matos</h4>
                                        <span class="minutos-blogs">2 minutes ago</span>
                                    </div>
                                </div>
                                <div class="curtidas-blogs">
                                    <img class="coracao-blogs" src="images/heart.png" alt="">
                                    <span class="numero-curtidas-blogs">325</span>
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

            </div>
            <a class="mais-blogs" href="">
                +
            </a>
        </div>
    </section>
@endsection
