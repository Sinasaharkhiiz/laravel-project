@extends('layouts.master')

@section('title')
    ثبت نام
@endsection
    
 
@section('content')
    

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">ثبت نام</h3>
            </div>
            <div class="panel-body">
                
                <form class="form-horizontal" method="post" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <x-input-label class="col-sm-2 control-label" for="name" :value="__('نام :')" />
                        <div class="col-sm-10">
                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <x-input-label class="col-sm-2 control-label" for="email" :value="__('ایمیل :')" />
                        <div class="col-sm-10">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <x-input-label class="col-sm-2 control-label" for="password" :value="__('رمز عبور :')" />
                        <div class="col-sm-10">
            
                            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <x-input-label class="col-sm-2 control-label" for="password_confirmation" :value="__('تایید رمز عبور :')" />
                        <div class="col-sm-10">
                            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>


                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" style="width: 90px;">
                            <button type="submit" name="register" class="btn btn-primary">ثبت نام</button>
                        
                        </div>
                        <p style="   padding-top: 8px;"> قبلا ثبت نام کرده اید؟
                            <a href= "login">ورود</a>
                            </p>
                    </div>
                </form>
                
            </div>
        </div>
        
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
