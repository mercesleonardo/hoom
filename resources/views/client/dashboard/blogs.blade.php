@extends('client.core.head')

@section('content')
    <section class="sec-blogs" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-blogs">
            <div class="logo-hoom-blogs">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
            <div class="rede-lateral-blogs">
                <a href="https://www.instagram.com/hoominterativa/" target="blank">
                    <img src="{{ asset('images/icone-rede1.png') }}" alt="Instagram">
                </a>
                <a href="https://pt-br.facebook.com/hoominterativa/" target="blank">
                    <img src="{{ asset('images/icone-rede2.png') }}" alt="Facebook">
                </a>
                <a href="http://web.whatsapp.com/send?phone=5571996355333" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/icone-rede4.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="conteudo-blogs">
            <div class="engloba-titulo-blogs">
                <div class="ld1-titulo-blogs">
                    <h4 class="titulo-principal-blogs">
                        <a class="esq-blogs" href="{{ route('client.dashboard') }}">
                            <img class="img-esq-blogs" src="{{asset('images/esq.png')}}" alt="">
                        </a>Blogs
                    </h4>
                </div>
                <div class="ld2-titulo-blogs">
                    <a href="{{ route('client.dashboard')}}">
                        <img src="{{asset('images/icone-home.png')}}" alt="">
                    </a>
                </div>
            </div>

            <div class="conteudo-box-blogs">
                @foreach ($blogs as $itens)
                    <div class="box-blogs">
                        <a href="{{ route('client.dashboard.blog', ['blog'=>$itens->id]) }}">
                            <div class="image-blogs">
                                <img src="{{asset('storage/'.$itens->path_image)}}" alt="">
                            </div>
                            <div class="descricao-blogs">
                                <h2 class="titulo-blogs">{{$itens->title}}</h2>
                                <h4 class="subtitulo-blogs">{{$itens->description}}</h4>
                                <p></p>
                                <div class="pessoa-blogs">
                                    <div class="perfil-blogs">
                                        <img class="img-pessoa-blogs" src="{{asset('storage/'.$itens->path_image_author)}}" alt="">
                                        <div class="descricao-pessoa-blogs">
                                            <h4 class="titulo-pessoa-blogs">{{$itens->author}}</h4>
                                            <span class="minutos-blogs">{{Carbon\Carbon::parse($itens->created_at)->format('d/m/Y')}}</span>
                                        </div>
                                    </div>
                                    {{-- <div class="curtidas-blogs">
                                        <img class="coracao-blogs" src="images/heart.png" alt="">
                                        <span class="numero-curtidas-blogs">325</span>
                                    </div> --}}
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
            {{-- <a class="mais-blogs" href="">
                +
            </a> --}}
        </div>
    </section>
@endsection
