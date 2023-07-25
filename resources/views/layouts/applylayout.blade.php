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
</main>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
