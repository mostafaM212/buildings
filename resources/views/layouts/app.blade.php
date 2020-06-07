
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('bootstrap-4.4.1-dist/css/bootstrap.css')}}"  crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('sidebar/style.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    {!! Html::style('theme/css/bootstrap.min.css') !!}
    {!! Html::style('theme/css/flexslider.css') !!}
    {!! Html::style('theme/css/style.css') !!}
    {!! Html::style('theme/css/font-awesome.min.css') !!}
    {!! Html::script ('theme/js/jquery.min.js')!!}
{{--    searchBar--}}
    <link href="{{asset('admin/cus/searchBar.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, true); function hideURLbar(){ window.scrollTo(0,1); } </script>



    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

    <title>
       {{getSetting()}}
        |
        @yield('title')
    </title>

    <!-- Scripts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">

    <!-- Styles -->
    @yield('header')
</head>
<body style="direction:rtl" class="text-right">
    {{--        session-display--}}
    @if(session()->has('success'))
        <div class="alert alert-success text-right">
            <ul>
                <li class="text-primary">{{session('success')}}</li>
            </ul>
        </div>
    @endif
{{--    errors--}}
    @if($errors->any())
        <div class="alert alert-success text-right">
            @foreach($errors->all() as $error)
                <ul>
                    <li class="text-danger">{{$error}}</li>
                </ul>
            @endforeach
        </div>
    @endif
    <div class="header" style="direction: rtl">
        <div class="container navbar-brand float-right" style="margin-right: 250px;margin-bottom: 20px;width:950px ;font-size:20px"> <a class="" href="/"><i class="fa fa-building"></i> {{getSetting()}}</a>
            <div class="menu pull-left" style="margin-left:70px "> <a class="toggleMenu" href="#"><img src="{{asset('theme/images/nav_icon.png')}}" alt="" /> </a>
                <ul class="nav" id="nav" >
                    <li class="{{setActive(['/'],'current')}}" style="font-size: 15px"><a href="/"><i class="fa fa-home"></i>
                            الرئيسيه</a></li>
                    <li class="{{setActive(['AllBuildings'],'current')}}"><a href="{{route('AllBuildings.index')}}"  style="font-size: 15px"><i class="fa fa-store"></i>
                            عرض العقارات</a></li>
                    <li class="{{setActive(['contact'],'current')}}"><a href="{{route('contact.index')}} " style="font-size: 15px"><i class="fa fa-mobile-alt"></i>
                            أتصل بنا</a></li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i>
                                {{ __('تسجيل الدخول') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="font-size: 15px"><i class="fa fa-user-plus"></i>
                                    {{ __('عضو جديد') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            @if(auth()->check())
                                @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                                    <a class="text-success" href="{{route('adminPanel')}}" style="font-size: 15px">أداره الحساب</a>
                                @endif
                            @endif
                        </li>
                        <li class="">
                            <div class="dropdown " >
                                <button class="btn dropdown-toggle font-weight-bold"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-home" style=""></i>
                                    إيجار
                                </button>
                                <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                    @foreach(bu_type() as$key=>$bu)
                                            <a class="dropdown-item" name="bu_type" href="{{route('forRent',$key)}}">{{$bu}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <div class="dropdown " >
                                <button class="btn dropdown-toggle font-weight-bold"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-home" style=""></i>
                                    تمليك

                                </button>
                                <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                    @foreach(bu_type() as$key=>$bu)
                                        <a class="dropdown-item" name="bu_type" href="{{route('forSel',$key)}}">{{$bu}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown" style=" direction: ltr ;font-size: 15px">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <i class="fa fa-user" style=""></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item text-success" href="{{ route('info',Auth::id()) }}">

                                    <i class="fa fa-user"></i> {{ Auth::user()->name }}

                                </a>
                                @if(bu_count()>0)
                                        <a class="dropdown-item text-success" href="{{route('myBu.index')}}">
                                            <i class="fa fa-home"></i> <em>عقاراتى</em>
                                        </a>
                                @endif
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-lock"></i>{{ __('تسجيل الخروج') }}

                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                    <div class="clear"></div>
                </ul>


            </div>

        </div>
    </div>
{{--    <div id="app" style="margin-top: 50px">--}}
    <div style='margin-top: 50px'>
        @yield('content')
    </div>

{{--    </div>--}}
        <main class="py-4">

            <div class="footer" style="margin-bottom: 0px">
                <div class="footer_bottom">
                    <div class="follow-us">
                        <a class="fa fa-facebook-f social-icon" href="{{getSetting('Facebook')}}"></a>
                        <a class="fa fa-twitter social-icon" href="{{getSetting('twitter')}}"></a>

                        <a class="fa fa-youtube social-icon" href="{{getSetting('youtube')}}"></a> </div>
                    <div class="copy">
                        <p>كل الحقوق محفوظه &copy; 2020 Company Name: Mostafa's Web Design. Design by  <a href="https://www.facebook.com/Prophet.lov" rel="nofollow">Mostafa Mohamed</a></p>
                    </div>
                </div>
            </div>


            {!! Html::script('theme/js/bootstrap.min.js') !!}
            {!! Html::script('theme/js/jquery.flexslider.js') !!}
            {!! Html::script('theme/js/responsive-nav.js') !!}

            @yield('footer')




        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('bootstrap-4.4.1-dist/js/bootstrap.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('.dropdown-toggle').dropdown()
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e35ae2a208087fe"></script>

</body>
</html>
