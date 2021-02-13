<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>



<div id="wrapper">

    <form class="login-form" action="{{ route($loginRoute) }}" method="post">

        <div class="header">
            <h1>{{ $title }}</h1>
            <span>{{ $message }}</span>
        </div>

        <div class="content">

            <input name="username" type="text" class="input username" placeholder="Логин" value="{{ old('username') }}"/>
            @error('username')
            <div class="invalid-feedback">
                     <strong>{{ $message }}</strong>
            </div>
            @enderror

            <input name="password" type="password" class="input password" placeholder="Пароль"  />

            @error('password')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror


        </div>

        <div class="footer">

            <button class="button">{{$enter}}</button>

        {{--делаем проверку на соответствие маршруту--}}
            @if (Route::currentRouteName() == 'showView-Login-in-AdminPanel')

            <a href="{{ route('showView-Register-in-AdminPanel') }}" class="">{{$href}}</a>
            @else
            <a href="{{ route('showView-Login-in-AdminPanel') }}" class="">{{$href}}</a>

             @endif

        </div>

    </form>
</div>


</body>
</html>