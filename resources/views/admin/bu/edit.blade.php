@extends('admin.layouts.layout')

@section('title')
    أضافه عقار جديد
@endsection

@section('header')
    <link rel="stylesheet" href="{{asset('admin/select/css/select2.css')}}">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('adminPanel')}}"></a>
                    </div>
                    <div class="card" style="width: 50rem; margin-right: 10rem">
                        <div class="card-header text-center">
                            أضافه عقار جديد
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <form action="{{route('siteSetting.store')}}" method="Post">
                                @csrf
                                @foreach($siteSettings as $siteSetting)
                                    <li class="list-group-item">

                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"  id="basic-addon1">{{$siteSetting->slug}}</span>
                                            </div>
                                            @if($siteSetting->type==0)
                                                <input type="text" name="{{$siteSetting->nameSetting}}" class="form-control" value="{{$siteSetting->value}}" aria-label="Username" aria-describedby="basic-addon1">
                                            @else
                                                <textarea type="text" name="{{$siteSetting->nameSetting}}" class="form-control" value="" aria-label="Username" aria-describedby="basic-addon1">{{$siteSetting->value}}</textarea>
                                            @endif
                                        </div>

                                    </li>
                                @endforeach
                                <li class="list-group-item">
                                    <button type="submit" class="btn btn-info" >حفظ التغيرات</button>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@section('footer')
    <script src="{{asset('admin/select/js/select2.js')}}"></script>
    <script>
        "dependencies": {
            "select2": "~4.0"
        }
    </script>
@endsection
