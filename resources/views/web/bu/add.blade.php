
@extends('layouts.app')

@section('title')
    {{isset($bu)?' تعديل العقار '.$bu->bu_name:   ' أضافه عقار'
}}
@endsection
@section('header')
    <style>
        .body{
            background-color: #00cc66;
        }
    </style>
@endsection
@section('content')
    <div class="container" style="margin-top: 100px">
        <ul class="list-group list-group-flush text-center">
            <form action="{{isset($bu)?route('myBu.update',1):route('bu.store')}}" method="Post" enctype="multipart/form-data">
                @csrf

                @if(isset($bu))
                    <input type="hidden" name="bu_id" value="{{$bu->id}}" >
                    @method('PUT')
                @endif
                @include('admin.bu.form')
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success" >{{isset($bu)?'حفظ التغيرات':'حفظ العقار الجديد'}}</button>
                </li>
            </form>
        </ul>
    </div>
 @endsection
