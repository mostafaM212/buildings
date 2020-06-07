@extends('admin.layouts.layout')

@section('title')
    إعدادات الموقع
@endsection

@section('header')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header" style="">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="">
                        <h1></h1>
                    </div>
                    <div class="card" style="width: 70rem">
                        <div class="card-header text-center">
                            أعدادات الصفحه
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <form action="{{route('siteSetting.store')}}" method="Post" enctype="multipart/form-data">
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
                                                @elseif($siteSetting->type==1)
                                                    <textarea type="text" name="{{$siteSetting->nameSetting}}" class="form-control" value="" aria-label="Username" aria-describedby="basic-addon1">{{$siteSetting->value}}</textarea>
                                                @else
                                                    <div class="clearfix"></div>
                                                    @if(getMainImage()!='')
                                                        <img src="{{asset(getMainImage())}}" alt="" style="border-radius: 100px;width: 100px;height: 100px">
                                                    @endif
                                                        <input type="file" class="file" name="main_image" style="margin-right: 30px">

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

@endsection
