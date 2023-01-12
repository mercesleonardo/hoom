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
                                    <li class="breadcrumb-item active">Projetos</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Projetos</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <button id="btSubmitDelete" data-route="" type="button" class="btn btn-danger" style="display: none;">Deletar selecionados</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('admin.projects.create')}}" class="btn btn-success float-end">Adicionar novo <i class="mdi mdi-plus"></i></a>
                                    </div>
                                </div>
                                <table data-toggle="table" data-page-size="5" data-pagination="false" class="table-bordered table-sortable">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th class="bs-checkbox">
                                                <label><input name="btSelectAll" type="checkbox"></label>
                                            </th>
                                            <th>Cliente</th>
                                            <th>Nome do projeto</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Criado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>

                                    <tbody data-route="">
                                        @foreach ($projects as $key => $project)
                                            <tr>
                                                <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                                <td class="bs-checkbox">
                                                    {{-- <label><input data-index="{{$key}}" name="btSelectItem" class="btSelectItem" type="checkbox" value="{{$projects->id}}"></label> --}}
                                                </td>
                                                <td>{{$project->user->name}}</td>
                                                <td>{{$project->name}}</td>
                                                <td>{{$project->link}}</td>
                                                <td>
                                                    @switch($project->status)
                                                        @case(1) <span>A fazer</span> @break
                                                        @case(2) <span>Em produção</span> @break
                                                        @case(3) <span>Aguardando</span> @break
                                                        @case(4) <span>Stand by</span> @break
                                                        @case(5) <span>Travado</span> @break
                                                        @case(6) <span>Parado</span> @break
                                                        @case(7) <span>Em aprovação</span> @break
                                                        @case(8) <span>Ajustes</span> @break
                                                        @case(9) <span>Concluído</span> @break
                                                    @endswitch
                                                </td>

                                                <td>{{Carbon\Carbon::parse($project->created_at)->format('d/m/Y H:i')}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a href="{{route('admin.projects.edit',['project' => $project->id])}}" class="btn-icon mdi mdi-square-edit-outline"></a>
                                                        </div>
                                                        <form action="{{route('admin.projects.destroy',['project' => $project->id])}}" class="col-4" method="POST">
                                                            @method('DELETE') @csrf
                                                            <button type="button" class="btn-icon btSubmitDeleteItem"><i class="mdi mdi-trash-can"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- PAGINATION --}}
                                <div class="mt-3 float-end">
                                    {{-- {{$users->links()}} --}}
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    @include('Admin.components.links.resourcesIndex')
@endsection
