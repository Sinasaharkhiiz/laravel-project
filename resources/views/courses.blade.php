@extends('layouts.master')

@section('content')


    
<div class="box">
  <div class="container">
     <div class="row">
      @foreach ($c_data as $ket => $value)
        <div class="col-lg-4 col-12 text-center">
            <div class="box-column">
                <div class="box-header box-header-one">
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                </div>
                <div class="box-bottom" style="padding-bottom: 10px;">
                    <a href="course?id={{$value->id}}" target="_blank">
                    <div class="box-title one-title">
                      {{$value->name}}  
                    </div>
                </a>
                    <div class="box-text">
                        {{$value->description}} 
                        <hr>
                        @if($value->price==0)
                           <p><strong> رایگان </strong></p>
                        @else
                        <p><strong>{{"قیمت :".$value->price." "."تومان"}}</strong></p> 
                        @endif
                    </div>
                    
                </div>
                
            </div>
        </div>	
        @endforeach
     </div>		
  </div>
</div>
<style>
body{
  background: #f0efef;
}

.box-header {
    background: #dedede;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 60px 0px;
}

.box-header .fa {
    color: #FFF;
}

.box-header-three {
    background: linear-gradient(45deg, #f2935b, #6f49c0);
}

.box-header-two {
    background: linear-gradient(45deg, #cae1f3, #55aded);
}

.box-header-one {
    background: linear-gradient(45deg, #95a2c1, #3b579d);
}

.box-bottom {
    background: #FFF;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    padding: 30px 0px;
}

.box-text {
    padding: 10px 0px; 
}

.three-title {
    background: linear-gradient(45deg, #f2935b, #6f49c0);
    font-size: 20px;  
    font-weight: 600;
    -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;
}

.two-title {
    background: linear-gradient(45deg, #cae1f3, #55aded);
    font-size: 20px;  
    font-weight: 600;
    -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;
}

.one-title {
    color: #428bca;
    font-size: 20px; 
    font-weight: 600;
}
</style>
@endsection