<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Hotel Manager</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <style type="text/css">
        .login-form {
            width: 340px;
            margin: auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .login-form .hint-text {
            color: #777;
            padding-bottom: 15px;
            text-align: center;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .login-btn {
            font-size: 15px;
            font-weight: bold;
        }

        .or-seperator {
            margin: 20px 0 10px;
            text-align: center;
            border-top: 1px solid #ccc;
        }

        .or-seperator i {
            padding: 0 10px;
            background: #f7f7f7;
            position: relative;
            top: -11px;
            z-index: 1;
        }

        .social-btn .btn {
            margin: 10px 0;
            font-size: 15px;
            text-align: left;
            line-height: 24px;
        }

        .social-btn .btn i {
            float: left;
            margin: 4px 15px 0 5px;
            min-width: 15px;
        }

        .input-group-addon .fa {
            font-size: 18px;
        }
    </style>

</head>

<body>
    @include('partials.nav')




    <div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/random/1800x500?hotel')">
        <div class="container">
            @if(Auth::user())
            <h1 class="display-4">Welcome back, {{ Auth::user()->name}}!</h1>
            <p class="lead">To your one stop shop for reservation management.</p>
            <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
            @else
            <h1 class="display-3">Reservation management made easy.</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
            <div class="container">
                <button type="button" class="btn btn-success btn-lg my-2" data-toggle="modal" data-target="#myModal">Sign Up for Access to Thousands of Hotels</button>

                
            </div>
            @endif

        </div>

    </div>


    <main>@yield('content')</main>
</body>

</html>