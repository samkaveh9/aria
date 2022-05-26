<!DOCTYPE html>
<html>

<head>
    <title>project</title>
    <meta charset="utf-8" />
    <link href="/theme/grids.css" rel="stylesheet" />
    <link href="/theme/styles.css" rel="stylesheet" />
    <link href="/theme/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="/theme/css/bootstrap-grid.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">


    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

</head>

<body>
    <!-- Final Example -->
    <div id="topmenu">
        <nav class="wrapper">
            <ul>
                <li><a href="{{ route('home') }}">خانه</a></li>
                <li><a href="{{ route('about') }}">درباره ما</a></li>
                <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                <li><a href="{{ route('guide') }}">راهنما</a></li>

            </ul>
        </nav>
    </div>

    <img src="images/menu.png" id="button1" />

    <header id="header">
        <div class="wrapper">
            <div class="row">
                <div id="search" class="col-xs-12 col-sm-8">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <input type="search" name="search" placeholder=" جستجو کنید" />
                        <input type="submit" value="جستجو" />
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div style="margin-top: 30px;background-color: white;" class="container-fluid">
        <div class="row" style="background-color: text-center">
                راهنما
        </div>

        <script src="/theme/scripts/jquery.js"></script>
        <script src="/theme/scripts/app.js"></script>
</body>

</html>
