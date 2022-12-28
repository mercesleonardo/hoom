@extends('client.core.head')

@section('content')
    <section class="sec-blog" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-blog">
            <div class="logo-hoom-blog">
                <img src="images/logo.png" alt="">
            </div>
            <div class="rede-lateral-blog">
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
        <div class="conteudo-blog">
            <div class="engloba-titulo-blog">
                <div class="ld1-titulo-blog">
                    <h4 class="titulo-principal-blog">
                        <a class="esq-blog" href="{{route('client.dashboard.blogs')}}">
                            <img class="img-esq-blog" src="images/esq.png" alt="">
                        </a>Blog
                    </h4>
                </div>
                <div class="ld2-titulo-blog">
                        <img src="images/icone-home.png" alt="">
                </div>
            </div>

            <div class="conteudo-box-blog">
                <div class="box-blog">

                    <div class="image-blog">
                        <img src="images/blog.png" alt="">
                    </div>
                    <div class="descricao-blog">
                        <h2 class="titulo-blog">Marketing Digital</h2>
                        <h4 class="subtitulo-blog">Como pesquisar palavras-chave
                            No google ADS</h4>
                        <p class="texto-blog">
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
                        <div class="pessoa-blog">
                            <div class="perfil-blog">
                                <img class="img-pessoa-blog" src="" alt="">
                                <div class="descricao-pessoa-blog">
                                    <h4 class="titulo-pessoa-blog">Mateus Matos</h4>
                                    <span class="minutos-blog">2 minutes ago</span>
                                </div>
                            </div>
                            <div class="curtidas-blog">
                                <img class="coracao-blog" src="images/heart.png" alt="">
                                <span class="numero-curtidas-blog">325</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a class="mais-blog" href="">
                +
            </a>
        </div>
    </section>
@endsection
