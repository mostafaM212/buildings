
@extends('layouts.app')
@section('title')
    {{$bu->bu_name}}
@endsection    
@section('header')
    <style>
        #mapCanvas{
            width: 100%;
            height: 400px;
        }
    </style>
    <link href="{{asset('admin/cus/singleBuilding.css')}}" rel="stylesheet" id="bootstrap-css">

    <link href="{{asset('admin/cus/sideBar.css')}}" rel="stylesheet" id="bootstrap-css">

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
@endsection

@section('content')

    <!------ Include the above in your HEAD tag ---------->
{{--    @include('web.bu.sideBar')--}}
    <div class="card center-block " style="width: 60rem">
        <img src="{{asset($bu->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <ul class="list-group list-group-flush" >
                <li class="list-group-item">
                    <div id="mapCanvas"></div>
                </li>
            </ul>
            <ul class="list-group list-group-flush" >
                <li class="list-group-item"> <h3 class="card-title card-body">الاسم:
                        {{$bu->bu_name}}</h3>
                    </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <h3 class="card-title card-body">نوع العمليه:
                        {{ bu_rent()[$bu->bu_rent]    }}</h3>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <h3 class="card-title card-body">نوع العقار:
                        {{bu_type()[$bu->bu_type] }}</h3>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <h3 class="card-title card-body">عدد الغرف:
                        {{$bu->rooms}}</h3>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <h3 class="card-title card-body">العنوان:
                        {{$bu->bu_place }}</h3>
                </li>
            </ul>

            <p class="card-text  card-body">{{$bu->bu_large_dis}}</p>

          <table>

              <tbody >
                <tr class="center-block"  >
                  <div class="container center-block" >
                      <a href="#" class="btn btn-success " style="margin-right: 200px;width: 100px;border-radius: 30px" ><i class="fa fa-cart-plus"></i>
                          شراء

                      </a>
                      <a href="#" class="btn btn-primary fa-backward"  style="margin-right: 200px;width: 100px;border-radius: 30px">غير ذالك</a>
                  </div>
                </tr>
              </tbody>
          </table>
        </div>
    </div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox"></div>
@endsection

@section('footer')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
        var position = [40.748774, -73.985763];

        function initialize() {
            var latlng = new google.maps.LatLng(position[0], position[1]);
            var myOptions = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);

            marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: "Latitude:"+position[0]+" | Longitude:"+position[1]
            });

            google.maps.event.addListener(map, 'click', function(event) {
                var result = [event.latLng.lat(), event.latLng.lng()];
                transition(result);
            });
        }

        //Load google map
        google.maps.event.addDomListener(window, 'load', initialize);


        var numDeltas = 100;
        var delay = 10; //milliseconds
        var i = 0;
        var deltaLat;
        var deltaLng;

        function transition(result){
            i = 0;
            deltaLat = (result[0] - position[0])/numDeltas;
            deltaLng = (result[1] - position[1])/numDeltas;
            moveMarker();
        }

        function moveMarker(){
            position[0] += deltaLat;
            position[1] += deltaLng;
            var latlng = new google.maps.LatLng(position[0], position[1]);
            marker.setTitle("Latitude:"+position[0]+" | Longitude:"+position[1]);
            marker.setPosition(latlng);
            if(i!=numDeltas){
                i++;
                setTimeout(moveMarker, delay);
            }
        }
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e35ae2a208087fe"></script>

@endsection
