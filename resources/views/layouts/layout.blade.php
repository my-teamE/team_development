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
    <style src="{{ asset('css/top.css') }}"></style>
    <title>@yield('pageTitle') - チーム制作２</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>

<body>
    <div class="wrapper h-screen ">
        <header class="fixed w-full border-b border-green-200" style="background-color:rgb(109, 106, 106); z-index: 1">
            <div class="container mx-auto py-3 ml-3" style="padding-left:30px">
                <a href="{{ route('toppage') }}">
                    <h2 class=" text-white text-5xl" style="font-family: 'Aclonica', sans-serif;"><b
                            style="color: aqua">ECC </b>Community</h2>
                </a>
                <h2 class="text-2xl text-white pl-50">@yield('title')</h2>
            </div>
        </header>
        <main style="background-color:rgb(56, 54, 54);padding:0 100px">
            <div class="container text-white shadow-md hover:shadow-lg transition-shadow"
                style="background-color:rgb(56, 54, 54);padding:100px 30px">
                @yield('content')

            </div><!--/.container-->
        </main>

        {{-- お知らせ機能 --}}
        <div class="notification-container hidden absolute top-1/4 left-1/3 right-1/3 px-4 bg-black rounded-lg shadow-md border border-gray-300 animate__animated"
            id="notification">
            <button class="close-button absolute right-2 text-blue-700 hover:text-red-600 text-xl">&times;</button>
            {{-- @if ($profile)
                @if ($profile->message === null)
                        <p class="text-gray-300 text-lg py-4">通知がありません！</p>
                @else
                <p class="text-gray-300 text-lg py-4">{{ $profile->message }}</p>
                @endif
            @endif --}}

        </div>
        <div class="hidden fixed top-0 right-0  sm:block z-10">
            {{-- login 画面 --}} {{-- login中の時 --}}
            @auth
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
                        <i class='fas fa-bell text-yellow hover:text-gray-100'
                            id="showNotificationButton"style='padding:5px'></i>
                    </button>
                    <button id="btm" title="Message">
                        <i class="far fa-comment-dots hover:text-gray-100" id="showNotificationButton"
                            style='padding:5px'></i>
                    </button>
                    <form action="{{ route('logout') }}" method="get">
                        @csrf
                        <button class="text-lg" id="btm" style="padding-top:1px" title="Logout">Logout </button>
                    </form>
                </div>
                {{-- loginされてないとき --}}
            @else
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
                    id="bt">Login</button>
                <div id="id01" class="modal">
                    <form class="modal-content animate" action="{{ route('login') }}" method="post">
                        @csrf
                        <h1 class="text-center text-4xl font-semibold pt-3" style="color: aqua">Login</h1>
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">&times;</span>
                        {{-- <div class="imgcontainer">
                            <img src="{{ url('/images/upload1.png') }}" alt="Avatar" class="avatar mx-auto my-auto "
                                style="border-radius:50%">
                        </div> --}}
                        <div class="container2">
                            <hr style="border:solid 2px aqua;">
                            <br>
                            <p class="text-center"></p>
                            <label for="uname"><b>User</b></label>
                            <input type="id" id="id" name="student_id" placeholder="Student ID"
                                class="pb-3 border-transparent outline-none bg-aliceblue" title="Student ID" required>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" id="password" name="password"
                                class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="PassWord" required>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label><br>
                            <button type="submit">Login</button>
                        </div>
                        <div class="container-b" style="background-color:#5b5656">
                            <span class="psw underline"> <a href="#">Forgot password?</a></span>
                        </div>
                    </form>
                </div>
                {{-- 新規登録 --}}
                <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"
                    id="bt">Register</button>
                <div id="id02" class="modal">
                    <form class="modal-content animate" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close"
                                title="Close Modal">&times;</span>
                        </div>
                        <div class="container2">
                            <h1 class="text-center text-3xl font-semibold pt-3 " style="color: aqua">Register</h1>
                            <hr style="border:solid 2px aqua;margin-top:10px">
                            <label for="uname"><b>User ID</b></label>
                            <input type="id" id="id" placeholder="Student ID"
                                class="pb-3 border-transparent outline-none bg-aliceblue" title="Student ID" required>
                            <label for=""><b>Password</b></label>
                            <input type="password" id="password"
                                class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="PassWord" required>
                            <label for=""><b>Repeat Password</b></label>
                            <input type="password" id="repassword"
                                class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="RepassWord"
                                required>
                            <button type="submit">Register</button>
                            <p style="text-align: center ">Login with <a href="">gmail</a>,<a
                                    href="">facebook</a>
                            </p>
                        </div>

                    </form>
                </div>
                {{-- @else
                            <a href="#"><i class="far fa-comment-dots text-yellow hover:text-blue-600" style='font-size:24px; padding:5px '></i></a>
                            <a href="{{ route('profile') }}" >
                                <i class="fas fa-user text-yellow hover:text-yellow-600" style="font-size: 26px;"></i>
                            </a> --}}
            @endauth
        </div>
        <script src="{{ asset('js/apply.js') }}"></script>
        <script src="{{ asset('js/top.js') }}"></script>

</body>

</html>
