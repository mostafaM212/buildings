@extends('admin.layouts.layout')

@section('title')
    الرسائل
@endsection

@section('content')
    <h3 class="text-center">الرسائل
        ({{$contacts->count()}})</h3>
    @if($contacts->count() > 0)
        <div class="container text-right">
            @include('theme.form')
        </div>
        <div>{{$contacts->links()}}</div>
    @else
        <div class="alert alert-danger text-right" style="direction: rtl ;">لا يوجد رسائل فى الوقت الحالى</div>
    @endif
@endsection
