@extends('layouts.master')
<x-auth-session-status class="mb-4" :status="session('status')" />
@section('title')
    ورود به سیستم
@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="panel panel-default" style="    border-color: #131222;">
                <div class="panel-heading" style="    background-image: linear-gradient(to bottom, #3c3c3c 0%, #222 100%);;color: #9d9d9d;">
                    <h3 class="panel-title">ورود به سیستم</h3>
                </div>
                <div class="panel-body"  >

                    <form class="form-horizontal" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <!-- Email Address -->
                        
                            <x-input-label for="email" :value="__('ایمیل :')" class="col-sm-2 control-label" />
                            <div class="col-sm-10">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            
                        </div>
                        <div class="form-group">
                            <x-input-label class="col-sm-2 control-label" for="password" :value="__('رمز عبور :')" />
                            
                            <div class="col-sm-10">
                                <x-text-input id="password"  class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Remember Me -->
                        <div class="form-group" style="margin-right: 90px; display:inline-flex">
                            <p><strong>به خاطر سپردن</strong></p>
                                <input id="remember_me" type="checkbox"  name="remember" style=" width: 15px; margin-bottom: 10px; margin-right: 10px; ">
                                @if (Route::has('password.request'))
                                    <a style="margin-right: 30px" href="{{ route('password.request') }}">
                                    {{ __('رمز عبور را فراموش کرده اید؟') }}
                                </a>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" style="width: 90px;">
                                <button type="submit" name="login" class="btn btn-primary" style="    background-image: linear-gradient(to bottom, #133f64 0%, #265a88 100%);">ورود</button>
                            </div>
                            <p style="   padding-top: 8px;"> هنوز عضو نشده اید؟
                                <a href= "register">ثبت نام کنید</a>
                            </p>
                        </div>
                    </form>
                    

                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
@endsection




