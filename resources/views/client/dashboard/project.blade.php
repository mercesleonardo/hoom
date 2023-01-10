@extends('client.core.head')

@section('content')
    <section class="sec-projeto">
        <div class="conteudo-projeto">
            <div class="engloba-titulo">
                <div class="ld1-titulo">
                    <h4 class="titulo">
                        <a class="esq" href="{{ route('client.projects') }}">
                            <img class="img-esq" src="{{asset('images/esq.png')}}" alt="">
                        </a>{{$project->name}}
                    </h4>
                </div>
                <div class="ld2-titulo">
                    <a href="{{ route('client.dashboard')}}">
                        <img src="{{asset('images/icone-home.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="conteudo-box-projeto">
                <iframe width="100%" height="100%" style="border: 0; box-shadow: 5px 5px 56px 0px rgba(0,0,0,0.25);"
                    src="{{ strpos($project->link, 'http') === false ? 'https://' : '' }}{{ $project->link }}" frameborder="0">
            </div>
            {{-- <a class="mais" href="">
                +
            </a> --}}
        </div>
    </section>
@endsection
