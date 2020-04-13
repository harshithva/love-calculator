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

        <h2 class="text-info font-weight-bold">Welcome to this great invention of Doctor Love!</h2><br>
        <p>We all know that a name can tell a lot about a person. Names are not randomly chosen: they all have a
            meaning. Doctor Love knew this so he made another great invention just for the lonely you!<br><br>

            To find out what the chances for you and your dream partner are, just fill in both full names (both
            first and last name) in the two text boxes below, and press Calculate.</p>

        <form method="POST" action="/love">

            {{ csrf_field() }}
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group shadow p-3 mb-5 bg-white rounded border border-warning">
                <label for="exampleInputEmail1">Your Name</label>
                <input type="text" class="form-control" name="name_1">
                <small id="emailHelp" class="form-text text-muted">We'll never your details with anyone else.</small>
            </div>
            <div class="form-group shadow p-3 mb-5 bg-white rounded border border-warning">
                <label for="exampleInputEmail1">Your Crush</label>
                <input type="text" class="form-control" name="name_2">
                <small id="emailHelp" class="form-text text-muted">Enter person's name you are having crush on!.</small>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-warning mb-2 text-white">Calculate</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://kit.fontawesome.com/94f4252744.js" crossorigin="anonymous"></script>
</body>

</html>