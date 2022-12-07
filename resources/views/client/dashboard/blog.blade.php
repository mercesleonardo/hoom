@extends('client.core.head')

@section('content')
    <section class="sec-blogs" style="background-image:url(images/pd-dashboard.png);">
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
        <div class="conteudo-blogs">
            <div class="engloba-titulo">
                <div class="ld1-titulo">
                    <h4 class="titulo-principal">
                        <a class="esq" href="blogs.html">
                            <img class="img-esq" src="images/esq.png" alt="">
                        </a>Blog
                    </h4>
                </div>
                <div class="ld2-titulo">
                    <a href="">
                        <img src="images/icone-home.png" alt="">
                    </a>
                </div>
            </div>

            <div class="conteudo-box-blogs">
                <div class="box-blog">

                    <div class="image">
                        <img src="images/blog.png" alt="">
                    </div>
                    <div class="descricao">
                        <h2 class="titulo">Marketing Digital</h2>
                        <h4 class="subtitulo">Como pesquisar palavras-chave
                            No google ADS</h4>
                        <p class="texto">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis tempus. Donec vitae sapien ut
                            libero venenatis tempus. Donec vitae sapien ut libero venenatis parturient montes, nascetur
                            ridiculus mus.

                            Donec quam felis nte tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis Leo. Sed fringilla
                            mauris

                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus.

                            Donec quam felis nte tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                            mauris


                        </p>
                        <div class="pessoa">
                            <div class="perfil">
                                <img class="img-pessoa" src="" alt="">
                                <div class="descricao-pessoa">
                                    <h4 class="titulo-pessoa">Mateus Matos</h4>
                                    <span class="minutos">2 minutes ago</span>
                                </div>
                            </div>
                            <div class="curtidas">
                                <img class="coracao" src="images/heart.png" alt="">
                                <span class="numero-curtidas">325</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a class="mais" href="">
                +
            </a>
        </div>
    </section>
@endsection
