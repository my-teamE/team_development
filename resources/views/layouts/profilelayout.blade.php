<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                    <div class="container mx-auto py-4 ml-30px">
                        <div  style="padding-left:50px">
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
