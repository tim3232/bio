<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.chank.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page error</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/main.css">

</head>

<body>

<div id="notfound">
    <div class="notfound-bg"></div>
    <div class="notfound">
        <div class="notfound-404">
            <h2>Oops! Page with this slug already exists!</h2>
            <h2>Please, change your slug!</h2>
        </div>
        <button class="btn btn-primary"><a href="{{route('page')}}" class="text-white">Back To Homepage</a></button>
    </div>
</div>

</body>

</html>
