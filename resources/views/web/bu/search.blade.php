@extends('layouts.app')

@section('content')
    <div class="container col-11" style="margin-top: 50px;width: 700px">
        <div class="card">
            <div class="card-header">بحث متقدم</div>
            <div class="card-body">
                <form action="{{route('search2')}}" method="get">
                    <div class="form-group row">
                        <label for="bu_name" class="col-md-4 col-form-label text-md-right">{{ __('أسم العقار') }}</label>

                        <div class="col-md-7">
                            <input type="text" class="form-control"   name="bu_name" placeholder="أسم العقار"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bu_name" class="col-md-4 col-form-label text-md-right">{{ __('سعر العقار') }}</label>

                        <div class="col-md-7">
                            <input type="number" class="form-control"   name="bu_price" placeholder="سعر العقار"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bu_place" class="col-md-4 col-form-label text-md-right">{{ __('المنطقه') }}</label>

                        <select name="bu_place" class="custom-select" style="width: 354px;margin-right: 16px">
                            @foreach(bu_place() as $place)
                                <option value="{{$place}}">{{$place}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                            <label for="bu_rent" class="col-md-4 col-form-label text-md-right">{{ __('نوع العمليه') }}</label>

                        <div class="col-md-8 form-group" >
                            <select name="bu_rent" id="" class=" form-control-lg">
                                @foreach(bu_rent() as $key=>$rent)
                                     <option name="bu_rent" value="{{$key}}">{{$rent}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rooms" class="col-md-4 col-form-label text-md-right">{{ __('عدد الغرف') }}</label>

                        <div class="col-md-8 form-group" >
                            <select name="rooms" id="" class="form-group-item  form-control-lg">
                                @for($i=0;$i<50; $i++)
                                    <option name="rooms" value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success center-block" style="margin-right: 250px;width: 100px">بحث</button>
                </form>

            </div>
        </div>
    </div>
@endsection
