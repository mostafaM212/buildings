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
                        <a class="text-primary" href="{{route('adminPanel')}}">التحكم الرئيسيه</a>
                        <span>/</span>
                        <a class="text-success" href="{{route('bu.index')}}">التحكم العقارات</a>
                    </div>
                    <div class="card" style="width: 50rem; margin-right: 10rem">
                        <div class="card-header text-center">
                            {{isset($bu)? 'تعديل العقار':'أضافه عقار جديد'}}
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            @if(isset($user->name))
                                <li class="list-group-item">
                                    <ul class="">
                                        <label for="name">أسم الناشر</label>
                                        <p>{{$user->name}}</p>
                                    </ul>
                                    <ul>
                                        <label for="name">الايميل</label>
                                        <p>{{$user->email}}</p>
                                    </ul>
                                </li>
                            @endif
                            <form action="{{isset($bu)?route('bu.update',$bu->id):route('bu.store')}}" method="Post" enctype="multipart/form-data">
                                @csrf
                                @if(isset($bu))
                                    @method('PUT')
                                @endif
                                @include('admin.bu.form')
                                <li class="list-group-item">
                                    <button type="submit" class="btn btn-success" >{{isset($bu)?'حفظ التغيرات':'حفظ العقار الجديد'}}</button>
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
        "select2": {
            "select2": "~4.0"
        }
    </script>
@endsection
