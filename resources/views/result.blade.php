<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Love Calculator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-info">
        <a class="navbar-brand text-white" href="#">
            {{-- <img {{ asset('./img/logo.png') }} width="30" height="30" class="d-inline-block align-top" alt=""> --}}
            <i class="fas fa-heart text-white"></i>&nbsp;
            Love Calculator
        </a>
    </nav>

    <div class="container-fluid mt-3">
        <div class="progress-wrapper">
            <div class="progress-info">
                <div class="progress-label">
                    <span>Task completed</span>
                </div>
                <div class="progress-percentage">
                    <span>60%</span>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-default" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                    aria-valuemax="100" style="width: 60%;"></div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/94f4252744.js" crossorigin="anonymous"></script>
</body>

</html>