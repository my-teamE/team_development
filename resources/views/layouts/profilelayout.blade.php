<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
</head>
<body>
    <div class="wrapper w-screen h-screen bg-gray-50">
                <header style="background-color:rgb(126, 108, 108)">
                    <div class="container mx-auto py-4 ml-30px">
                        <div  style="padding-left:50px">
                            <h1 class="text-lg text-white mb-6" >チーム制作２-TEAM E</h1>
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

</body>
