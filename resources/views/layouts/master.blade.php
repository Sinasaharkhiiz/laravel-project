<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       

        <!-- Bootstrap -->
        <link href="/css/bootstrap-rtl.css" rel="stylesheet">
        <link href="/css/bootstrap-rtl-theme.css" rel="stylesheet">

        <!-- Additional CSS -->
        <link href="styles.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <title>
        @yield('title')
    </title>
    <body>
        

    <div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>

        <div id="navbar" class="collapse navbar-collapse navbar-toggler navbar-expand{-sm|-md|-lg|-xl|-xxl}">
            <ul class="nav navbar-nav">
                @if (Auth::check())
                <li>
                <div class="user" onmouseover="mOver(this)" onmouseout="mOut(this)" id="image" style="display: inline-block;width: 40px;height: 40px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;background-image:url({{'storage/users-avatar/'.Auth::user()->avatar}});margin-top: 8px;"></div>
                <script>
                    function mOver(obg){
                        document.getElementById('image').style = "display: inline-block;width: 150px;height: 150px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;background-image:url({{'storage/users-avatar/'.Auth::user()->avatar}});margin-top: 8px;";
                        
                        }
                        function mOut(obg){
                        document.getElementById('image').style = "display: inline-block;width: 40px;height: 40px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;background-image:url({{'storage/users-avatar/'.Auth::user()->avatar}});margin-top: 8px;";
                        
                        }
                    </script>
                </li>
                <li>
                    
                    <p class="navbar-text">
                    
                    
                        <strong style="font-size: 14px">{{Auth::user()->name}}</strong>
                    </p>
                </li>
                @endif
                <li><a href="home"><svg class="svg-inline--fa fa-home fa-w-18" aria-hidden="true"width="20" height="20" focusable="false" data-prefix="fas" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg><strong>صفحه اصلی</strong></a></li>
                <li><a href="courses"><strong>منابع آموزشی</strong></a></li>
                <li><a href="chatify"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alexa" viewBox="0 0 16 16">
                    <path d="M7.996 0A7.998 7.998 0 0 0 0 8a8 8 0 0 0 6.93 7.93v-1.613a1.06 1.06 0 0 0-.717-1.008A5.602 5.602 0 0 1 2.4 7.865 5.579 5.579 0 0 1 8.054 2.4a5.599 5.599 0 0 1 5.535 5.81l-.002.046a6.116 6.116 0 0 1-.012.192l-.005.061a4.85 4.85 0 0 1-.033.284l-.01.068c-.685 4.516-6.564 7.054-6.596 7.068A7.998 7.998 0 0 0 15.992 8 7.998 7.998 0 0 0 7.996.001Z"></path>
                  </svg><strong>پیام رسان</strong></a></li>
                
               
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li>
                    <a href="add_course">افزودن جزوه</a>
                </li>
                
                <li>
                    <a href="logout">خروج</a>
                </li>
                
                @else
                 <li class="dropdown">
                    <a href="login" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ورود/ثبت نام <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="login">ورود</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="register">ثبت نام</a></li>
                        
                      
                    </ul>
                </li>
                    @endif
            
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

 @yield('content')

   
        

