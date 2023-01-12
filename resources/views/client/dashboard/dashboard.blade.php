@extends('client.core.head')

@section('content')
    <section class="sec-dashboard" style="background-image:url(images/pd-dashboard.png);">
        <div class="topo-lateral-dashboard">
            <div class="logo-hoom-dashboard">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
            <div class="rede-lateral-dashboard">
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
        <div class="conteudo-dashboard">
            <div class="engloba-titulo-dashboard">
                <div class="ld1-titulo-dashboard">
                    <h4 class="titulo-dashboard">Olá, {{ $names }}</h4>
                    {{-- <p>{{ strftime('%A, %d de %B de %Y', strtotime('today')) }}</p> --}}
                    <p>{{Carbon\Carbon::today()->formatLocalized('%d de %b de %Y')}}</p>


                </div>
                <div class="ld2-titulo-dashboard">
                    <a href="{{route('client.logout')}}" class="logout-button">
                        <span>Sair</span>
                        {{-- <img src="images/icone-home.png"> --}}
                    </a>
                </div>
            </div>
            <div class="conteudo-box-dashboard">
                <div class="box-dashboard">
                    <a href="{{ route('client.projects') }}">
                        <img src="{{asset('images/icone-dashboard1.png')}}" alt="">
                        <h4 class="titulo-dashboard">Meus Projetos</h4>
                    </a>
                </div>
                @foreach ( $links as $link)


                <div class="box-dashboard">
                    <a href="{{route('client.link.show', ['link'=>$link->id])}}">
                        <img src="{{asset('storage/'.$link->path_image)}}" alt="">
                        <h4 class="titulo-dashboard">{{$link->name}}</h4>
                    </a>
                </div>

                @endforeach

                <div class="box-dashboard">
                    <a href="{{route('client.dashboard.blogs')}}">
                        <img src="{{asset('images/icone-dashboard6.png')}}" alt="">
                        <h4 class="titulo-dashboard">BLOG</h4>
                    </a>
                </div>
                {{-- <div class="box-dashboard">
                    <a href="">
                        <span class="mais-box-dashboard">
                            +
                        </span>
                    </a>
                </div> --}}
            </div>
            {{-- <a class="mais-dashboard" href="">
                +
            </a> --}}
        </div>
    </section>
@endsection
