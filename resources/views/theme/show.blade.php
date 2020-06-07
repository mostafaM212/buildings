@extends('admin.layouts.layout')


@section('content')



        <div class="container text-right" style="margin-top: 50px">

            <div class="card col-10">
                <div class="card-header text-center">رساله من:
                    {{$contact->name}}</div>
                <div class="card-body">
                    <ul class="card-item">
                        <label for="subject"> العنوان:</label>
                        <li >{{$contact->subject}}</li>
                    </ul>
                    <ul class="card-item">
                        <label for="subject">قادمه من:</label>
                        <li >{{$contact->email}}</li>
                    </ul>
                    <ul class="card-item">
                        <label for="subject">الرساله:</label>
                        <li >{{$contact->massage}}</li>
                    </ul>
                    <ul>
                        <form action="{{route('contact.destroy',$contact->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fa-trash btn btn-danger text-center center-block">حذف الرساله</button>
                        </form>
                    </ul>
                </div>
            </div>

        </div>






@endsection
