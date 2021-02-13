<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

</head>
<body>



<div id="wrapper">

    <form class="login-form" action="{{ route($loginRoute) }}" method="post">

        <div class="header">
            <h1>{{ $title }}</h1>
            <span>Введите ваши регистрационные данные для входа в ваш личный кабинет. </span>
        </div>

        <div class="content">
            <input name="username" type="text" class="input username" value="Логин" onfocus="this.value=''" />
            <input name="password" type="password" class="input password" value="Пароль" onfocus="this.value=''" />

            {{ csrf_field() }}
        </div>

        <div class="footer">

            <button class="button">ВХОД</button>
            <input type="submit" name="submit" value="Регистрация" class="register" />
        </div>

    </form>
</div>


</body>
</html>