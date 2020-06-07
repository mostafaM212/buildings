@extends('admin.layouts.layout')

@section('title')
    الصفحه الرئيسيه
@endsection
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
@section('header')
    <style>
        .direct-chat-messages{
            height: 410px;
        }
    </style>
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0 text-dark text-left"><i class="fa fa-cogs"></i>
                        الاعدادات الرئيسيه
                    </h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comment"></i></span>

                        <div class="info-box-content">
                            <a href="{{route('contact.show',1)}}">
                                <span class="info-box-text">الرسائل</span>
                                <span class="info-box-number">
                    {{\App\contact::all()->count()}}

                </span>
                            </a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-address-book"></i></span>

                        <div class="info-box-content">
                            <a href="{{route('bu.index')}}">
                                <span class="info-box-text">العقارات الغير متاحه</span>
                                <span class="info-box-number">{{getNumberOfBu('bu_status',0)}}</span>
                            </a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <a href="{{route('bu.index')}}">
                                <span class="info-box-text">العقارات المتاحه</span>
                                <span class="info-box-number">{{getNumberOfBu('bu_status',1)}}</span>
                            </a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <a href="{{route('users.index')}}">
                            <div class="info-box-content">
                                <span class="info-box-text">الاعضاء </span>
                                <span class="info-box-number">{{\App\User::all()->count()}}</span>
                            </div>
                        </a>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
            <div class="row"  >
                <div class="col-md-6 " >
                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-warning">
                        <div class="card-header">
                            <h3 class="card-title">الرسائل الجديده</h3>

                            <div class="card-tools">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-warning">{{\App\contact::all()->count()}}</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                        data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->

                            @foreach(\App\contact::take(6)->orderBy('id','desc')->get() as $contact)
                                <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-right">{{$contact->name}}</span>
                                            <span class="direct-chat-timestamp float-left">{{$contact->created_at}}</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <i class="direct-chat-img fa fa-comments"></i>
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            {{$contact->massage}}
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                @endforeach

                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->

                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                    <!-- USERS LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">أخر الاعضاء المضافه</h3>

                            <div class="card-tools">
                                <span class="badge badge-danger">أخر 8 أعضاء </span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="users-list clearfix">
                                @foreach($users as $user)
                                    <li>
                                        <img src="{{asset('admin/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <a class="users-list-name" href="{{route('users.edit', $user->id)}}">{{$user->name}}</a>
                                        <span class="users-list-date">{{$user->created_at}}</span>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="{{route("users.index")}}">View All Users</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <!-- MAP & BOX PANE -->
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">US-Visitors Report</h3>--}}

{{--                            <div class="card-tools">--}}
{{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                    <i class="fas fa-minus"></i>--}}
{{--                                </button>--}}
{{--                                <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
{{--                                    <i class="fas fa-times"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card-header -->--}}
{{--                        <div class="card-body p-0">--}}
{{--                            <div class="d-md-flex">--}}
{{--                                <div class="p-1 flex-fill" style="overflow: hidden">--}}
{{--                                    <!-- Map will be created here -->--}}
{{--                                    <div id="world-map-markers" style="height: 325px; overflow: hidden">--}}
{{--                                        <div class="map"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">--}}
{{--                                    <div class="description-block mb-4">--}}
{{--                                        <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>--}}
{{--                                        <h5 class="description-header">8390</h5>--}}
{{--                                        <span class="description-text">Visits</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                    <div class="description-block mb-4">--}}
{{--                                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>--}}
{{--                                        <h5 class="description-header">30%</h5>--}}
{{--                                        <span class="description-text">Referrals</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                    <div class="description-block">--}}
{{--                                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>--}}
{{--                                        <h5 class="description-header">70%</h5>--}}
{{--                                        <span class="description-text">Organic</span>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.description-block -->--}}
{{--                                </div><!-- /.card-pane-right -->--}}
{{--                            </div><!-- /.d-md-flex -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card-body -->--}}
{{--                    </div>--}}
                    <!-- /.card -->
                    <div class="card " >
                        <div class="card-header border-transparent text-center">
                            <h3 class="card-title text-center">أخر العقارات المضافه</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th>الأسم</th>
                                        <th>نوع العمليه</th>
                                        <th>تاريخ الاضافه</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bus as $bu)
                                        <tr>
                                            <td><a href="{{route('bu.edit',$bu->id)}}">{{$bu->id}}</a></td>
                                            <td>{{$bu->bu_name}}</td>
                                            <td><span class="badge badge-{{$bu->bu_rent == 1?'success':'danger'}}">{{bu_rent()[$bu->bu_rent]}}</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">{{$bu->created_at}}</div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                            <a href="{{route('bu.index')}}" class="btn btn-sm btn-secondary float-right">كل العقارات</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>


                </div>
                <!-- /.col -->



            <!-- /.row -->
        </div><!--/. container-fluid -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        To Do List
                    </h3>

                    <div class="card-tools">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="todo-list" data-widget="todo-list">
                        <li>
                            <!-- drag handle -->
                            <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <!-- checkbox -->
                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                <label for="todoCheck2"></label>
                            </div>
                            <span class="text">Make the theme responsive</span>
                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                <label for="todoCheck3"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                <label for="todoCheck4"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                <label for="todoCheck5"></label>
                            </div>
                            <span class="text">Check your messages and notifications</span>
                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                <label for="todoCheck6"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
                </div>
                <!-- /.card -->

                <!-- PRODUCT LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recently Added Products</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">

                            <li class="item">
                                <div class="product-img">
                                    <img src="{{asset('admin/dist/img/default-150x150.png')}}" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Samsung TV
                                        <span class="badge badge-warning float-right">$1800</span></a>
                                    <span class="product-description">
                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                      </span>
                                </div>
                            </li>


                            <!-- /.item -->

                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection


