@extends('admin.core.admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('admin.painel')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.projects.index')}}">Projetos</a></li>
                                    <li class="breadcrumb-item active">Editar projeto</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Editar projeto</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                {!! Form::model($project, ['route' => ['admin.projects.update', $project->id], 'class'=>'parsley-examples', 'method' => 'PUT']) !!}
                    @include('admin.cruds.projects.form')
                    {!! Form::button('Salvar', ['class'=>'btn btn-primary waves-effect waves-light float-end me-3 width-lg', 'type' => 'submit']) !!}
                    <a href="{{route('admin.projects.index')}}" class="btn btn-secondary waves-effect waves-light float-end me-3 width-lg">Voltar</a>
                {!! Form::close() !!}
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    @include('admin.components.links.resourcesCreateEdit')
@endsection
