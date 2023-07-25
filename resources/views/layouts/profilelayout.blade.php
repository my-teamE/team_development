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
.profile{
    padding: 0px 100px;
}
img{
    border-radius: 40%;
    width:  300px;       /* ※縦横を同値に */
    height: 200px;       /* ※縦横を同値に */
}
.avatar-con{
   display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size:25px;
}
.introduction{
    display: flex;
    justify-content: center;
    align-items: center;

}
.introduction p{
    padding-bottom: 13px;
}

</style>
 <title>@yield('pageTitle') - チーム制作２</title>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <div class="wrapper w-screen h-screen bg-gray-50">
                <header style="background-color:rgb(126, 108, 108)">
                    <div class="container mx-auto py-3 ml-30px">
                        <div  style="padding-left:10px">
                            <a href="{{route("toppage")}}"><h2 class=" text-white text-3xl" style="font-family: 'Aclonica', sans-serif;"><b style="color: aqua">ECC </b>Community</h2></a>
                            <h2 class="text-3xl text-white pl-50">@yield('title')</h2>
                        </div>
                    </div>
                </header>
        <main>
        <div >
            @yield('content')
        </div><!--/.container-->
        </div>
        </div>
        </main>
    </div><!--/.wrapper-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/top.js') }}"></script>
    <script>
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

        const edit=document.getElementById("editbt");
        console.log(edit);
        var profile_edit = document.querySelector(".profile-edit");
        profile_edit.hidden=true;
        edit.addEventListener('click', function() {
            var profile = document.querySelector(".profile");
            console.log(profile);
            profile.hidden= true;
            var profile_edit = document.querySelector(".profile-edit");
            profile_edit.hidden=false;
        });
    </script>


</body>
