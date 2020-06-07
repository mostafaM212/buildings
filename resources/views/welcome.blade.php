
@extends('layouts.app')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title')
            أهلا بك فى
            {{getSetting()}}
        @endsection
        <style>
            .anner {
                background: url('{{ asset(getMainImage())}}')no-repeat center;
                min-height: 500px;
                width: 100%;
                -webkit-background-size: 100%;
                -moz-background-size: 100%;
                -o-background-size: 100%;
                background-size: 100%;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                padding-bottom: 100px;
            }
        </style>
            <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


            {{Html::style('admin/cus/buall.css')}}
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->
            <link href="{{asset('admin/cus/sideBar.css')}}" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

    </head>
    <body>

           @section('content')
                        <div class="anner text-center" >
                            <div class="container">
                                <div class="banner-info">
                                    <h1>أهلا بك فى {{getSetting()}} الأول فى الشرق الأوسط</h1>
                                    <p>Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus,<br>
                                        sem quas potenti malesuada vel phasellus.</p>
                                    <a class="banner_btn" href="{{route('AdvancedSearch')}}"><i class="fa fa-search"></i>  بحث متقدم</a> </div>
                            </div>
                        </div>
                        <div class="main">

                            <div class="s-layout" style="direction: rtl;margin-right: 0px">
                                <!-- Sidebar -->

                                <div class="s-layout__sidebar">
                                    <a class="s-sidebar__trigger" href="#0">
                                        <i class="fa fa-bars"></i>
                                    </a>

{{--                                    @include('web.bu.sideBar')--}}
                                    <div class="container center-block "  style="margin-right: 100px">
                                         @include('web.bu.allBuildings')
                                    </div>
                                </div>
                            </div>
                        </div>

           @endsection

    </body>
</html>
