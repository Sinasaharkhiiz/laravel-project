@extends('layouts.master')

@section('title')
    افزودن جزوه
@endsection
    
 
@section('content')
<style>
    body {
        color : #ffffff;
    }
</style>
    
<h3>مشخصات جزوه</h3>
    <br>
    
    <form class="form-horizontal" method="post" action="add_course" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">عنوان</label>
            <div class="col-sm-10" style="display: flex">
                <input class="form-control" id="name" name="name" placeholder="عنوان جزوه" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">خلاصه</label>
            <div class="col-sm-10">
                <input class="form-control" id="description" name="description" placeholder="خلاصه کوتاهی از جزوه" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-2 control-label">بارگذاری جزوه</label>
            
            <div class="col-sm-10" style="display: flex">
                <input class="form-control" name="content" type="file" id="content">
                <label for="price" class="col-sm-2 control-label"> قیمت</label>
                <input class="form-control" id="price" name="price" placeholder="  قیمت به تومان " value="">
            </div>
        </div>
        <!--<div class="form-group">
            <label for="cover" class="col-sm-2 control-label">  کاور جزوه</label>
            <div class="col-sm-5">
                <input class="form-control" name="coevr" type="file" id="cover" style="width: 430px" >
            </div>
        </div>-->
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success"> بارگذاری جزوه</button>
            </div>
        </div>
    </form>
    @endsection
    
     <!--<script src="https://cdn.tiny.cloud/1/1m8pqul3pakumja2mg8odqd13s46fmqvr9m61vivm8ar4v49/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ 
        selector:'textarea#content',
        directionality: 'rtl'
    });</script> -->
   <!-- <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">مشخصات جزوه</h3>
            </div>
            <div class="panel-body">
                
                <form class="form-horizontal" method="post" action="register">
                    
                    <div class="form-group">
                        <label for="fname" class="col-sm-2 control-label">نام: </label>
                        <div class="col-sm-10">
                            <input class="form-control" id="name" name="name" placeholder="نام " >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="col-sm-2 control-label" style="padding-right: 5px;">نام خانوادگی:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="lname" name="lname" placeholder="نام خانوادگی ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">ایمیل:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="email" name="email" placeholder="ایمیل">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">نام کاربری:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="username" name="username" placeholder="نام کاربری">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">رمز عبور:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="password" name="password" placeholder="رمز عبور">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 " style="width: 90px;">
                            <button type="submit" name="register" class="btn btn-primary">ثبت نام</button>
                            
                            
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        
        </div>
        <div class="col-md-3"></div>
    </div>
