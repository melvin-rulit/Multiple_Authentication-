<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>




@if(Auth::guard('admin')->check())


            <div class="container">
                <div class="row centered">
                <div class="col-md-5 ">

                    <div class="card">
                        <div class="card-header">
                            {{session('status')}} {{Auth::guard('admin')->user()->username}}
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>Регистрация прошла успешно, через 3 секунды вы будете переадресованы</p>

                            </blockquote>


                            <script>
                                setTimeout(function () {
                                    window.location.href='{{ route('adminka') }}';
                                }, 5000);
                            </script>

                        </div>
                    </div>

                </div>
                </div>
            </div>






@endif
    <form action="{{ route('logout-admin') }}" method="POST">

        <button type="submit">Logout</button>
    </form>

</body>
</html>