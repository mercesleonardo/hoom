@extends('client.core.head')

@section('content')
    <section class="sec-projeto">
        <div class="conteudo-projeto">
            <div class="engloba-titulo">
                <div class="ld1-titulo">
                    <h4 class="titulo">
                        <a class="esq" href="{{ route('dashboard') }}">
                            <img class="img-esq" src="images/esq.png" alt="">
                        </a>Aprovações
                    </h4>
                </div>
                <div class="ld2-titulo">
                    <img src="images/icone-home.png" alt="">
                </div>
            </div>
            <div class="conteudo-box-projeto">
                <iframe width="100%" height="100%"
                    style="border: 0; box-shadow: 5px 5px 56px 0px rgba(0,0,0,0.25);"src="{{ strpos($links->link, 'http') === false ? 'https://' : '' }}{{ $links->link }}"
                    frameborder="0"></iframe>
            </div>
            {{-- <a class="mais" href="">
                +
            </a> --}}
        </div>
    </section>
@endsection
