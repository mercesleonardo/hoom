@extends('client.core.head')

@section('content')
    <section class="sec-blog" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-blog">
            <div class="logo-hoom-blog">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
            <div class="rede-lateral-blog">
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
        <div class="conteudo-blog">
            <div class="engloba-titulo-blog">
                <div class="ld1-titulo-blog">
                    <h4 class="titulo-principal-blog">
                        <a class="esq-blog" href="{{route('client.dashboard.blogs')}}">
                            <img class="img-esq-blog" src="{{asset('images/esq.png')}}" alt="">
                        </a>Blog
                    </h4>
                </div>
                <div class="ld2-titulo-blog">
                    <a href="{{ route('client.dashboard')}}">
                        <img src="{{asset('images/icone-home.png')}}" alt="">
                    </a>
                </div>
            </div>

            <div class="conteudo-box-blog">
                <div class="box-blog">

                    <div class="image-blog">
                        <img src="{{asset('storage/'.$blog->path_image)}}" alt="">
                    </div>
                    <div class="descricao-blog">
                        <h2 class="titulo-blog">{{$blog->title}}</h2>
                        <h4 class="subtitulo-blog">{{$blog->description}}</h4>
                        <p class="texto-blog">
                            {!!$blog->text!!}
                        </p>
                        <div class="pessoa-blog">
                            <div class="perfil-blog">
                                <img class="img-pessoa-blog" src="{{asset('storage/'.$blog->path_image_author)}}" alt="">
                                <div class="descricao-pessoa-blog">
                                    <h4 class="titulo-pessoa-blog">{{$blog->author}}</h4>
                                    <span class="minutos-blog">{{$blog->created_at}}</span>
                                </div>
                            </div>
                            {{-- <div class="curtidas-blog">
                                <img class="coracao-blog" src="images/heart.png" alt="">
                                <span class="numero-curtidas-blog">325</span>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
            {{-- <a class="mais-blog" href="">
                +
            </a> --}}
        </div>
    </section>
@endsection
