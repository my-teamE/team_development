<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link href="{{ mix('css/top.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <title>@yield('pageTitle') - チーム制作２</title>

</head>
    <body style="background-color:rgb(56, 54, 54)">
        <div class="wrapper h-screen ">
                    <header class= "fixed w-full border-b border-green-200" style="background-color:rgb(109, 106, 106); z-index: 2">
                        <div class="container mx-auto py-3 ml-3" style="padding-left:30px">
                                <a href="{{route("toppage")}}"><h2 class=" text-white text-4xl" style="font-family: 'Aclonica', sans-serif;"><b style="color: aqua">ECC </b>Community</h2></a>
                                <h2 class="text-3xl text-white pl-50">@yield('title')</h2>
                        </div>
                    </header>
            <main class=" w-full h-full" style="padding:0 150px">
                <div class="container text-white shadow-md hover:shadow-lg transition-shadow px-0" style="background-color:rgb(56, 54, 54);padding-top:120px">
                    @yield('content')

                </div><!--/.container-->
            </main>

             {{-- お知らせ機能 --}}
            <div class="notification-container hidden absolute top-1/4 left-1/3 right-1/3 px-4 bg-black rounded-lg shadow-md border border-gray-300 animate__animated"
            id="notification">
            <button class="close-button absolute right-2 text-blue-700 hover:text-red-600 text-xl">&times;</button>
            {{-- ここエラー出てます　修正お願いします --}}
            {{-- @if ($profile)
                @if ($profile->message===null)
                        <p class="text-gray-300 text-lg py-4">通知がありません！</p>
                @else
                <p class="text-gray-300 text-lg py-4">{{ $profile->message }}</p>
                @endif
            @endif --}}
        </div>

        <div class="hidden fixed top-0 right-0  sm:block z-10">
            {{-- login 画面 --}} {{-- login中の時 --}}
                <div class=" text-right flex">
                    <form action="{{ route('profile') }}" method="get">
                        @csrf
                        <button id="btm" class="text-xl" title='Profile'>
                            <i class="menu fas fa-user text-yellow hover:text-gray-100 " style="padding:5px"></i>
                        </button>
                    </form>
                    {{-- <button id="btm" class="group-hover:opacity-1">
                    <i class='fas fa-bell text-yellow hover:text-gray-100' id="showNotificationButton" style='padding:5px'></i>
                </button> --}}
                    <button id="btm" title="通知">
                        <i class='fas fa-bell text-yellow hover:text-gray-100'  id="showNotificationButton"style='padding:5px'></i>
                    </button>
                    <button id="btm" title="Message">
                        <i class="far fa-comment-dots hover:text-gray-100" id="showNotificationButton" style='padding:5px'></i>
                    </button>
                    <form action="{{ route('logout') }}" method="get">
                        @csrf
                        <button class="text-lg" id="btm" style="padding-top:1px" title="Logout">Logout </button>
                    </form>
                </div>

        </div>
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        <script src="{{ asset('js/apply.js') }}"></script>
        <script src="{{ asset('js/ranking.js') }}"></script>

    </body>
</html>
