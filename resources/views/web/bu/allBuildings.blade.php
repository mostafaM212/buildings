
    @if($bus->count() > 0)
        <div class="container">
            <div class="container">
                <h3 class="h3">العقارات</h3>
                @if(isset($count))
                    <p class="text-center">The Matching Results({{$count}})</p>
                @endif
                <div class="container">

                    <div class="row">
                        <div class="span12">
                            <table>
                                <thead>
                                <tr class="row">
                                    <form   action="{{route('search')}}" method="get">
                                        <label for="bu_price" >بحث بالاسم:</label>
                                        <input type="text" style="width: 100px;height: 30px ;border-radius: 10px;border-color: #00f169" class="" name="bu_name"  placeholder= "أبحث بالأسم">
                                    </form>
                                    <form action="{{route('price')}}" method="get">
                                        <label for="bu_price" style="margin-right: 110px">بحث بالسعر:</label>
                                        <input type="text" style="width: 100px;height: 30px ;border-radius: 10px;border-color: #00f169" class="" name="bu_price" placeholder="أبحث بالسعر">
                                    </form>
                                    <form action="{{route('room')}}" method="get">
                                        <label for="rooms" style="margin-right: 110px"> عدد الغرف:</label>
                                        <input type="text" style="width: 100px;height: 30px ;border-radius: 10px;border-color: #00f169" class="" name="bu_rooms" placeholder="عدد الغرف">
                                    </form>
                                    <form action="{{route('lang')}}" method="get">
                                        <label for="lang" style="margin-right: 110px">المساحه:</label>
                                        <input type="text" style="width: 100px;height: 30px ;border-radius: 10px;border-color: #00f169" name="lang" placeholder="أخل المساحه">
                                    </form>

                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($bus as $bu)
                        <div class="col-md-3 col-sm-6" style="margin-bottom: 5px">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="pic-1" src="{{isset($bu->image) ? asset($bu->image):asset(getImage())}}">
{{--                                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">--}}
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{route('singleBuilding', $bu->id)}}" data-tip="Quick View"><i class="fa fa-box-open"></i></a></li>
                                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <span class="product-new-label">{{bu_rent()[$bu->bu_rent] !=''?bu_rent()[$bu->bu_rent]:bu_rent()[1]}}</span>
                                    <span class="product-discount-label">{{$bu->discount}}%</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>

                                @if($bu->bu_status == 0 && Auth::check())
                                    <div class="product-content">
                                        @if(Auth::user()->isAdmin())
                                             <a href="{{route('bu.edit',$bu->id)}}" class="alert alert-danger">فى انتظار موافقه الاداره</a>
                                        @elseif($bu->user_id == Auth::id())
                                            <form action="{{route('myBu.edit',1)}}" method="get">
                                                <button  class="add-to-cart bg-success" style="border-radius: 10px" type="submit">تعديل العقار
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <input type="hidden" name="bu_id" value="{{$bu->id}}">
                                            </form>
                                        @else
                                            <a class="alert alert-danger">فى انتظار موافقه الاداره</a>

                                        @endif

                                    </div>

                                @endif
                                @if($bu->bu_status != 0)
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">{{$bu->bu_name}}</a></h3>
                                        <div class="price">${{$bu->bu_price}}
                                            <span>{{$bu->bu_price + $bu->bu_price*$bu->discount/100}}</span>
                                        </div>
                                           <a class="add-to-cart" href="">+Add To Cart</a>

                                    </div>
                                @endif
                            </div>
                        </div>

                    @endforeach
                    {{--                </div>--}}

                </div>


            </div>
            @else
                <div class="container" style="margin: 50%">
                    <div class="alert alert-danger"><h3>لا يوجد عقارات فى الوقت الحالى</h3>  </div>
                </div>
            @endif
            <div class="clearfix text-center" style="margin-right: 400px"> {{$bus->links()}}</div>


        </div>

