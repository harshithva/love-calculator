<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Love Calculator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{asset('assets/css/argon.css')}}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand text-white" href="#">
            {{-- <img {{ asset('./img/logo.png') }} width="30" height="30" class="d-inline-block align-top" alt=""> --}}
            <i class="fas fa-heart text-white"></i>&nbsp;
            Love Calculator
        </a>
    </nav>

    <div class="container-fluid mt-3">
        <div class="progress-wrapper">
            <div class="progress-primary">
                <div class="progress-label">
                    <span>Compatibility</span>
                </div>
                <div class="progress-percentage">
                    <span>{{$response->percentage}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h1>{{$response->percentage}}%</h1>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-default" role="progressbar" aria-valuenow="{{$response->percentage}}"
                    aria-valuemin="0" aria-valuemax="100" style="width: {{$response->percentage}}%;"></div>
            </div>
        </div>


        <div class="jumbotron text-center">
            <p>{{$response->result}}</p>
            <h1 class="display-3">Thank You!</h1>
            <p class="lead">
                <a class="btn btn-primary btn-lg btn-block" href="{{route('home')}}" role="button">Calculate Again</a>
            </p>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/94f4252744.js" crossorigin="anonymous"></script>
</body>

</html>