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
              var searchInput = document.getElementById("searchbt");
              console.log(searchInput);
              const a= document.getElementById("a");
                a.hidden=true;
              searchInput.addEventListener('click', function() {
                a.hidden=false;
                var searchValue = document.getElementById("search").value.toLowerCase();
                var articles = document.querySelectorAll(".photo-list");
                console.log(searchValue);
                articles.forEach(function(article) {
                  var articleTitle = article.querySelector(".title").textContent.toLowerCase();
                  console.log(articleTitle);
                  if (articleTitle.includes(searchValue)) {
                   console.log("dung")
                   a.hidden=true;
                    article.style.display = "block";
                  }else{
                    console.log("tat")
                      article.style.display = "none";
                  }
                //   if (!articleTitle.includes(searchValue)) {
                //     document.getElementById("a");
                //     article.style.display = "none";
                //     const a= document.createElement("h2");
                //     a.textContent="khong co project tren"
                //     document.getElementById("a").append(a);
                //   }
                });
                const article= document.querySelectorAll(".photo-list");
                    console.log(article)
                    if(!article){
                        console.log("null1")
                        // a.hidden=false;
                    }
              });
            });

            const userIcon = document.querySelector(".menu");
            const overlayMenu = document.querySelector(".overlay");

            userIcon.addEventListener("click", function () {
            overlayMenu.classList.toggle("hidden");
            });

            document.addEventListener("click", function (event) {
            if (!userIcon.contains(event.target) && !overlayMenu.contains(event.target)) {
                overlayMenu.classList.add("hidden");
            }
            });

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

            //mail
            // const mail = document.querySelector(".mail");
            // const mail_open = document.querySelector(".mail-open");
            // mail.hidden =false;
            // mail_open.hidden=true;
            // mail.addEventListener("click", function () {
            //     mail.hidden =true;
            //     mail_open.hidden=false;
            // });

          </script>
    </body>
</html>
