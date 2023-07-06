<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/top.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>

    </style>
    <title>@yield('pageTitle') - チーム制作２</title>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper w-screen h-screen bg-gray-50" style="background-color:rgb(56, 54, 54);">
        <header style="background-color:rgb(126, 108, 108)">
            <div class="container mx-auto py-4 ml-30px">
                <div style="padding-left:50px">
                    {{-- <h1 class="text-xl text-white mb-6" >チーム制作 - TEAM E</h1> --}}
                    <h2 class="text-white text-center pl-50"><em
                            style="font-family: 'Sofia', sans-serif; font-size:40px">ECC Community</em></h2>
                    {{-- <h2 class="text-3xl text-white pl-50">@yield('title')</h2> --}}
                </div>
            </div>
        </header>
        <main style="background-color:rgb(56, 54, 54);">
            <div class="container text-white w-full h-full mx-auto" style="background-color:rgb(56, 54, 54);">
                @yield('content')

            </div>
            <!--/.container-->
        </main>
    </div>
    <!--/.wrapper-->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/top.js') }}"></script> --}}

</body>

</html>
