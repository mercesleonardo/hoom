@extends('Admin.core.admin')
@section('content')
    <style>
        .card{
            transition: ease all 0.4s;
        }
        .card:hover{
            box-shadow: 3px 3px 12px rgb(0 0 0 / 14%);
            transform: scale(1.01);
            transition: ease all 0.4s;
        }
    </style>
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row mt-4">

                    <div class="col-md-6 col-xl-3">
                        <a nofollow href="#">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="avatar-lg rounded-circle border-secondary border shadow m-auto mb-3">
                                                <i class="mdi mdi-handshake-outline font-24 avatar-title text-dark"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h4 class="text-dark mt-1">Clientes</h4>
                                                <p class="text-muted mb-1">Ver mais</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </a>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <a nofollow href="{{route('admin.blog.index')}}">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="avatar-lg rounded-circle border-secondary border shadow m-auto mb-3">
                                                <i class="mdi mdi-handshake-outline font-24 avatar-title text-dark"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h4 class="text-dark mt-1">Blogs</h4>
                                                <p class="text-muted mb-1">Acessar</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </a>
                    </div> <!-- end col-->
                    
                </div>
    

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    @include('Admin.components.links.resourcesIndex')
@endsection
