


    <div class="form-group row">
        <label for="bu_name" class="col-md-2 " style="margin: 10px">{{ __('الإسم العقار') }}</label>

        <div class="col-md-9    " style="margin: 10px">
            <input id="bu_name" type="text" value="{{isset($bu)?$bu->bu_name:''}}" class="form-control @error('bu_name') is-invalid @enderror" name="bu_name"  required autocomplete="bu_name" autofocus>

            @error('bu_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="rooms" class="col-md-2 " style="margin: 10px">{{ __('عدد الغرف') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="rooms" type="text" value="{{isset($bu)?$bu->rooms:''}}" class="form-control @error('rooms') is-invalid @enderror" name="rooms"  required autocomplete="rooms" autofocus>

            @error('rooms')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_price" class="col-md-2 " style="margin: 10px">{{ __('سعر العقار') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="bu_price" type="text" value="{{isset($bu)?$bu->bu_price:''}}" class="form-control @error('bu_price') is-invalid @enderror" name="bu_price"  required autocomplete="bu_price" autofocus>

            @error('bu_price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_rent" class="col-md-2 " style="margin: 10px">{{ __('نوع العمليه') }}</label>

        <div class="col-md-9" style="margin: 10px">

                <select id="bu_rent"  class="form-control" name="bu_rent"  required autocomplete="bu_rent" autofocus>
                    @foreach(bu_rent() as $key=>$rent)
                        <option value="{{$key}}" selected class="text-center">{{$rent}}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_square" class="col-md-2 " style="margin: 10px">{{ __('مساحه العقار') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="bu_square" value="{{isset($bu)?$bu->bu_square:''}}" type="text" class="form-control @error('bu_square') is-invalid @enderror" name="bu_square"  required autocomplete="bu_square" autofocus>

            @error('bu_square')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_type" class="col-md-2 " style="margin: 10px">{{ __('نوع العقار') }}</label>

        <div class="col-md-9" style="margin: 10px">

            <select id="bu_type"  class="form-control" name="bu_type"  required autocomplete="bu_type" autofocus>
                @foreach(bu_type() as $key=>$type)
                    <option value="{{$key}}" selected class="text-center">{{$type}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_meta" class="col-md-2 " style="margin: 10px">{{ __('الكلمات الدلاليه') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="bu_meta" type="text" value="{{isset($bu)?$bu->bu_meta:''}}" class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta"  required autocomplete="bu_meta" autofocus>

            @error('bu_meta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_small_dis" class="col-md-2 " style="margin: 10px">{{ __('وصف العقار لمحركات البحث') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <li class="alert-success sm">لا يسمح باكثر من 160 حرف</li>
            <textarea id="bu_small_dis"  class="form-control row-cols-8 @error('bu_small_dis') is-invalid @enderror" name="bu_small_dis"  required autocomplete="bu_small_dis" autofocus>{{isset($bu)?$bu->bu_small_dis:''}}</textarea>

            @error('bu_small_dis')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_langtuide" class="col-md-2 " style="margin: 10px">{{ __('خطوط الطول') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="bu_langtuide" type="text" value="{{isset($bu)?$bu->bu_langtuide:''}}" class="form-control @error('bu_langtuide') is-invalid @enderror" name="bu_langtuide"  required autocomplete="bu_langtuide" autofocus>

            @error('bu_langtuide')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_latitude" class="col-md-2 " style="margin: 10px">{{ __('خطوط العرض') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="bu_latitude" type="text" value="{{isset($bu)?$bu->bu_latitude:''}}" class="form-control @error('bu_latitude') is-invalid @enderror" name="bu_latitude"  required autocomplete="bu_latitude" autofocus>

            @error('bu_latitude')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="discount" class="col-md-2 " style="margin: 10px">{{ __('تخفيض') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <input id="discount" type="text" value="{{isset($bu)?$bu->discount:''}}" class="form-control @error('discount') is-invalid @enderror" name="discount"  required autocomplete="bu_latitude" autofocus>

            @error('discount')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bu_large_dis" class="col-md-2 " style="margin: 10px">{{ __('وصف مطول للعقار ') }}</label>

        <div class="col-md-9" style="margin: 10px">
            <textarea id="bu_large_dis"  class="form-control  @error('bu_large_dis') is-invalid @enderror" name="bu_large_dis"  required autocomplete="bu_large_dis" autofocus>{{isset($bu)?$bu->bu_large_dis:''}}</textarea>
            @error('bu_large_dis')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @if(Auth::user()->isAdmin())
        <div class="form-group row">
            <label for="bu_status" class="col-md-2 " style="margin: 10px">{{ __('حاله العقار') }}</label>
            <div class="col-md-9" style="margin: 10px">
                <select id="bu_status"  class="form-control" name="bu_status"   required autocomplete="bu_status" autofocus>
                    @foreach(bu_status() as $key=>$status)
                        <option   value="{{$key}}" class="text-center" selected>{{$status}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
    <div class="form-group row">
        <label for="bu_place" class="col-md-2 " style="margin: 10px">{{ __('المحافظه') }}</label>
        <div class="col-md-9" style="margin: 10px">
            <select id="bu_place"  class="form-control select2" name="bu_place"   required autocomplete="bu_place" autofocus>
                @foreach(bu_place() as $key=>$place)
                    <option name="bu_place"  value="{{$key}}" class="text-center" selected>{{$place}}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if(!isset($bu))
        <div class="form-group row">
            <label for="image" class="col-md-2 text-right " style="margin: 10px">{{ __('صوره للعقار ') }}</label>

            <div class="col-md-9" style="margin: 10px">
                @if(isset($bu))
                    <img src="storage/{{$bu->image}}" width="20px" height="20px" alt="">
                @endif
                <input id="image" type="file"  class="form-control  @error('image') is-invalid @enderror" name="image"  required autocomplete="image" autofocus>
            </div>
        </div>
    @else
        <div class="form-group-row">
            <div class="clearfix"></div>
            <label for="image" class="col-md-2 " style="float: right" >{{ __('صوره للعقار ') }}</label>

            <input type="file" class="file" name="image" style="">


            <img src="{{asset($bu->image)}}" class="image" alt="" style="border-radius: 100px;width: 100px;height: 100px;margin-left: 300px">

        </div>

    @endif

