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
<style>

</style>
 <title>@yield('pageTitle') - チーム制作２</title>
 <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="wrapper h-screen "  style="background-color:rgb(109, 106, 106);">
                    <header class= "fixed w-full border-b border-green-200" style="background-color:rgb(126, 108, 108); z-index: 1">
                        {{-- <div class="container  top-0 left-0 w-full bg-gray-200 p-4"> --}}
                        <div class="container mx-auto py-3 ml-3" style="padding-left:30px">
                                <a href="{{route("toppage")}}"><h2 class=" text-white text-5xl" style="font-family: 'Aclonica', sans-serif;"><b style="color: aqua">ECC </b>Community</h2></a>
                                <h2 class="text-3xl text-white pl-50">@yield('title')</h2>
                        </div>
                    </header>
            <main style="background-color:rgb(56, 54, 54);padding:100px 0 ">
                <div class="container text-white w-full h-full mx-auto" style="background-color:rgb(56, 54, 54);">
                    @yield('content')

                </div><!--/.container-->
            </main>
        </div><!--/.wrapper-->
        <script src="{{ asset('js/app.js') }}"></script>
         <script src="{{ asset('js/top.js') }}"></script>
         <script>
            document.addEventListener("DOMContentLoaded", function() {
            var scrollButtons = document.querySelectorAll(".btsearh");

                scrollButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var target = button.getAttribute("data-target");
                    var targetElement = document.getElementById(target);

                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: "smooth" });
                        }
                    });
                });


                //気に入りの処理
                var heartIcon = document.querySelectorAll("#heartIcon");
                console.log(heartIcon);
                heartIcon.forEach(function(e){
                    e.addEventListener("click", function() {
                        if (e.style.color === "white" || e.style.color === "") {
                        console.log("red");
                        e.style.color = "red";
                        } else {
                        e.style.color = "white";
                        }
                    });
                })
            });

         </script>
    </body>
</html>
