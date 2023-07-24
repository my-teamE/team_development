@extends('layouts.layout')
@section('pageTitle', 'postpage')
{{-- @section('title', 'ECC コンミュニティ') --}}
@section('content')
         <main>
            <div class="split-container">
                    <div class="location-contr" id="" style="padding:20px 0px">
                        <div id="location" class="text-center py-3">
                            <a href="" >
                              <button class="bg-gray-100 hover:bg-blue-200 focus:bg-blue-300" style="border:solid rgb(69, 41, 134)">ハッカソン</button>
                              </a>
                            <a href=""><button class="bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200" style="border:solid rgb(155, 200, 67)">イベント</button></a>
                            <a href=""><button class="bg-gray-100 hover:bg-red-200 focus:bg-red-300" style="border:solid rgb(183, 68, 68)">WEB</button></a>
                        </div>
                        <div id="location" class="text-center py-3">
                            <a href=""><button class="bg-gray-100 hover:bg-blue-200 focus:bg-blue-300"style="border:solid rgb(69, 41, 134)">メンバー募集</button></a>
                            <a href=""><button class="bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200"style="border:solid rgb(155, 200, 67)">アイデア募集</button></a>
                            <a href="{{ route('hoge') }}"><button class="bg-gray-100 hover:bg-red-200 focus:bg-red-300"style="border:solid  rgb(183, 68, 68)">過去の制作物</button></a>
                        </div>
                   </div>

                <div class="container1 p-2 " style="background: rgb(38, 36, 36)">
                    <p style="font-size: 25px; padding-left:25px">過去の代表制作品</p>
                    <div class="slider flex overflow-hidden ">
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/project1.png')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/project2.jpg')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/project3.jpg')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/student1.jpg')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/aaa.jpg')}}" alt=""/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/20210311134726.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <h4 class="title" style="font-size:30px;padding:2% 0;width:30%">By the community, for the community </h4>
                 {{-- 検索 --}}
                    <div class="relative text-end pt-7" style="width:70%;">
                        <input class="bg-gray-300 px-3 py-1.5 focus:outline-none focus:ring-red-500 focus:border-red-500 rounded-md text-black " style="width:36%" type="search" id="search" placeholder="検索キーワード    ">
                        {{-- <input class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-black" style="width:40%" type="search" placeholder=" 検索"> --}}
                        <button id="searchbt" class="bg-blue-400 hover:bg-blue-600 rounded-md text-white w-10 py-1.5 ">
                        <i class="fa fa-search"></i>
                        </button>
                    </div>
            </div>
    <section class="grid grid-cols-1 lg:grid-cols-4 gap-2 " id="view-index">
        @php
        $count = 0;
        $array=["Naoo","a","b","c","d","e","f","abc"];
        @endphp
        <h1 class="text-lg" id="a">検索したプロジェクトはございません！！！</h1>
         @foreach ($eventRecords as $record)
         <!-- 一覧画面 -->
         <article class="photo-list row-span-2 bg-black-100 hover:bg-black-300 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <a href="{{ asset('/apply/'. $record->id) }}" class="photo-link ">
                <img class="photo-thumb photo-1 "
                src="{{ asset('/storage/postimages/' . $record->image) }}" alt="" width="640"
                height="360" alt="button-open" />
                <div class="photo-meta ">
                    <p class="title text-yellow-500 text-2xl ">Project : {{ $record->title }} </p>
                    <p class="user text-lg pl-2">{{ $record->name }}</p>
                </div>
                <p class="text-gray-400 text-xs text-end pr-6"><time datetime="投稿記事の⽇時">2023/07/26</time></p>
            </a>
         </article>
     @endforeach
    </section>
</main>
  {{-- お知らせ機能 --}}
  <div class="notification-container hidden absolute top-1/4 left-1/3 right-1/3 px-4 bg-black rounded-lg shadow-md border border-gray-300 animate__animated" id="notification">
    <button class="close-button absolute right-2 text-blue-700 hover:text-red-600 text-xl">&times;</button>
    <div class="py-3 flex">
        <div style="width: 90%">
            <p class="text-gray text-lg">ここはお知らせです</p>
        </div>
         {{-- <div class="text-end">
            <button class="mail text-xl"><i class="fa fa-envelope"></i></button>
            <button class="mail-open text-xl"><i class="fa fa-envelope-open-o"></i></button>
         </div> --}}

    </div>

  </div>
    <div class="hidden fixed top-0 right-0  sm:block z-10">
        {{-- login 画面 --}}
        {{-- login中の時 --}}

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
        {{-- <div class="flex">
            <div style="width:50%">

            </div> --}}
            {{-- <div>
                <ul class="overlay hidden text-gray-300 text-black" style="background:rgb(126, 108, 108)">
                    <li class="p-1 border-l border-b transition duration-300 ease-in-out transform hover:bg-gray-600 hover:text-white focus:bg-gray-600 focus:outline-none">
                      <form action="{{ route('profile') }}" method="get">
                        @csrf
                        <button class="">Profile</button>
                      </form>
                    </li>
                    <li class="p-1 border-l border-b transition duration-300 ease-in-out transform hover:bg-gray-600 hover:text-white focus:bg-gray-600 focus:outline-none">
                      <form action="{{ route('logout') }}" method="get">
                        @csrf
                        <button >Logout</button>
                      </form>
                    </li>
                  </ul>

            </div>
        </div>--}}

            {{-- loginされてないとき --}}
        @else
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="bt">Login</button>
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
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"  id="bt" >Register</button>
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
                        <input type="password" id="password" class="pb-3 border-transparent outline-none bg-aliceblue"
                            placeholder="PassWord" required>
                        <label for=""><b>Repeat Password</b></label>
                        <input type="password" id="repassword" class="pb-3 border-transparent outline-none bg-aliceblue"
                            placeholder="RepassWord" required>
                        <button type="submit">Register</button>
                        <p style="text-align: center ">Login with <a href="">gmail</a>,<a href="">facebook</a>
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
    </section>


@endsection
