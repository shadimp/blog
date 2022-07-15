<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/mystyle.css') }} " rel="stylesheet">
</head>

<body>
    <header>
        <div class="top-container">

            <p>
            <h1> صفحه مدیریت ادمین </h1>
            </p>

            <div class="navbar">
                <ul class="menu">
                    <li>
                        <a href="{{ route('mainpage') }}"><i class="fa fa-home" style="font-size:36px"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('cat-list') }}"> مدیریت دسته های خبری</a>
                    </li>
                    <li>
                    <a href="{{ route('content-list') }}"> مدیریت متن خبر </a>

                    </li>



                </ul>


            </div>
        </div>
    </header>