@extends('Admin.core.admin')
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
                                    <li class="breadcrumb-item active">Blogs</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Blogs</h4>
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
                                        {{-- <button id="btSubmitDelete" data-route="{{route('destroy')}}" type="button" class="btn btn-danger" style="display: none;">Deletar selecionados</button> --}}
                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('admin.blog.create')}}" class="btn btn-success float-end">Adicionar novo <i class="mdi mdi-plus"></i></a>
                                    </div>
                                </div>
                                <table data-toggle="table" data-page-size="5" data-pagination="false" class="table-bordered table-sortable">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th class="bs-checkbox">
                                                <label><input name="btSelectAll" type="checkbox"></label>
                                            </th>
                                            <th>Título</th>
                                            <th>Descrição</th>
                                            <th>Texto</th>
                                            <th>Autor</th>
                                            {{-- <th>Status</th> --}}
                                            <th>Criado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>

                                    <tbody data-route="#"> {{--<tbody data-route="{{route('admin.user.sorting')}}">--}}
                                        @foreach ($blogs as $key => $blog)
                                            <tr>
                                                <td><span class="btnDrag mdi mdi-drag-horizontal font-22"></span></td>
                                                <td class="bs-checkbox">
                                                    <label><input data-index="{{$key}}" name="btSelectItem" class="btSelectItem" type="checkbox" value="{{$blog->id}}"></label>
                                                </td>
                                                <td>{{$blog->title}}</td>
                                                <td>{{$blog->description}}</td>
                                                <td>{!!Str::substr($blog->text, 0, 20)!!}</td>
                                                <td>{{$blog->author}}</td>
                                                {{-- <td>
                                                    @switch($blog->active)
                                                        @case(0) <span class="badge bg-danger">Inativo</span> @break
                                                        @case(1) <span class="badge bg-success">Ativo</span> @break
                                                    @endswitch
                                                </td> --}}
                                                <td>{{Carbon\Carbon::parse($blog->created_at)->format('d/m/Y H:i')}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a href="{{route('admin.blog.edit',['blog' => $blog->id])}}" class="btn-icon mdi mdi-square-edit-outline"></a>
                                                        </div>
                                                        <form action="{{route('admin.blog.destroy',['blog' => $blog->id])}}" class="col-4" method="POST">
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
                                    {{$blogs->links()}}
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
