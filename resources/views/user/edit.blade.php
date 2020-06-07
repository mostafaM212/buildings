@extends('layouts.app')

@section('title')
    تعديل الملومات الشخصيه

@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('معلومات شخصيه') }}</div>

                <div class="card-body" style="">
                    <form method="POST" action="{{ isset(auth()->user()->name)? route('check.store',$user->id) :route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الإسم كامل') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('الايميل') }}</label>

                            <div class="col-md-6">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('العضويه') }}</label>

                            <div class="col-md-6">
                                <p>{{Auth::user()->is_admin}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __(' كلمه المرور جديده') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __(' كلمه المرور القديمه') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="old_password" >
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __(isset(auth()->user()->name)?'تعديل المعلومات الشخصيه':'تسجيل العضويه') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
