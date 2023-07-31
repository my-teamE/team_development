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
<style>
/* css */


</style>
 <title>@yield('pageTitle') - チーム制作２</title>
</head>
<body style="background-color:rgb(56, 54, 54)">
    <div class="wrapper h-screen ">
        <header class= "fixed w-full border-b border-green-200" style="background-color:rgb(126, 108, 108); z-index: 1">
            {{-- <div class="container  top-0 left-0 w-full bg-gray-200 p-4"> --}}
            <div class="container mx-auto py-3 ml-2 ">
                <div  style="padding-left:10px">
                    <a href="{{route("toppage")}}"><h2 class=" text-white text-3xl" style="font-family: 'Aclonica', sans-serif;"><b style="color: aqua">ECC </b>Community</h2></a>
                    <h2 class="text-3xl text-white">@yield('title')</h2>
                </div>
        </header>
    <main style="padding-top:100px ">
        <div class="container text-white w-full h-full mx-auto" style="background-color:rgb(56, 54, 54);">
            @yield('content')

        </div><!--/.container-->
        <div class="notification-container hidden absolute top-1/4 left-1/3 right-1/3 px-4 bg-black rounded-lg shadow-md border border-gray-300 animate__animated"
        id="notification">
        <button class="close-button absolute right-2 text-blue-700 hover:text-red-600 text-xl">&times;</button>
        <p class="text-gray text-lg py-4">ここはお知らせです</p>
        </div>
        <div class="hidden fixed top-0 right-0  sm:block z-10">
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
                    <i class='fas fa-bell text-yellow hover:text-gray-100' id="showNotificationButton"style='padding:5px'></i>
                    </button>
                <button id="btm" title="Message">
                    <i class="far fa-comment-dots hover:text-gray-100" id="showNotificationButton" style='padding:5px'></i>
                </button>
                <form action="{{ route('logout') }}" method="get" id="btm" >
                    @csrf
                    <button class="text-lg" style="padding-top: 1px" title="Logout">Logout </button>
                </form>
            </div>
        </div>
    </main>
    </div>
<script >
    // 応募ボタンのクリック動作です
    // const applyButton = document.getElementById("applyButton");
    // const currentUrl = window.location.href;
    // const parts = currentUrl.split('/');
    // // URLの最後の値を抜き出す
    // const extractedValue = parts[parts.length - 1];
    // console.log(extractedValue);

    // // const applyAnker = document.querySelector("#applyAnker");
    // // applyAnker.addEventListener("click", (event) => {
    // //     event.preventDefault();
    // // });
    // applyButton.addEventListener("click", async () => {
    //   console.log("aaa");
    //   try {
    //     await axios.post(`http://localhost:8000/apply/${extractedValue}`, { });
    //   } catch (err) {
    //     console.log(err.response.data.message);
    //   }
// })
            //知らせ
            const showNotificationButton = document.getElementById("showNotificationButton");
            const notificationContainer = document.getElementById("notification");
            const closeButton = document.querySelector(".close-button");

            showNotificationButton.addEventListener("click", function () {
            notificationContainer.classList.remove("hidden", "animate__fadeOut");
            notificationContainer.classList.add("animate__fadeIn");
            });

            closeButton.addEventListener("click", function () {
            notificationContainer.classList.remove("animate__fadeIn");
            notificationContainer.classList.add("animate__fadeOut");
            setTimeout(() => {
                notificationContainer.classList.add("hidden");
            }, 500);
            });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
